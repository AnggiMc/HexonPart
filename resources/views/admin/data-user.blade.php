<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>Data User</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="{{ asset('css/sidebar.css') }}">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet" />
</head>
 <body class="bg-gray-100">
    <div class="flex">
        <!-- Sidebar -->
         <x-admin-sidebar>
         </x-admin-sidebar>
        <!-- Main Content -->
        <div class="flex-1 p-8">
            <div class="flex justify-between items-center mb-8">
                <h1 class="text-2xl font-bold text-center flex-1">DATA USERS</h1>
                <div class="flex items-center space-x-4">
                    <i class="fas fa-moon text-xl"></i>
                    <i class="fas fa-bell text-xl"></i>
                </div>
            </div>
            <div class="flex justify-between items-center mb-8">
                <a class="bg-blue-600 text-white px-4 py-2 rounded" href="/admin/tambah-user">Tambah User</a>
                <div class="relative">
                    <input class="border rounded pl-10 pr-4 py-2" name="cari" id="cari" placeholder="Cari Users" type="text"/>
                    <i class="fas fa-search absolute left-3 top-1/2 transform -translate-y-1/2 text-gray-400"></i>
                </div>
                <select class="border rounded px-4 py-2" name="role" id="role">
                    <option>Role</option>
                    <option value="1">Super Admin</option>
                    <option value="2">Manager</option>
                    <option value="3">Customer Service</option>
                    <option value="4">Customer</option>
                </select>
            </div>
            <div class="overflow-x-auto">
                <table class="min-w-full bg-white">
                    <thead>
                        <tr>
                            <th class="py-2 px-4 border">ID</th>
                            <th class="py-2 px-4 border">Nama User</th>
                            <th class="py-2 px-4 border">Email</th>
                            <th class="py-2 px-4 border">Password</th>
                            <th class="py-2 px-4 border">Role</th>
                            <th class="py-2 px-4 border">ID Google</th>
                            <th class="py-2 px-4 border">Foto Profile</th>
                            <th class="py-2 px-4 border">Created at</th>
                            <th class="py-2 px-4 border">Updated at</th>
                            <th class="py-2 px-4 border">ID Role</th>
                            <th class="py-2 px-4 border">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td class="py-2 px-4 border">1</td>
                        <td class="py-2 px-4 border">Anggi</td>
                        <td class="py-2 px-4 border">anggi@gmail.com</td>
                        <td class="py-2 px-4 border">user#123</td>
                        <td class="py-2 px-4 border">Customer</td>
                        <td class="py-2 px-4 border">google_id_1</td>
                        <td class="py-2 px-4 border">
                            <img alt="Product image" height="50" src="https://placehold.co/50x50" width="50"/>
                        </td>
                        <td class="py-2 px-4 border">2024-12-15 00:11:36</td>
                        <td class="py-2 px-4 border">2024-12-15 00:11:36</td>
                        <td class="py-2 px-4 border">4</td>
                        <td class="py-2 px-4 border">
                            <div class="flex space-x-2">
                                <a class="text-yellow-600" href="/admin/wishlist-user">
                                    <i class="fas fa-eye">Wishlist</i>
                                </a>
                                <a class="text-red-600">
                                    <i class="fas fa-ban">Banned</i>
                                </a>
                            </div>
                        </td>
                    </tr>
                </div>
            </tbody>
        </table>
    </div>
    <!-- Footer -->
    <x-admin-footer>
    </x-admin-footer>
   </div>
  </div>
    <script src="{{ asset('js/sidebar.js') }}"></script>
 </body>
</html>