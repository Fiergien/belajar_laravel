<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;


class LoginController extends Controller
{
    public function index()
    {
        return view('login');
    }

    public function login_proses(Request $request)
    {
        // request menangkap atau menerima nilai
        $validasi = $request->validate([
        'email' => 'required|email',
        'password' => 'required'
        ]);
        // aut untuk memproteksi halaman atau fitur. sehinggga pengguna harus login terlebih dahulu unuk masuk ke halaman dashboard
        if (Auth::attempt($validasi)){
            $request->session()->regenerate();
            return redirect()->intended('/dashboard');
        }

        return back()->with('LoginError','Galal Login');
    }
    
    public function logout(Request $request)

    {
        Aut::logout();
        $request->session()->invalidate();
        $request->session->regenerateToken();
        return redirect('/');
    }
}
