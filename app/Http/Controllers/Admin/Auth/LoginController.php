<?php

namespace App\Http\Controllers\Admin\Auth;

use App\Events\AdminVerificationEvent;
use App\Http\Controllers\Controller;

use App\Http\Requests\Auth\AdminAuthRequest;
use App\Models\Admin;
use Illuminate\Foundation\Auth\EmailVerificationRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{

    public function verifyEmail(EmailVerificationRequest $request) {
        if ($request->user()->hasVerifiedEmail()) {
            return redirect()->intended(route('admin/dashboard', absolute: false).'?verified=1');
        }

        if ($request->user()->markEmailAsVerified()) {
            // event(new Verified($request->user()));

            }

        return redirect()->intended(route('dashboard', absolute: false).'?verified=1');
    }

    public function dashboard()
    {
        return view('admin.dashboard');
    }
    public function logout(Request $request)
    {
        Auth::guard('admin')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect()->route('admin.login');
    }
    //
    public function ShowLoginPage()
    {
        return view('admin.auth.login');
    }
    public function ShowRegPage()
    {
        return view('admin.auth.register');
    }
    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => 'required|email|unique:admins',
            'password' => ['required', 'confirmed'],
        ]);

        $admin = Admin::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        event(new AdminVerificationEvent($admin));

        Auth::guard('admin')->login($admin);

        // return redirect(RouteServiceProvider::ADMIN_HOME);
        return redirect()->route('admin.dashboard');
    }


    public function authenticate(AdminAuthRequest $request): RedirectResponse
    {
        // এই লাইনটি আপনার AdminAuthRequest এর authenticate() মেথড কল করবে
        $request->authenticate();

        // session regenerate করুন
        $request->session()->regenerate();

        // dashboard এ redirect করুন
        return redirect()->intended(route('admin.dashboard'));
    }
}
