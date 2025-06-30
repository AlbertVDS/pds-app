<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use App\Models\User\User;


class AuthController extends Controller
{

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
            'email' => translate('The provided credentials do not match our records.'),
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

    /**
     * Handle user registration
     * @param Request $request
     * @return RedirectResponse
     */
    public function register(Request $request): RedirectResponse
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

    /**
     * Create API token for the user
     * @param User $user
     */
    public function createToken(User $user)
    {
        auth()->user()->tokens()?->delete();
        auth()->user()->createToken('api');
        return redirect()->back()->with('success', translate('API token created successfully.'));
    }

    /**
     * Delete API token for the user
     * @param User $user
     */
    public function deleteToken(User $user)
    {
        auth()->user()->tokens()?->delete();
        return redirect()->back()->with('success', translate('API token deleted successfully.'));
    }
}
