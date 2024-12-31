<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>Tambah User</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="{{ asset('css/sidebar.css') }}">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet" />
</head>
 <body class="bg-gray-100">
  <div class="flex">
    <!-- Sidebar -->
    <x-admin-sidebar>
    </x-admin-sidebar>
    <div class="flex-1 p-8">
    <div class="flex justify-between items-center mb-8">
        <a class="text-blue-700" href="/admin/data-user">
            <i class="fas fa-arrow-left text-xl"></i>
        </a>
        <h1 class="text-2xl font-bold">Tambah User</h1>
        <div class="flex items-center space-x-4">
            <i class="fas fa-moon text-xl"></i>
            <i class="fas fa-bell text-xl"></i>
        </div>
    </div>
    <form class="space-y-4" method="" action="">
        <div class="flex items-center">
            <label for="nama" class="w-32">Nama User</label>
            <input class="border p-2 w-full" name="nama" id="nama" placeholder="Masukan Nama User" type="text"/>
        </div>
        <div class="flex items-center">
            <label for="email" class="w-32">Email</label>
            <input class="border p-2 w-full" name="email" id="email" placeholder="Masukan Email" type="email"/>
        </div>
        <div class="flex items-center">
            <label for="password" class="w-32">Password</label>
            <input class="border p-2 w-full" name="pass" id="pass" placeholder="Masukan Password" type="password"/>
        </div>
        <div class="flex items-center">
            <label for="role" class="w-32">Role</label>
            <select class="border p-2 w-full" name="role" id="role">
                <option>Masukan Role User</option>
                <option value="1">Super Admin</option>
                <option value="2">Manager</option>
                <option value="3">Customer-Service</option>
                <option value="4">Customer</option>
            </select>
        </div>
        <div class="flex items-center">
            <label for="gambar" class="w-32">Gambar</label>
            <input class="border p-2 w-full" name="gambar" id="gambar" placeholder="Upload Gambar" type="file"/>
        </div>
        <div class="flex justify-center">
            <button class="bg-gray-300 text-gray-700 px-4 py-2 rounded" name="Ubah" id="Ubah" type="submit">Tambah User</button>
        </div>
    </form>
    </div>
  </div>
  <script src="{{ asset('js/sidebar.js') }}"></script>
 </body>
</html>
