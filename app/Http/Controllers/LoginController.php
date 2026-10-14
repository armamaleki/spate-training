<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    // نمایش فرم ورود
    public function show()
    {
        if (Auth::check()) {
            return redirect()->route('admin.index');
        }

        return view('login');
    }
    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|string',
        ], [
            'email.required' => 'ایمیل الزامی است.',
            'email.email' => 'ایمیل معتبر نیست.',
            'password.required' => 'رمز عبور الزامی است.',
        ]);

        $credentials = $request->only('email', 'password');
        $remember = $request->boolean('remember');

        if (Auth::attempt($credentials, $remember)) {
            $request->session()->regenerate();
            return redirect()->intended(route('admin.index'))
                ->with('success', 'خوش برگشتی! با موفقیت وارد شدی.');
        }

        return back()->withErrors([
            'email' => 'ایمیل یا رمز عبور اشتباه است.',
        ])->onlyInput('email');
    }
    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->route('login');
    }
}
