<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Inertia\Inertia;

class AdminAuthController extends Controller
{
    public function showLoginForm()
    {
        return Inertia::render('Admin/Auth/Login');
    }

    public function login(Request $request)
    {
        $check = Auth::attempt([
            'email' => $request->email,
            'password' => $request->password,
            'isAdmin' => true,
        ]);
        if ($check) {
            return redirect()->route('admin.dashboard');
        }
        return redirect()->route('admin.login')->with('error', 'Credentials does not match.');
    }

    public function logout(Request $request)
    {
        Auth::guard('web')->logout();
        $request->session()->invalidate();
        return redirect()->route('admin.login');
    }
}
