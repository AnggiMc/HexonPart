<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Menampilkan daftar semua pengguna.
     */
    public function index()
    {
        $users = User::all();
        return view('users.index', compact('users'));
    }

    /**
     * Menampilkan form untuk membuat pengguna baru.
     */
    public function create()
    {
        return view('users.create');
    }

    /**
     * Menyimpan pengguna baru ke database.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'phone' => 'nullable|string|max:15',
            'gender' => 'nullable|in:male,female,other',
            'password' => 'required|string|min:8',
            'role' => 'required|in:super-admin,manager,customer-service,customer',
            'status' => 'required|in:verify,active,banned',
        ]);

        User::create($request->all());

        return redirect()->route('users.index')->with('success', 'User  created successfully.');
    }

    /**
     * Menampilkan detail pengguna tertentu.
     */
    public function show(User $user)
    {
        return view('users.show', compact('user'));
    }

    /**
     * Menampilkan form untuk mengedit pengguna tertentu.
     */
    public function edit(User $user)
    {
        return view('users.edit', compact('user'));
    }

    /**
     * Memperbarui pengguna tertentu di database.
     */
    public function update(Request $request, User $user)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users,email,' . $user->id,
            'phone' => 'nullable|string|max:15',
            'gender' => 'nullable|in:male,female,other',
            'password' => 'nullable|string|min:8',
            'role' => 'required|in:super-admin,manager,customer-service,customer',
            'status' => 'required|in:verify,active,banned',
        ]);

        $user->update($request->all());

        return redirect()->route('users.index')->with('success', 'User  updated successfully.');
    }

    /**
     * Menghapus pengguna tertentu dari database.
     */
    public function destroy(User $user)
    {
        $user->delete();

        return redirect()->route('users.index')->with('success', 'User  deleted successfully.');
    }
}