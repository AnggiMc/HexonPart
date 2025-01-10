<?php

// namespace App\Http\Controllers;

// use Illuminate\Http\Request;

// class RegisterController extends Controller
// {
//     public function index()
//     {
//         return view('auth.Register');
//     }
// }

// app/Http/Controllers/RegisterController.php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    /**
     * Menampilkan form registrasi.
     *
     * @return \Illuminate\View\View
     */
    public function showRegistrationForm()
    {
        return view('auth.Register'); // Sesuaikan dengan nama view Anda
    }

    /**
     * Menyimpan data user baru ke database.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function register(Request $request)
    {
        // Validasi input
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8|confirmed',
        ]);

        // Simpan data user ke database
        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        // Redirect ke halaman login dengan pesan sukses
        return redirect('auth/Login')->with('success', 'Registrasi berhasil! Silakan login.');
    }
}