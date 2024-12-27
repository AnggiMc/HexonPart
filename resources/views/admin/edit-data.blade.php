<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>
        Edit Data
    </title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet" />
</head>
 <body class="bg-gray-200">
  <div class="flex min-h-screen">
    <!-- Sidebar -->
    <x-admin-sidebar>
    </x-admin-sidebar>
    <!-- Main Content -->
    <div class="flex-1 p-10 ml-64">
        <div class="flex justify-between items-center mb-8">
            <a href="/admin/dashboard" class="bg-gray-400 text-white py-2 px-4 rounded">Kembali</a>
            <h1 class="text-2xl text-center flex-grow">Edit Data</h1>
        </div>
        <form  method="">
        <div class="mb-4">
            <label class="block text-gray-700">Gambar</label>
            <input class="w-full p-2 border border-gray-300 rounded" placeholder="Upload Gambar" type="file"/>
        </div>
        <div class="mb-4">
            <label class="block text-gray-700">Nama Barang</label>
            <input class="w-full p-2 border border-gray-300 rounded" placeholder="Masukan Nama Barang" type="text"/>
        </div>
        <div class="mb-4">
            <label class="block text-gray-700">Harga</label>
            <input class="w-full p-2 border border-gray-300 rounded" placeholder="Masukan Harga Barang" type="text"/>
        </div>
        <div class="mb-4">
            <label class="block text-gray-700" for="kategori">Kategori</label>
            <select id="kategori" class="w-full p-2 border border-gray-300 rounded">
                <option value="" disabled selected>Pilih Kategori Barang</option>
                <option value="kategori1">Kategori 1</option>
                <option value="kategori2">Kategori 2</option>
                <option value="kategori3">Kategori 3</option>
                <option value="kategori4">Kategori 4</option>
            </select>
        </div>
        <div class="flex justify-center">
            <button name="ubah" id="ubah" type="submit" class="bg-gray-400 text-white py-2 px-4 rounded">Ubah Data</button>
        </div>
        </form>
        <!-- Sidebar -->
        <x-admin-footer>
        </x-admin-footer>   
    </div>
  </div>
 </body>
</html>