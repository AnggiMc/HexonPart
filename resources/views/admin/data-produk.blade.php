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
        <img alt="Hexon Parts Logo" class="h-12" height="50" src="https://storage.googleapis.com/a1aa/image/NLesgKtDmT2dDCJxiVIhWgFIUJNP9MRLclwemGzV7LuNQWfnA.jpg" width="100"/>
        <h1 class="text-2xl font-bold mx-auto">DATA PRODUK</h1>
        <div class="flex space-x-4">
            <i class="fas fa-moon text-2xl"></i>
            <i class="fas fa-bell text-2xl"></i>
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
                    <th class="py-2 px-4">NAMA</th>
                    <th class="py-2 px-4">Price</th>
                    <th class="py-2 px-4">Discount</th>
                    <th class="py-2 px-4">Size</th>
                    <th class="py-2 px-4">Condition</th>
                    <th class="py-2 px-4">Brands</th>
                    <th class="py-2 px-4">Quantity</th>
                    <th class="py-2 px-4">Image</th>
                    <th class="py-2 px-4">Status</th>
                    <th class="py-2 px-4">Attributes</th>
                    <th class="py-2 px-4">Actions</th>
                </tr>
            </thead>
            <tbody>
                <tr class="border-b">
                    <td class="py-2 px-4">N/A</td>
                    <td class="py-2 px-4">Yes</td>
                    <td class="py-2 px-4">1299</td>
                    <td class="py-2 px-4">10</td>
                    <td class="py-2 px-4">N/A</td>
                    <td class="py-2 px-4">New</td>
                    <td class="py-2 px-4">Prof.</td>
                    <td class="py-2 px-4">100</td>
                    <td class="py-2 px-4">
                    <img alt="Product image 1" height="50" src="https://storage.googleapis.com/a1aa/image/UH7PZADiyS7wABT95oFxGvVeW7f72GuMiZUzoAhrVF9KJXfnA.jpg" width="50"/>
                    </td>
                    <td class="py-2 px-4">Active</td>
                    <td class="py-2 px-4">N/A</td>
                    <td class="py-2 px-4">
                    <button class="text-blue-500">
                    <i class="fas fa-edit"></i>
                    </button>
                    <button class="text-red-500">
                    <i class="fas fa-trash"></i>
                    </button>
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
