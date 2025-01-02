<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>Order Page</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet" />
</head>

<body class="bg-gray-100">

    <!-- Header Section -->


    <header class="bg-white shadow-md sticky top-0 z-10">
        <div class="container mx-auto px-4 py-4 flex justify-between items-center">
            <a class="text-2xl font-bold text-gray-800" href="#">E-Shop</a>
            <div class="flex items-center space-x-4">

                <input
                    class="px-4 py-2 border rounded-lg w-64 focus:outline-none focus:ring-2 focus:ring-blue-500 hidden md:block"
                    placeholder="Cari produk..." type="text" />

                <input class="px-4 py-2 border rounded-lg w-64 focus:outline-none focus:ring-2 focus:ring-blue-500 hidden md:block" placeholder="Cari produk..." type="text" />

                <div class="hidden md:flex items-center space-x-4">
                    <a class="text-gray-800 hover:text-blue-500" href="#">Kategori</a>
                    <a class="text-gray-800 hover:text-blue-500" href="#">Keranjang</a>
                    <a class="text-gray-800 hover:text-blue-500" href="#">Akun</a>
                </div>

                <button id="menu-button"
                    class="md:hidden flex items-center px-3 py-2 border rounded text-gray-800 border-gray-800 hover:text-blue-500 hover:border-blue-500">

                <button id="menu-button" class="md:hidden flex items-center px-3 py-2 border rounded text-gray-800 border-gray-800 hover:text-blue-500 hover:border-blue-500">

                    <svg class="fill-current h-3 w-3" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <title>Menu</title>
                        <path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z"></path>
                    </svg>
                </button>
            </div>
        </div>
        <div id="mobile-menu" class="hidden md:hidden flex flex-col items-center space-y-4 mt-4 w-full">

            <a class="text-gray-800 hover:text-blue-500 border border-black w-full text-center py-2"
                href="/user/Kategori_Produk">Kategori</a>
            <a class="text-gray-800 hover:text-blue-500 border border-black w-full text-center py-2"
                href="#">Keranjang</a>
            <a class="text-gray-800 hover:text-blue-500 border border-black w-full text-center py-2"
                href="/user/Profil">Akun</a>
        </div>
    </header>

    <!-- Back Button -->

            <a class="text-gray-800 hover:text-blue-500 border border-black w-full text-center py-2" href="/user/Kategori_Produk">Kategori</a>
            <a class="text-gray-800 hover:text-blue-500 border border-black w-full text-center py-2" href="#">Keranjang</a>
            <a class="text-gray-800 hover:text-blue-500 border border-black w-full text-center py-2" href="/user/Profil">Akun</a>
        </div>
    </header>

    <div class="relative">
        <div class="absolute top-0 left-0 p-4">
            <a class="flex items-center text-lg" href="/user/Home">
                <i class="fas fa-arrow-left text-2xl"></i>
                <span class="ml-2 text-xl">Kembali</span>
            </a>
        </div>
    </div>


    <!-- Main Content -->
    <div class="max-w-4xl mx-auto p-4 pt-16">
        <!-- Address Section -->
        <div class="mb-4">
            <label class="block text-gray-700" for="address">Alamat</label>
            <input class="w-full border border-gray-300 p-2" id="address" type="text"
                value="JL. Sitabudi Gegerkalong HJ. Rikho II" />
            <button class="mt-2 bg-gray-200 text-gray-700 px-4 py-2">Ubah</button>
        </div>

        <!-- Order Section -->

    <div class="max-w-4xl mx-auto p-4 pt-16">
        <div class="mb-4">
            <label class="block text-gray-700" for="address">Alamat</label>
            <input class="w-full border border-gray-300 p-2" id="address" type="text" value="JL. Sitabudi Gegerkalong HJ. Rikho II" />
            <button class="mt-2 bg-gray-200 text-gray-700 px-4 py-2">Ubah</button>
        </div>

        <div class="border border-gray-300 p-4 bg-white">
            <h2 class="text-lg font-semibold mb-4">Produk Dipesan</h2>
            <div class="grid grid-cols-12 gap-4 items-center border-b border-gray-300 pb-2 mb-2">
                <div class="col-span-6">Nama Produk</div>
                <div class="col-span-2 text-center">Harga Satuan</div>
                <div class="col-span-2 text-center">Jumlah</div>
                <div class="col-span-2 text-center">Subtotal Produk</div>
            </div>


            <!-- Order Item Example -->
            <div class="grid grid-cols-12 gap-4 items-center border-b border-gray-300 pb-2 mb-2">
                <div class="col-span-6 flex items-center">
                    <img alt="Product Image" class="w-12 h-12 mr-4" height="50" src="https://via.placeholder.com/50"
                        width="50" />
                    <div>
                        <div class="font-semibold">Nama Produk</div>
                        <div class="text-gray-600 text-sm">Deskripsi singkat produk.</div>

            <div class="grid grid-cols-12 gap-4 items-center border-b border-gray-300 pb-2 mb-2">
                <div class="col-span-6 flex items-center">
                    <img alt="Product Image" class="w-12 h-12 mr-4" height="50" src="https://storage.googleapis.com/a1aa/image/GROSD8wRyr7CFtKHsN4e4Blep6LadQto173ekf4tIEE8iBBQB.jpg" width="50" />
                    <div>
                        <div class="font-semibold">Nama Produk</div>
                        <div class="text-gray-600 text-sm">Body text for whatever you'd like to say. Add main takeaway points, quotes, anecdotes, or even a very very short story.</div>

                    </div>
                </div>
                <div class="col-span-2 text-center">Rp 75.000</div>
                <div class="col-span-2 text-center">1</div>
                <div class="col-span-2 text-center">Rp 75.000</div>
            </div>


            <!-- Delivery and Payment Section -->
            <div class="grid grid-cols-12 gap-4 items-center mt-4">
                <div class="col-span-6">
                    <div class="border border-gray-300 p-2">
                        <div class="flex justify-between items-center">
                            <div class="font-semibold">Oprasi Pengiriman</div>
                            <i class="fas fa-chevron-down"></i>
                        </div>
                        <div class="text-gray-600 text-sm">
                            JNE / SICEPAT<br />
                            Barang Tiba: 25 - 30 Des
                        </div>
                    </div>
                </div>
                <div class="col-span-6">
                    <label class="block text-gray-700" for="payment-method">Metode Pembayaran</label>
                    <select class="w-full border border-gray-300 p-2" id="payment-method">
                        <option>Pilih metode pembayaran</option>
                        <option>Transfer Bank</option>
                        <option>COD</option>
                    </select>
                </div>
            </div>

            <!-- Total Payment Section -->

            <div class="grid grid-cols-12 gap-4 items-center border-b border-gray-300 pb-2 mb-2">
                <div class="col-span-6 flex items-center">
                    <img alt="Product Image" class="w-12 h-12 mr-4" height="50" src="https://storage.googleapis.com/a1aa/image/GROSD8wRyr7CFtKHsN4e4Blep6LadQto173ekf4tIEE8iBBQB.jpg" width="50" />
                    <div>
                        <div class="font-semibold">Nama Produk</div>
                        <div class="text-gray-600 text-sm">Body text for whatever you'd like to say. Add main takeaway points, quotes, anecdotes, or even a very very short story.</div>
                    </div>
                </div>
                <div class="col-span-2 text-center">Rp 75.000</div>
                <div class="col-span-2 text-center">1</div>
                <div class="col-span-2 text-center">Rp 75.000</div>
            </div>
            <div class="grid grid-cols-12 gap-4 items-center mt-4">
                <div class="col-span-6">
                    <div class="border border-gray-300 p-2">
                        <div class="flex justify-between items-center">
                            <div class="font-semibold">Oprasi Pengiriman</div>
                            <i class="fas fa-chevron-down"></i>
                        </div>
                        <div class="text-gray-600 text-sm">
                            JNE / SICEPAT
                            <br />
                            Barang Tiba: 25 - 30 Des
                        </div>
                    </div>
                </div>
                <div class="col-span-6">
                    <label class="block text-gray-700" for="payment-method">Metode Pembayaran</label>
                    <select class="w-full border border-gray-300 p-2" id="payment-method">
                        <option>Value</option>
                    </select>
                </div>
            </div>
            <div class="flex justify-between items-center mt-4">
                <div class="text-lg font-semibold">
                    Total Pembayaran :
                    <span class="text-orange-500">Rp75.000</span>
                </div>
                <a href="/user/Pembayaran" class="bg-gray-500 text-white px-4 py-2 rounded-lg inline-block text-center">
                    Buat Pesanan
                </a>
            </div>
        </div>
    </div>


    <!-- Script -->
    <script>
        document.getElementById('menu-button').addEventListener('click', function () {
            var menu = document.getElementById('mobile-menu');
            menu.classList.toggle('hidden');

    <script>
        document.getElementById('menu-button').addEventListener('click', function() {
            var menu = document.getElementById('mobile-menu');
            if (menu.classList.contains('hidden')) {
                menu.classList.remove('hidden');
            } else {
                menu.classList.add('hidden');
            }

        });
    </script>
</body>

</html>