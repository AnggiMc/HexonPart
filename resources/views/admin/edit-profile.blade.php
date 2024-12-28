<html lang="en">
 <head>
  <meta charset="utf-8"/>
  <meta content="width=device-width, initial-scale=1.0" name="viewport"/>
  <title>
   Edit Profile
  </title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link rel="stylesheet" href="{{ asset('css/sidebar.css') }}">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet"/>
 </head>
 <body class="bg-gray-100 flex min-h-screen">
    <!-- Sidebar -->
    <x-admin-sidebar>
    </x-admin-sidebar>
  <!-- Main Content -->
  <div class="flex-1 p-10 flex flex-col items-center">
   <div class="bg-white p-6 rounded-lg shadow-md w-full max-w-md">
    <div class="flex justify-center mb-6">
     <img alt="User profile picture" class="rounded-full" height="100" src="https://storage.googleapis.com/a1aa/image/oIQ5JW37ArpPIdtKeSfjw4US06zBM4vBBmrQ4E5WCdNGoF5TA.jpg" width="100"/>
    </div>
    <form class="space-y-4"  method="">
     <div>
      <label class="block text-sm font-medium text-gray-700" for="nama">Nama</label>
      <input class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm p-2" id="nama" name="nama" type="text" value="Aldi"/>
     </div>
     <div>
      <label class="block text-sm font-medium text-gray-700" for="ttl">Tempat Tanggal Lahir</label>
      <input class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm p-2" id="ttl" name="ttl" type="text" value="01 Desember 2024"/>
     </div>
     <div>
      <label class="block text-sm font-medium text-gray-700" for="alamat">Alamat</label>
      <input class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm p-2" id="alamat" name="alamat" type="text" value="Jl. Jalan Aja"/>
     </div>
     <div>
      <label class="block text-sm font-medium text-gray-700" for="jenis-kelamin">Jenis Kelamin</label>
      <input class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm p-2" id="jenis-kelamin" name="jenis-kelamin" type="text" value="Laki-laki"/>
     </div>
     <div>
      <label class="block text-sm font-medium text-gray-700" for="email">Email</label>
      <input class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm p-2" id="email" name="email" type="email" value="Aldi@gmail.com"/>
     </div>
     <div class="flex justify-center">
      <button class="bg-gray-300 text-gray-700 px-4 py-2 rounded-md" name="submit" id="submit" type="submit">submit</button>
     </div>
    </form>
   </div>
    <!-- Sidebar -->
    <x-admin-footer></x-admin-footer>
  </div>
  <script src="{{ asset('js/sidebar.js') }}"></script>
 </body>
</html>