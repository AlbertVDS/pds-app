<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\Language;
use App\Models\MailingGroup;
use App\Services\UserSettingsService;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;



class ProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('profile.index', [
            'pageTitle' => __('User Profiles'),
            'users' => User::paginate(20),
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(User $user): View
    {
        return view('profile.edit', [
            'pageTitle' => __('User Settings'),
            'user' => $user,
            'defaultLanguage' => Language::getDefaultLanguage(),
            'languages' => Language::getAvailableLanguages(),
            'mailingGroups' => MailingGroup::all(),
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, User $user): RedirectResponse
    {
        (new UserSettingsService())->updateUserSettings($request, $user);

        return redirect()->back()->with('success', __('User settings saved'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $user): RedirectResponse
    {
        if ($user->id === Auth::id()) {
            return redirect()->back()->withErrors(__('You cannot delete your own account'));
        }
        $user->delete();
        noty()->success(__('User deleted successfully'));
        return redirect()->route('profiles.user.index');
    }
}
