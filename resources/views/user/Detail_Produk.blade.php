<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Produk</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet" />
    <style>
        /* Custom styles for the hamburger menu */
        .hamburger {
            display: none;
        }

        @media (max-width: 768px) {
            .hamburger {
                display: block;
            }

            .menu {
                display: none;
            }
        }
    </style>
</head>

<body class="bg-gray-50 font-sans">
    <!-- Header -->
    <header class="bg-white shadow-md sticky top-0 z-10">
        <div class="container mx-auto px-4 py-4 flex justify-between items-center">
            <a href="#" class="text-2xl font-bold text-gray-800">E-Shop</a>
            <div class="flex items-center space-x-4">
                <input type="text" placeholder="Cari produk..." class="px-4 py-2 border rounded-lg w-64 focus:outline-none focus:ring-2 focus:ring-blue-500 hidden md:block">
                <div class="menu hidden md:flex items-center space-x-4">
                    <a href="#" class="text-gray-800 hover:text-blue-500">Kategori</a>
                    <a href="#" class="text-gray-800 hover:text-blue-500">Keranjang</a>
                    <a href="#" class="text-gray-800 hover:text-blue-500">Akun</a>
                </div>
                <button class="hamburger md:hidden flex items-center px-3 py-2 border rounded text-gray-800 border-gray-800 hover:text-blue-500 hover:border-blue-500">
                    <svg class="fill-current h-3 w-3" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <title>Menu</title>
                        <path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z" />
                    </svg>
                </button>
            </div>
        </div>
        <div class="mobile-menu md:hidden hidden">
            <input type="text" placeholder="Cari produk..." class="px-4 py-2 border rounded-lg w-full focus:outline-none focus:ring-2 focus:ring-blue-500 mb-4">
            <a href="#" class="block px-4 py-2 text-gray-800 hover:bg-gray-200">Kategori</a>
            <a href="#" class="block px-4 py-2 text-gray-800 hover:bg-gray-200">Keranjang</a>
            <a href="#" class="block px-4 py-2 text-gray-800 hover:bg-gray-200">Akun</a>
        </div>
    </header>

    <!-- Back Button -->
    <div class="container mx-auto px-4 py-4">
        <a href="/user/Home" class="text-gray-800 hover:text-blue-500 flex items-center">
            <svg class="w-6 h-6 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
            </svg>
            Kembali
        </a>
    </div>

    <!-- Main Content -->
    <main class="container mx-auto px-4 py-8">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
            <!-- Product Images -->
            <div class="mt-8">
                <img src="https://via.placeholder.com/500" alt="Produk" class="w-full rounded-lg shadow-md">
                <div class="flex space-x-2 mt-4">
                    <img src="https://via.placeholder.com/100" alt="Produk" class="w-20 h-20 rounded-lg border">
                    <img src="https://via.placeholder.com/100" alt="Produk" class="w-20 h-20 rounded-lg border">
                    <img src="https://via.placeholder.com/100" alt="Produk" class="w-20 h-20 rounded-lg border">
                </div>
            </div>

            <!-- Product Details -->
            <div class="mt-8">
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
                    <button class="px-6 py-3 bg-blue-500 text-white rounded-lg hover:bg-blue-600">Tambah ke Keranjang</button>
                    <button class="px-6 py-3 bg-green-500 text-white rounded-lg hover:bg-green-600">Beli Sekarang</button>
                </div>
            </div>
        </div>

        <!-- Product Description -->
        <div class="mt-12 clear-both">
            <h2 class="text-2xl font-bold text-gray-800">Deskripsi Produk</h2>
            <p class="mt-4 text-gray-600">
                Ini adalah deskripsi lengkap tentang produk ini. Anda dapat menambahkan informasi lebih rinci tentang spesifikasi teknis, cara penggunaan, dan fitur unik produk ini.
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
    <footer class="bg-white py-8 border-t border-gray-200 mt-8">
        <div class="container mx-auto px-4">
            <div class="flex justify-between">
                <div class="flex space-x-4">
                    <a href="#" class="text-black"><i class="fab fa-facebook-f"></i></a>
                    <a href="#" class="text-black"><i class="fab fa-twitter"></i></a>
                    <a href="#" class="text-black"><i class="fab fa-instagram"></i></a>
                    <a href="#" class="text-black"><i class="fab fa-linkedin-in"></i></a>
                </div>
                <div class="flex space-x-16">
                    <div>
                        <h3 class="font-semibold mb-2">Use cases</h3>
                        <ul>
                            <li><a href="#" class="text-black">UI design</a></li>
                            <li><a href="#" class="text-black">UX design</a></li>
                            <li><a href="#" class="text-black">Wireframing</a></li>
                            <li><a href="#" class="text-black">Diagramming</a></li>
                        </ul>
                    </div>
                    <div>
                        <h3 class="font-semibold mb-2">Explore</h3>
                        <ul>
                            <li><a href="#" class="text-black">Design</a></li>
                            <li><a href="#" class="text-black">Prototyping</a></li>
                            <li><a href="#" class="text-black">Development features</a></li>
                            <li><a href="#" class="text-black">Design systems</a></li>
                        </ul>
                    </div>
                    <div>
                        <h3 class="font-semibold mb-2">Resources</h3>
                        <ul>
                            <li><a href="#" class="text-black">Blog</a></li>
                            <li><a href="#" class="text-black">Best practices</a></li>
                            <li><a href="#" class="text-black">Colors</a></li>
                            <li><a href="#" class="text-black">Color wheel</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <script>
        // Hamburger menu toggle
        document.querySelector('.hamburger').addEventListener('click', function() {
            document.querySelector('.mobile-menu').classList.toggle('hidden');
        });
    </script>
</body>

</html>