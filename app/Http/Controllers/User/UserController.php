<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\User\User;
use App\Models\Language\Language;
use App\Models\Mailing\MailingGroup;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Services\UserSettingsService;
use Laravel\Sanctum\PersonalAccessToken;

class UserController extends Controller
{
    /**
     * Show the form for editing the specified resource.
     */
    public function edit()
    {
        return view('users.edit', [
            'pageTitle' => translate('User Settings'),
            'user' => Auth::user(),
            'defaultLanguage' => Language::getDefaultLanguage(),
            'languages' => Language::getAvailableLanguages(),
            'mailingGroups' => MailingGroup::all(),
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        $request->validate([
            'user.name' => 'required|string|max:255',
            'language_id' => 'exists:languages,id|max:3',
            'fodmaps' => 'array|max:6',
            'fodmaps.*' => 'boolean',
            'mailing_groups' => 'array|max:100',
            'mailing_groups.*' => 'boolean',
        ]);

        (new UserSettingsService())->updateUserSettings($request, Auth::user());
        noty()->success(translate('User settings saved'));
        return redirect()->back();
    }

    /**
     * Get user data for API
     */
    public function show(Request $request)
    {
        $user = $request->user();
        $user->load(['fodmap', 'mailingGroups']);
        return response()->json($user);
    }

    /**
     * Update user settings via API
     */
    public function settings(Request $request)
    {
        $validated = $request->validate([
            'user.name' => 'sometimes|required|string|max:255',
            'language' => 'sometimes|exists:languages,id|max:3',
            'fodmaps' => 'sometimes|array',
            'fodmaps.*' => 'boolean',
            'mailing_groups' => 'sometimes|array',
            'mailing_groups.*' => 'integer',
        ]);

        $user = Auth::user();
        
        // Update name
        if (isset($validated['user']['name'])) {
            $user->name = $validated['user']['name'];
            $user->save();
        }

        // Update language
        if (isset($validated['language'])) {
            $user->language_id = $validated['language'];
            $user->save();
        }

        // Update FODMAP settings
        if (isset($validated['fodmaps'])) {
            (new UserSettingsService())->updateFodmaps($user, $validated['fodmaps']);
        }

        // Update mailing groups
        if (isset($validated['mailing_groups'])) {
            (new UserSettingsService())->updateMailingGroups($user, $validated['mailing_groups']);
        }

        return response()->json(['success' => true]);
    }

    /**
     * Create a new API token
     */
    public function createToken(Request $request)
    {
        $user = $request->user();
        
        // Delete existing token if any
        $user->tokens()->delete();
        
        // Create new token
        $token = $user->createToken('api-token');
        
        return response()->json(['token' => $token->plainTextToken]);
    }

    /**
     * Get available languages
     */
    public function languages()
    {
        return response()->json([
            'languages' => Language::getAvailableLanguages(),
            'default' => Language::getDefaultLanguage(),
        ]);
    }

    /**
     * Get mailing groups
     */
    public function mailingGroups()
    {
        return response()->json(MailingGroup::all());
    }
}
