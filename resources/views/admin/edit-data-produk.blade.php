<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>Ubah Data Produk</title>
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
        <a class="text-blue-700" href="/admin/data-produk">
            <i class="fas fa-arrow-left text-xl"></i>
        </a>
        <h1 class="text-2xl font-bold">Ubah Data Produk</h1>
        <div class="flex items-center space-x-4">
            <i class="fas fa-moon text-xl"></i>
            <i class="fas fa-bell text-xl"></i>
        </div>
    </div>
    <form class="space-y-4" method="" action="">
        <div class="flex items-center">
            <label for="nama" class="w-32">Nama Barang</label>
            <input class="border p-2 w-full" name="nama" id="nama" placeholder="Masukan Nama Barang" type="text"/>
        </div>
        <div class="flex items-center">
            <label for="deskripsi" class="w-32">Deskripsi Barang</label>
            <input class="border p-2 w-full" name="deskripsi" id="deskripsi" placeholder="Masukan Deskripsi Barang" type="text"/>
        </div>
        <div class="flex items-center">
            <label for="harga" class="w-32">Harga</label>
            <input class="border p-2 w-full" name="harga" id="harga" placeholder="Masukan Harga Barang" type="text"/>
        </div>
        <div class="flex items-center">
            <label for="stok" class="w-32">Stok</label>
            <input class="border p-2 w-full" name="stok" id="stok" placeholder="Masukan Stok Barang" type="number"/>
        </div>
        <div class="flex items-center">
            <label for="gambar" class="w-32">Gambar</label>
            <input class="border p-2 w-full" name="gambar" id="gambar" placeholder="Upload Gambar" type="file"/>
        </div>
        <div class="flex items-center">
            <label for="brand" class="w-32">Brand</label>
            <select class="border p-2 w-full" name="brand" id="brand">
                <option>Masukan Brand Barang</option>
                <option value="1">Brand 1</option>
                <option value="2">Brand 2</option>
                <option value="3">Brand 3</option>
            </select>
        </div>
        <div class="flex items-center">
            <label for="kategori" class="w-32">Kategori</label>
            <select class="border p-2 w-full" name="kategori" id="kategori">
                <option>Masukan Kategori Barang</option>
                <option value="1">Kategori 1</option>
                <option value="2">Kategori 2</option>
                <option value="3">Kategori 3</option>
            </select>
        </div>
        <div class="flex items-center">
            <label for="status" class="w-32">Status</label>
            <select class="border p-2 w-full" name="status" id="status">
                <option>Masukan Status Barang</option>
                <option value="1">Active</option>
                <option value="2">InActive</option>
            </select>
        </div>
        <div class="flex items-center">
            <label for="sale" class="w-32">Sale</label>
            <input class="border p-2 w-full" name="sale" id="sale" placeholder="Masukan Total Sale Barang" type="number"/>
        </div>
        <div class="flex items-center">
            <label for="revenue" class="w-32">Revenue</label>
            <input class="border p-2 w-full" name="revenue" id="revenue" placeholder="Masukan Total Revenue Barang" type="number"/>
        </div>
        <div class="flex justify-center">
            <button class="bg-gray-300 text-gray-700 px-4 py-2 rounded" name="Ubah" id="Ubah" type="submit">Ubah Data</button>
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
