<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>Tambah Data Produk</title>
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
        <h1 class="text-2xl font-bold">TAMBAH DATA PRODUK</h1>
        <div class="flex items-center space-x-4">
            <i class="fas fa-moon text-xl"></i>
            <i class="fas fa-bell text-xl"></i>
        </div>
    </div>
    <form class="space-y-4" method="" action="">
        <div class="flex items-center">
            <label class="w-32">Gambar</label>
            <input class="border p-2 w-full" placeholder="Upload Gambar" type="file"/>
        </div>
        <div class="flex items-center">
            <label class="w-32">Nama Barang</label>
            <input class="border p-2 w-full" placeholder="Masukan Nama Barang" type="text"/>
        </div>
        <div class="flex items-center">
            <label class="w-32">Deskripsi Barang</label>
            <input class="border p-2 w-full" placeholder="Masukan Deskripsi Barang" type="text"/>
        </div>
        <div class="flex items-center">
            <label class="w-32">Harga</label>
            <input class="border p-2 w-full" placeholder="Masukan Harga Barang" type="text"/>
        </div>
        <div class="flex items-center">
            <label class="w-32">Kategori</label>
            <select class="border p-2 w-full">
                <option>Masukan Kategori Barang</option>
                <option>Kategori 1</option>
                <option>Kategori 2</option>
                <option>Kategori 3</option>
            </select>
        </div>
        <div class="flex justify-center">
            <button class="bg-gray-300 text-gray-700 px-4 py-2 rounded" name="submit" id="submit" type="submit">Submit</button>
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
