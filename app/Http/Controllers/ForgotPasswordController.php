<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Password;

class ForgotPasswordController extends Controller
{
    /**
     * Menampilkan form untuk meminta link reset password.
     *
     * @return \Illuminate\View\View
     */
    public function showLinkRequestForm()
    {
        return view('auth.LupaPassword'); // Sesuaikan dengan nama view Anda
    }

    /**
     * Mengirim email reset password ke pengguna.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function sendResetLinkEmail(Request $request)
    {
        // Validasi input email
        $request->validate(['email' => 'required|email']);

        // Mengirim link reset password
        $status = Password::sendResetLink(
            $request->only('email')
        );

        // Menangani respons berdasarkan status pengiriman
        return $status === Password::RESET_LINK_SENT
            ? back()->with(['status' => __($status)]) // Jika berhasil
            : back()->withErrors(['email' => __($status)]); // Jika gagal
    }
}