<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>
        Responsive Header
    </title>
    <script src="https://cdn.tailwindcss.com">
    </script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet" />
</head>

<body>
    <header class="bg-white shadow-md sticky top-0 z-10">
        <div class="container mx-auto px-4 py-4 flex justify-between items-center">
            <img src="{{ asset('img/HexonPart-Logo.png') }}" alt="">
            <div class="flex items-center space-x-4">
                <input class="px-4 py-2 border rounded-lg w-64 focus:outline-none focus:ring-2 focus:ring-blue-500 hidden md:block" placeholder="Cari produk..." type="text" />
                <div class="menu hidden md:flex items-center space-x-4">
                    <a class="text-gray-800 hover:text-blue-500" href="/user/Kategori_Produk">
                        Kategori
                    </a>
                    <a class="text-gray-800 hover:text-blue-500" href="/user/Order">
                        Keranjang
                    </a>
                    <a class="text-gray-800 hover:text-blue-500" href="/user/Profil">
                        Akun
                    </a>
                </div>
                <button class="hamburger md:hidden flex items-center px-3 py-2 border rounded text-gray-800 border-gray-800 hover:text-blue-500 hover:border-blue-500">
                    <svg class="fill-current h-3 w-3" viewbox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <title>
                            Menu
                        </title>
                        <path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z">
                        </path>
                    </svg>
                </button>
            </div>
        </div>
        <div class="mobile-menu md:hidden hidden">
            <a class="block px-4 py-2 text-gray-800 hover:bg-gray-200" href="#">
                Kategori
            </a>
            <a class="block px-4 py-2 text-gray-800 hover:bg-gray-200" href="#">
                Keranjang
            </a>
            <a class="block px-4 py-2 text-gray-800 hover:bg-gray-200" href="#">
                Akun
            </a>
        </div>
    </header>
    <script>
        document.querySelector('.hamburger').addEventListener('click', function() {
            document.querySelector('.mobile-menu').classList.toggle('hidden');
        });
    </script>
</body>

</html>