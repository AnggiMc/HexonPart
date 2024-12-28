<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>Dashboard</title>
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
        <div class="w-4/5 p-8">
            <div class="flex justify-between items-center mb-8">
                <img alt="Hexon Parts Logo" class="h-12" height="50" src="https://storage.googleapis.com/a1aa/image/NLesgKtDmT2dDCJxiVIhWgFIUJNP9MRLclwemGzV7LuNQWfnA.jpg" width="100"/>
                <h1 class="text-2xl font-bold">Selamat Datang di Panel Admin</h1>
                <div class="flex space-x-4">
                    <i class="fas fa-moon text-2xl"></i>
                    <i class="fas fa-bell text-2xl"></i>
                </div>
            </div>
            <div class="grid grid-cols-3 gap-4 mb-8">
                <div class="bg-white p-6 rounded-lg shadow-md flex flex-col items-center">
                    <i class="fas fa-box text-4xl mb-4"></i>
                    <p class="text-2xl font-bold">100</p>
                    <p>Total Produk</p>
                </div>
                <div class="bg-white p-6 rounded-lg shadow-md flex flex-col items-center">
                    <i class="fas fa-user text-4xl mb-4"></i>
                    <p class="text-2xl font-bold">100</p>
                    <p>Total User</p>
                </div>
                <div class="bg-white p-6 rounded-lg shadow-md flex flex-col items-center">
                    <i class="fas fa-shopping-cart text-4xl mb-4"></i>
                    <p class="text-2xl font-bold">100</p>
                    <p>Total Order</p>
                    </div>
                <div class="bg-white p-6 rounded-lg shadow-md flex flex-col items-center">
                    <i class="fas fa-folder text-4xl mb-4"></i>
                    <p class="text-2xl font-bold">100</p>
                    <p>Total Category</p>
                </div>
                <div class="bg-white p-6 rounded-lg shadow-md flex flex-col items-center">
                    <i class="fas fa-tag text-4xl mb-4"></i>
                    <p class="text-2xl font-bold">100</p>
                    <p>Total Brand</p>
                </div>
                <div class="bg-white p-6 rounded-lg shadow-md flex flex-col items-center">
                    <i class="fas fa-credit-card text-4xl mb-4"></i>
                    <p class="text-2xl font-bold">100</p>
                    <p>Total Payment Gateway</p>
                </div>
            </div>
            <div class="bg-white p-6 rounded-lg shadow-md">
                <h2 class="text-lg font-bold mb-4">System Logs</h2>
                <div class="overflow-x-auto">
                    <table class="w-full text-left text-sm">
                        <thead>
                            <tr>
                                <th class="border px-2 py-1">ID Log</th>
                                <th class="border px-2 py-1">Nama</th>
                                <th class="border px-2 py-1">Action</th>
                                <th class="border px-2 py-1">Timestamp</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="border px-2 py-1">1</td>
                                <td class="border px-2 py-1">Ryan</td>
                                <td class="border px-2 py-1">Add Product</td>
                                <td class="border px-2 py-1">2024-12-28 20:20:20</td>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <!-- Footer -->
            <x-admin-footer></x-admin-footer>
        </div>
    </div>
  <script src="{{ asset('js/sidebar.js') }}"></script>
 </body>
</html>
