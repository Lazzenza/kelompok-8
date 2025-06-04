<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index()
    {
        return view('login.index');
    }
    public function proses(Request $request)
    {
        $credential = $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ], [
            'email.required' => 'Email tidak boleh kosong!',
            'email.email' => 'Format Email salah!',
            'password.required' => 'Password tidak boleh kosong!'
        ]);

        if (Auth::attempt($credential)) {
            $request->session()->regenerate();

            // Ambil user yang login
            $user = Auth::user();

            // Cek role dan redirect sesuai role
            if ($user->role === 'admin') {
                return redirect()->route('home');  // route admin
            } elseif ($user->role === 'pelanggan') {
                return redirect()->route('home-pelanggan');  // route pelanggan
            } else {
                Auth::logout();
                return back()->withErrors([
                    'email' => 'Role tidak dikenali!'
                ])->onlyInput('email');
            }
        }

        return back()->withErrors([
            'email' => 'Autentikasi Gagal!',
        ])->onlyInput('email');
    }

    public function keluar(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect()->route('home');
    }
}
