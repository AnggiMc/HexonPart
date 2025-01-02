<html lang="en">
 <head>
  <meta charset="utf-8"/>
  <meta content="width=device-width, initial-scale=1.0" name="viewport"/>
  <title>Data Produk</title>
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
        <img alt="Hexon Parts Logo" class="h-12" height="50" src="{{ asset('img/HexonPart-Logo.png') }}" width="100"/>
        <h1 class="text-2xl font-bold mx-auto">DATA PRODUK</h1>
        <div class="flex space-x-4">
            <i class="fas fa-moon text-2xl"></i>
            <a href="/admin/notifikasi">
                <i class="fas fa-bell text-2xl"></i>
            </a>
        </div>
    </div>
    <div class="flex justify-center mb-6">
        <div class="relative">
            <input class="pl-10 pr-4 py-2 border rounded w-64" name="cari" id="cari" placeholder="Cari Barang" type="text"/>
            <i class="fas fa-search absolute left-3 top-1/2 transform -translate-y-1/2 text-gray-400"></i>
        </div>
    </div>
    <div class="overflow-x-auto">
        <table class="min-w-full bg-white">
            <thead>
                <tr class="w-full bg-gray-200 text-left">
                    <th class="py-2 px-4">ID</th>
                    <th class="py-2 px-4">Nama</th>
                    <th class="py-2 px-4">Deskripsi</th>
                    <th class="py-2 px-4">Harga</th>
                    <th class="py-2 px-4">Stok</th>
                    <th class="py-2 px-4">Gambar</th>
                    <th class="py-2 px-4">ID Brand</th>
                    <th class="py-2 px-4">ID Category</th>
                    <th class="py-2 px-4">Status</th>
                    <th class="py-2 px-4">Created at</th>
                    <th class="py-2 px-4">Updated at</th>
                    <th class="py-2 px-4">Total Sales</th>
                    <th class="py-2 px-4">Total Revenue</th>
                    <th class="py-2 px-4">Actions</th>
                </tr>
            </thead>
            <tbody>
                <tr class="border-b">
                    <th class="py-2 px-4">1</th>
                    <th class="py-2 px-4">Oli</th>
                    <th class="py-2 px-4">Oli Honda</th>
                    <th class="py-2 px-4">RP.25000</th>
                    <th class="py-2 px-4">100</th>
                    <td class="py-2 px-4">
                    <img alt="Product image 1" height="50" src="https://storage.googleapis.com/a1aa/image/UH7PZADiyS7wABT95oFxGvVeW7f72GuMiZUzoAhrVF9KJXfnA.jpg" width="50"/>
                    </td>
                    <th class="py-2 px-4">2</th>
                    <th class="py-2 px-4">1</th>
                    <th class="py-2 px-4">Active</th>
                    <th class="py-2 px-4">2024-12-14 22:53:54</th>
                    <th class="py-2 px-4">2024-12-14 22:53:54</th>
                    <th class="py-2 px-4">0</th>
                    <th class="py-2 px-4">0</th>
                    <td class="py-2 px-4">
                        <a class="text-blue-500" href="/admin/edit-data-produk">
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
