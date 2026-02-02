<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\JsonResponse;
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
    public function login(Request $request): RedirectResponse|JsonResponse
    {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            // If request expects JSON, return token + user for API clients
            if ($request->wantsJson() || $request->expectsJson()) {
                $user = Auth::user();
                $token = $user->createToken('api')->plainTextToken;
                return response()->json([
                    'token' => $token,
                    'user' => $user,
                ]);
            }

            return redirect('foods');
        }

        if ($request->wantsJson() || $request->expectsJson()) {
            return response()->json([
                'message' => translate('The provided credentials do not match our records.'),
            ], 401);
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
     * @return RedirectResponse|JsonResponse
     */
    public function register(Request $request): RedirectResponse|JsonResponse
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
        // If the client expects JSON (API call), return token + user
        if ($request->wantsJson() || $request->expectsJson()) {
            $token = $user->createToken('api')->plainTextToken;
            return response()->json([
                'token' => $token,
                'user' => $user,
            ]);
        }

        return redirect('foods');
    }

    /**
     * Create API token for the user
     * @param User $user
     */
    public function createToken(User $user)
    {
        auth()->user()->tokens()?->delete();
        return response()->json([
            'token' => auth()->user()->createToken('api')->plainTextToken,
        ]);
    }
}
