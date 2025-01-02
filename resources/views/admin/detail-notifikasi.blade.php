<html lang="en">
 <head>
  <meta charset="utf-8"/>
  <meta content="width=device-width, initial-scale=1.0" name="viewport"/>
  <title>
   Detail Notifikasi
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
    <div class="flex-1 p-8">
        <div class="flex justify-between items-center mb-8">
            <a class="text-blue-700" href="/admin/notifikasi">
                <i class="fas fa-arrow-left text-xl"></i>
            </a>
            <h1 class="text-2xl font-bold flex-1 text-center">Detail Notifikasi</h1>
        </div>
        <div class="bg-white shadow-md rounded-lg p-6">
            <h2 class="text-2xl font-semibold mb-4">Judul Notifikasi</h2>
            <p class="text-gray-700 mb-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
        </div>
        <!-- Sidebar -->
        <x-admin-footer>
        </x-admin-footer>
    </div>
  </div>
  <script src="{{ asset('js/sidebar.js') }}"></script>
 </body>
</html>
