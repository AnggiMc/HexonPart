<html lang="en">
 <head>
  <meta charset="utf-8"/>
  <meta content="width=device-width, initial-scale=1.0" name="viewport"/>
  <title>Banner</title>
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
        <h1 class="text-2xl font-bold mx-auto">Banner</h1>
        <div class="flex space-x-4">
            <i class="fas fa-moon text-2xl"></i>
            <a href="/admin/notifikasi">
                <i class="fas fa-bell text-2xl"></i>
            </a>
        </div>
    </div>
    <div class="overflow-x-auto">
        <table class="min-w-full bg-white">
            <thead>
                <tr class="w-full bg-gray-200 text-left">
                    <th class="py-2 px-4">ID</th>
                    <th class="py-2 px-4">Gambar Banner</th>
                    <th class="py-2 px-4">Actions</th>
                </tr>
            </thead>
            <tbody>
                <tr class="border-b text-left">
                    <th class="py-2 px-4">1</th>
                    <th class="py-2 px-4">
                        <img alt="Hexon Parts Logo" class="h-12" height="50" src="{{ asset('img/HexonPart-Logo.png') }}" width="100"/>
                    </th>
                    <td class="py-2 px-4">
                        <a class="text-blue-500" href="/admin/edit-banner">
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
