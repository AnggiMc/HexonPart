<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Produk</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-50 font-sans">
    <!-- Header -->
    <header class="bg-white shadow-md sticky top-0 z-10">
        <div class="container mx-auto px-4 py-4 flex justify-between items-center">
            <a href="#" class="text-2xl font-bold text-gray-800">HexonPart</a>
            <div class="flex items-center space-x-4">
                <input type="text" placeholder="Cari produk..."
                    class="px-4 py-2 border rounded-lg w-64 focus:outline-none focus:ring-2 focus:ring-blue-500">
                <a href="#" class="text-gray-800 hover:text-blue-500">Kategori</a>
                <a href="#" class="text-gray-800 hover:text-blue-500">Keranjang</a>
                <a href="#" class="text-gray-800 hover:text-blue-500">Akun</a>
            </div>
        </div>
    </header>

    <!-- Main Content -->
    <main class="container mx-auto px-4 py-8">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-8">

            <!-- Product Images -->
            <div>
                <img src="https://via.placeholder.com/500" alt="Produk" class="w-full rounded-lg shadow-md">
                <div class="flex space-x-2 mt-4">
                    <img src="https://via.placeholder.com/100" alt="Produk" class="w-20 h-20 rounded-lg border">
                    <img src="https://via.placeholder.com/100" alt="Produk" class="w-20 h-20 rounded-lg border">
                    <img src="https://via.placeholder.com/100" alt="Produk" class="w-20 h-20 rounded-lg border">
                </div>
            </div>

            <!-- Product Details -->
            <div>
                <h1 class="text-3xl font-bold text-gray-800">Nama Produk</h1>
                <div class="flex items-center space-x-4 mt-2">
                    <span class="text-yellow-500 text-xl">★★★★☆</span>
                    <span class="text-gray-600">(120 Ulasan)</span>
                </div>
                <div class="mt-4">
                    <span class="text-2xl font-bold text-blue-500">Rp500.000</span>
                    <span class="text-gray-500 line-through">Rp700.000</span>
                    <span class="text-green-500">Diskon 30%</span>
                </div>
                <p class="mt-4 text-gray-600">
                    Deskripsi singkat produk ini. Informasi utama tentang manfaat dan fitur unggulan.
                </p>

                <!-- Variants -->
                <div class="mt-6">
                    <h2 class="text-gray-800 font-semibold">Pilih Varian:</h2>
                    <div class="flex space-x-2 mt-2">
                        <button class="px-4 py-2 border rounded-lg hover:bg-blue-500 hover:text-white">Merah</button>
                        <button class="px-4 py-2 border rounded-lg hover:bg-blue-500 hover:text-white">Hitam</button>
                        <button class="px-4 py-2 border rounded-lg hover:bg-blue-500 hover:text-white">Putih</button>
                    </div>
                </div>

                <!-- Quantity -->
                <div class="mt-6">
                    <h2 class="text-gray-800 font-semibold">Jumlah:</h2>
                    <div class="flex items-center mt-2">
                        <button class="px-4 py-2 bg-gray-200 rounded-lg">-</button>
                        <input type="text" value="1" class="w-12 text-center border rounded-lg mx-2">
                        <button class="px-4 py-2 bg-gray-200 rounded-lg">+</button>
                    </div>
                </div>

                <!-- Buttons -->
                <div class="mt-6 flex space-x-4">
                    <button class="px-6 py-3 bg-blue-500 text-white rounded-lg hover:bg-blue-600">Tambah ke
                        Keranjang</button>
                    <button class="px-6 py-3 bg-green-500 text-white rounded-lg hover:bg-green-600">Beli
                        Sekarang</button>
                </div>
            </div>
        </div>

        <!-- Product Description -->
        <div class="mt-12">
            <h2 class="text-2xl font-bold text-gray-800">Deskripsi Produk</h2>
            <p class="mt-4 text-gray-600">
                Ini adalah deskripsi lengkap tentang produk ini. Anda dapat menambahkan informasi lebih rinci tentang
                spesifikasi teknis, cara penggunaan, dan fitur unik produk ini.
            </p>
        </div>

        <!-- Reviews -->
        <div class="mt-12">
            <h2 class="text-2xl font-bold text-gray-800">Ulasan</h2>
            <div class="mt-4 space-y-4">
                <div class="bg-white p-4 rounded-lg shadow-md">
                    <div class="flex items-center justify-between">
                        <h3 class="font-semibold">Nama Pembeli</h3>
                        <span class="text-yellow-500">★★★★☆</span>
                    </div>
                    <p class="text-gray-600 mt-2">Produk ini sangat bagus dan sesuai dengan deskripsi.</p>
                </div>
                <div class="bg-white p-4 rounded-lg shadow-md">
                    <div class="flex items-center justify-between">
                        <h3 class="font-semibold">Nama Pembeli</h3>
                        <span class="text-yellow-500">★★★★★</span>
                    </div>
                    <p class="text-gray-600 mt-2">Sangat puas dengan pembelian ini.</p>
                </div>
            </div>
        </div>
    </main>

    <!-- Footer -->
    <footer class="bg-gray-800 text-white py-8 mt-12">
        <div class="container mx-auto px-4">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <div>
                    <h3 class="font-bold">Tentang Kami</h3>
                    <p class="text-gray-400 mt-2">Kami adalah toko online terpercaya yang menyediakan berbagai produk
                        berkualitas.</p>
                </div>
                <div>
                    <h3 class="font-bold">Bantuan</h3>
                    <ul class="mt-2 space-y-2">
                        <li><a href="#" class="text-gray-400 hover:text-white">FAQ</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white">Kontak Kami</a></li>
                    </ul>
                </div>
                <div>
                    <h3 class="font-bold">Ikuti Kami</h3>
                    <div class="flex space-x-4 mt-2">
                        <a href="#" class="text-gray-400 hover:text-white">Instagram</a>
                        <a href="#" class="text-gray-400 hover:text-white">Facebook</a>
                    </div>
                </div>
            </div>
        </div>
    </footer>
</body>

</html>