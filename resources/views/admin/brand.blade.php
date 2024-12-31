<html lang="en">
 <head>
  <meta charset="utf-8"/>
  <meta content="width=device-width, initial-scale=1.0" name="viewport"/>
  <title>Brand</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link rel="stylesheet" href="{{ asset('css/sidebar.css') }}">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet"/>
 </head>
 <body class="bg-white">
  <div class="flex">
    <!-- Sidebar -->
    <x-admin-sidebar>
    </x-admin-sidebar>
   <!-- Main Content -->
   <div class="w-4/5 p-6">
    <div class="flex justify-between items-center mb-6">
        <img alt="Hexon Parts Logo" class="h-12" height="50" src="https://storage.googleapis.com/a1aa/image/NLesgKtDmT2dDCJxiVIhWgFIUJNP9MRLclwemGzV7LuNQWfnA.jpg" width="100"/>
        <h1 class="text-2xl font-bold mx-auto">Brand</h1>
        <div class="flex space-x-4">
            <i class="fas fa-moon text-2xl"></i>
            <a href="/admin/notifikasi">
                <i class="fas fa-bell text-2xl"></i>
            </a>
        </div>
    </div>
    <div class="flex justify-center mb-6">
        <div class="relative">
            <input class="pl-10 pr-4 py-2 border rounded w-64" name="cari" id="cari" placeholder="Cari Brand" type="text"/>
            <i class="fas fa-search absolute left-3 top-1/2 transform -translate-y-1/2 text-gray-400"></i>
        </div>
    </div>
    <div class="overflow-x-auto">
        <table class="min-w-full bg-white">
            <thead>
                <tr class="w-full bg-gray-200 text-left">
                    <th class="py-2 px-4">ID</th>
                    <th class="py-2 px-4">Nama</th>
                    <th class="py-2 px-4">Status</th>
                    <th class="py-2 px-4">Created at</th>
                    <th class="py-2 px-4">Updated at</th>
                    <th class="py-2 px-4">Actions</th>
                </tr>
            </thead>
            <tbody>
                <tr class="border-b text-left">
                    <th class="py-2 px-4">1</th>
                    <th class="py-2 px-4">Castrol</th>
                    <th class="py-2 px-4">Active</th>
                    <th class="py-2 px-4">2024-12-14 22:53:54</th>
                    <th class="py-2 px-4">2024-12-14 22:53:54</th>
                    <td class="py-2 px-4">
                        <a class="text-blue-500" href="/admin/edit-data-brand">
                            <i class="fas fa-edit"></i>
                        </a>
                        <a class="text-red-500">
                            <i class="fas fa-trash"></i>
                        </a>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
    <!-- Sidebar -->
    <x-admin-footer>
    </x-admin-footer>
   </div>
  </div>
  <script src="{{ asset('js/sidebar.js') }}"></script>
 </body>
</html>
