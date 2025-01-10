<?php

// namespace App\Http\Controllers;

// use App\Http\Controllers\Controller;
// use Illuminate\Http\Request;
// use Illuminate\Support\Facades\Auth;

// class LoginController extends Controller
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth; // Import class Auth yang benar

class LoginController extends Controller

{
    /**
     * Menampilkan form login.
     *
     * @return \Illuminate\View\View
     */
    public function showLoginForm()
    {
        return view('auth.Login'); // Sesuaikan dengan nama view Anda
    }

    /**
     * Menyimpan data login ke session.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    // app/Http/Controllers/LoginController.php

public function login(Request $request)
{
    // Validasi input
    $request->validate([
        'email' => 'required|string|email',
        'password' => 'required|string',
    ]);

    // Cek kredensial login
    if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
        // Redirect ke halaman dashboard jika login berhasil
        return redirect()->intended('user/Home');
    }

    // Redirect ke halaman login dengan pesan error jika login gagal
    return redirect()->back()->withErrors(['email' => 'Kredensial login tidak valid.'])->with('notifikasi', 'error|Kredensial login tidak valid.');
        
}

    

    /**
     * Logout dari aplikasi.
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public function logout()
    {
        Auth::logout();

        // Redirect ke halaman login setelah logout
        return redirect()->route('login');
    }
}