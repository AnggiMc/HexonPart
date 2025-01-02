<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>Ubah Footer</title>
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
        <a class="text-blue-700" href="/admin/setting">
            <i class="fas fa-arrow-left text-xl"></i>
        </a>
        <h1 class="text-2xl font-bold">Ubah Footer</h1>
        <div class="flex items-center space-x-4">
            <i class="fas fa-moon text-xl"></i>
            <a href="/admin/notifikasi">
                <i class="fas fa-bell text-2xl"></i>
            </a>
        </div>
    </div>
    <form class="space-y-4" method="" action="">
        <div class="flex items-center">
            <label for="logo" class="w-32">Logo Media Sosial</label>
            <input class="border p-2 w-full" name="logo" id="logo" placeholder="Upload Logo Media Sosial" type="file"/>
        </div>
        <div class="flex items-center">
            <label for="link" class="w-32">Link Media Sosia</label>
            <input class="border p-2 w-full" name="link" id="link" placeholder="Masukan Link Website" type="text"/>
        </div>
        <div class="flex items-center">
            <label for="usecase" class="w-32">Usecase Website</label>
            <input class="border p-2 w-full" name="usecase" id="usecase" placeholder="Masukan Usecase Website" type="text"/>
        </div>
        <div class="flex items-center">
            <label for="explore" class="w-32">Explore Website</label>
            <input class="border p-2 w-full" name="explore" id="explore" placeholder="Masukan Explore Website" type="text"/>
        </div>
        <div class="flex items-center">
            <label for="resource" class="w-32">Resource Webtite</label>
            <input class="border p-2 w-full" name="resource" id="resource" placeholder="Masukan Resource Website" type="text"/>
        </div>
        <div class="flex justify-center">
            <button class="bg-gray-300 text-gray-700 px-4 py-2 rounded" name="Ubah" id="Ubah" type="submit">Ubah Footer</button>
        </div>
    </form>
    <!-- Footer -->
    <x-admin-footer>
    </x-admin-footer>
   </div>
  </div>
  <script src="{{ asset('js/sidebar.js') }}"></script>
 </body>
</html>
