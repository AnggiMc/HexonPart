<html lang="en">
 <head>
  <meta charset="utf-8"/>
  <meta content="width=device-width, initial-scale=1.0" name="viewport"/>
  <title>
   Notifikasi
  </title>
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
   <div class="w-3/4 p-10">
        <h1 class="text-2xl font-bold mb-6 text-center">Notifikasi</h1>
        <div class="space-y-4">
            <div class="bg-white p-4 rounded-lg shadow">
                <div class="flex">
                    <div class="flex-1">
                        <h3 class="text-lg font-semibold">AKI</h3>
                        <p>Detail Produk</p>
                    </div>
                    <div class="flex flex-col justify-center space-y-2">
                        <button class="text-blue-500">
                            <a href="/admin/detail-notifikasi">
                                <i class="fas fa-eye"></i>
                            </a>
                        </button>
                        <button class="text-red-500">
                            <a href="#">
                                <i class="fas fa-trash"></i>
                            </a>
                        </button>
                    </div>
                </div>
            </div>
        </div>
        <!-- Sidebar -->
        <x-admin-footer>
        </x-admin-footer>
    </div>
  </div>
  <script src="{{ asset('js/sidebar.js') }}"></script>
 </body>
</html>
