<html lang="en">
 <head>
  <meta charset="utf-8"/>
  <meta content="width=device-width, initial-scale=1.0" name="viewport"/>
  <title>Wishlist User</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link rel="stylesheet" href="{{ asset('css/sidebar.css') }}">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet"/>
 </head>
 <body class="bg-gray-100">
    <div class="flex min-h-screen">
        <!-- Sidebar -->
        <x-admin-sidebar>
        </x-admin-sidebar>
        <!-- Main Content -->
        <div class="flex-1 p-8">
            <div class="flex items-center justify-between mb-8">
                <a class="text-blue-700" href="/admin/data-user">
                    <i class="fas fa-arrow-left text-xl"></i>
                </a>
                <h1 class="text-2xl font-bold text-center flex-1">Wishlist User</h1>
            </div>
            <div>
                <h2 class="text-xl font-bold mb-4">Aldi Maulana</h2>
                <div class="space-y-4">
                    <!-- Item 1 -->
                    <div class="bg-white p-4 rounded-lg shadow flex items-center space-x-4">
                        <img alt="Product image placeholder" class="w-24 h-24 bg-gray-200 rounded-lg" height="100" src="https://storage.googleapis.com/a1aa/image/HQwPIq8jdELaJ5P0b0MJjFU7WexsJC2BQKokFsreyH9ddbfnA.jpg" width="100"/>
                        <div>
                            <h3 class="text-lg font-bold">Nama Produk</h3>
                            <p>Detail Produk</p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Footer -->
            <x-admin-footer></x-admin-footer>
        </div>
    </div>
  <script src="{{ asset('js/sidebar.js') }}"></script>
 </body>
</html>
