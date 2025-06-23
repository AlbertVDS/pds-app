<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\Language;
use App\Models\MailingGroup;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Services\UserSettingsService;

class UserController extends Controller
{
    /**
     * Show the form for editing the specified resource.
     */
    public function edit()
    {
        return view('users.edit', [
            'pageTitle' => __('User Settings'),
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

        return redirect()->back()->with('success', __('User settings saved'));
    }
}
