<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>
        Shopping Cart
    </title>
    <script src="https://cdn.tailwindcss.com">
    </script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet" />
</head>

<body class="bg-gray-100">
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
    <div class="bg-white p-4 border-b">
        <div class="flex items-center mb-2">
            <input class="mr-2" type="checkbox" />
            <span>
                Nama Toko
            </span>
        </div>
        <div class="flex items-center">
            <input class="mr-2" type="checkbox" />
            <img alt="Product Image" class="w-12 h-12 border mr-4" height="50" src="https://storage.googleapis.com/a1aa/image/yJEIh7i4l3oHMJ9GT2aueMRWHqq3UBk5040YAYbqtTHQfsenA.jpg" width="50" />
            <div class="flex-1">
                <div class="font-bold">
                    Nama Produk
                </div>
                <div>
                    Produk ini merupakan sebuah ini itu ikeh
                </div>
            </div>
            <div class="text-right">
                <div class="font-bold">
                    RP 175.000
                </div>
                <div class="flex items-center">
                    <button class="border px-2">
                        -
                    </button>
                    <span class="mx-2">
                        1
                    </span>
                    <button class="border px-2">
                        +
                    </button>
                </div>
            </div>
            <div class="text-orange-500 font-bold ml-4">
                RP 175.000
            </div>
            <button class="text-gray-600 ml-4">
                <i class="fas fa-trash">
                </i>
            </button>
        </div>
    </div>
    <div class="bg-white p-4 border-b">
        <div class="flex items-center mb-2">
            <input class="mr-2" type="checkbox" />
            <span>
                Nama Toko
            </span>
        </div>
        <div class="flex items-center">
            <input class="mr-2" type="checkbox" />
            <img alt="Product Image" class="w-12 h-12 border mr-4" height="50" src="https://storage.googleapis.com/a1aa/image/yJEIh7i4l3oHMJ9GT2aueMRWHqq3UBk5040YAYbqtTHQfsenA.jpg" width="50" />
            <div class="flex-1">
                <div class="font-bold">
                    Nama Produk
                </div>
                <div>
                    Produk ini merupakan sebuah ini itu ikeh
                </div>
            </div>
            <div class="text-right">
                <div class="font-bold">
                    RP 175.000
                </div>
                <div class="flex items-center">
                    <button class="border px-2">
                        -
                    </button>
                    <span class="mx-2">
                        1
                    </span>
                    <button class="border px-2">
                        +
                    </button>
                </div>
            </div>
            <div class="text-orange-500 font-bold ml-4">
                RP 175.000
            </div>
            <button class="text-gray-600 ml-4">
                <i class="fas fa-trash">
                </i>
            </button>
        </div>
    </div>
    <div class="bg-gray-200 p-4 rounded-b-lg flex justify-between items-center mt-4">
        <div class="flex items-center">
            <input class="mr-2" type="checkbox" />
            <span>
                Pilih Semua
            </span>
        </div>
        <div class="flex items-center space-x-4">
            <span>
                Total Produk
            </span>
            <span class="text-orange-500 font-bold">
                Rp75.000
            </span>
            <button class="bg-orange-500 text-white px-4 py-2 rounded">
                Checkout
            </button>
        </div>
    </div>
    </div>
</body>

</html>