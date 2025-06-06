<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Language;
use App\Models\MailingGroup;
use App\Models\Translation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use \Illuminate\Http\RedirectResponse;
use App\Services\UserSettingsService;

class UserController extends Controller
{
    /**
     * @var UserSettingsService
     */
    private $userSettingsService;

    /**
     * Create a new controller instance.
     */
    public function __construct(UserSettingsService $userSettingsService)
    {
        $this->userSettingsService = $userSettingsService;
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $users = User::all();
        return view('users.index', ['users' => $users]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id = null)
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
    public function update(Request $request, string $id = '')
    {
        $user = $id ? User::findOrFail($id) : Auth::user();
        $this->userSettingsService->updateUserSettings($request, $user);

        return redirect()->back()->with('success', __('User settings saved'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }

    /**
     * Handle login
     * @param Request $request
     * @return RedirectResponse
     */
    public function login(Request $request): RedirectResponse
    {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            return redirect('foods');
        }

        return back()->withErrors([
            'email' => __('The provided credentials do not match our records.'),
        ])->onlyInput('email');
    }

    /**
     * Summary of logout
     * @param Request $request
     * @return RedirectResponse
     */
    public function logout(Request $request): RedirectResponse
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/');
    }

    public function register(Request $request)
    {
        $validate = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|confirmed',
        ]);

        $user = User::create([
            'name' => $validate['name'],
            'email' => $validate['email'],
            'password' => bcrypt($validate['password']),
        ]);

        Auth::login($user);
        return redirect('foods');
    }
}
