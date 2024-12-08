<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>
        HexonPart
    </title>
    <script src="https://cdn.tailwindcss.com">
    </script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet" />
</head>

<body class="bg-white text-center">
    <!-- Search Bar -->
    <div class="flex justify-center items-center mt-10 space-x-2">
        <input class="border border-black rounded-full px-4 py-2 w-3/4 sm:w-1/2 md:w-1/3 lg:w-1/4" placeholder="Cari Barang" type="text" />
        <button class="border border-black rounded-full px-4 py-2">
            <i class="fas fa-search">
            </i>
        </button>
        <div class="flex space-x-2 ml-auto">
            <button>
                <svg class="w-6 h-6" fill="currentColor" viewbox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path d="m11.645 20.91-.007-.003-.022-.012a15.247 15.247 0 0 1-.383-.218 25.18 25.18 0 0 1-4.244-3.17C4.688 15.36 2.25 12.174 2.25 8.25 2.25 5.322 4.714 3 7.688 3A5.5 5.5 0 0 1 12 5.052 5.5 5.5 0 0 1 16.313 3c2.973 0 5.437 2.322 5.437 5.25 0 3.925-2.438 7.111-4.739 9.256a25.175 25.175 0 0 1-4.244 3.17 15.247 15.247 0 0 1-.383.219l-.022.012-.007.004-.003.001a.752.752 0 0 1-.704 0l-.003-.001Z">
                    </path>
                </svg>
            </button>
            <button>
                <svg class="w-6 h-6" fill="currentColor" viewbox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path d="M2.25 2.25a.75.75 0 0 0 0 1.5h1.386c.17 0 .318.114.362.278l2.558 9.592a3.752 3.752 0 0 0-2.806 3.63c0 .414.336.75.75.75h15.75a.75.75 0 0 0 0-1.5H5.378A2.25 2.25 0 0 1 7.5 15h11.218a.75.75 0 0 0 .674-.421 60.358 60.358 0 0 0 2.96-7.228.75.75 0 0 0-.525-.965A60.864 60.864 0 0 0 5.68 4.509l-.232-.867A1.875 1.875 0 0 0 3.636 2.25H2.25ZM3.75 20.25a1.5 1.5 0 1 1 3 0 1.5 1.5 0 0 1-3 0ZM16.5 20.25a1.5 1.5 0 1 1 3 0 1.5 1.5 0 0 1-3 0Z">
                    </path>
                </svg>
            </button>
            <button>
                <svg class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="1.5" viewbox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path d="M17.982 18.725A7.488 7.488 0 0 0 12 15.75a7.488 7.488 0 0 0-5.982 2.975m11.963 0a9 9 0 1 0-11.963 0m11.963 0A8.966 8.966 0 0 1 12 21a8.966 8.966 0 0 1-5.982-2.275M15 9.75a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" stroke-linecap="round" stroke-linejoin="round">
                    </path>
                </svg>
            </button>
        </div>
    </div>
    <!-- Carousel -->
    <div class="flex justify-center items-center mt-10">
        <div class="relative w-full sm:w-3/4 h-48 bg-gray-300 rounded-lg">
            <img alt="Placeholder image of a carousel slide with a gray background" class="w-full h-full object-cover rounded-lg" height="200" src="https://storage.googleapis.com/a1aa/image/DDEv3sc48ipXF9vgeeAv6Iu0xfi19e2IQTFFgvMRQIUrevHfE.jpg" width="600" />
            <button class="absolute left-0 top-1/2 transform -translate-y-1/2 text-2xl">
                <i class="fas fa-chevron-left">
                </i>
            </button>
            <button class="absolute right-0 top-1/2 transform -translate-y-1/2 text-2xl">
                <i class="fas fa-chevron-right">
                </i>
            </button>
            <div class="absolute bottom-0 left-1/2 transform -translate-x-1/2 mb-4">
                <span class="inline-block w-3 h-3 bg-black rounded-full mx-1">
                </span>
                <span class="inline-block w-3 h-3 bg-black rounded-full mx-1">
                </span>
                <span class="inline-block w-3 h-3 bg-black rounded-full mx-1">
                </span>
            </div>
        </div>
    </div>
    <!-- Product Section -->
    <h2 class="mt-10 text-lg font-semibold">
        Produk Terbaru
    </h2>
    <div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-5 gap-4 mt-4 mx-4">
        <div class="w-full h-32 bg-gray-300 rounded-lg">
            <img alt="Placeholder image of a product with a gray background" class="w-full h-full object-cover rounded-lg" height="150" src="https://storage.googleapis.com/a1aa/image/uWO5AIbRO7r3G1cMQnfgxt7Q9tBYgc7EUsDEFP4mBKa0f94TA.jpg" width="150" />
        </div>
        <div class="w-full h-32 bg-gray-300 rounded-lg">
            <img alt="Placeholder image of a product with a gray background" class="w-full h-full object-cover rounded-lg" height="150" src="https://storage.googleapis.com/a1aa/image/uWO5AIbRO7r3G1cMQnfgxt7Q9tBYgc7EUsDEFP4mBKa0f94TA.jpg" width="150" />
        </div>
        <div class="w-full h-32 bg-gray-300 rounded-lg">
            <img alt="Placeholder image of a product with a gray background" class="w-full h-full object-cover rounded-lg" height="150" src="https://storage.googleapis.com/a1aa/image/uWO5AIbRO7r3G1cMQnfgxt7Q9tBYgc7EUsDEFP4mBKa0f94TA.jpg" width="150" />
        </div>
        <div class="w-full h-32 bg-gray-300 rounded-lg">
            <img alt="Placeholder image of a product with a gray background" class="w-full h-full object-cover rounded-lg" height="150" src="https://storage.googleapis.com/a1aa/image/uWO5AIbRO7r3G1cMQnfgxt7Q9tBYgc7EUsDEFP4mBKa0f94TA.jpg" width="150" />
        </div>
        <div class="w-full h-32 bg-gray-300 rounded-lg">
            <img alt="Placeholder image of a product with a gray background" class="w-full h-full object-cover rounded-lg" height="150" src="https://storage.googleapis.com/a1aa/image/uWO5AIbRO7r3G1cMQnfgxt7Q9tBYgc7EUsDEFP4mBKa0f94TA.jpg" width="150" />
        </div>
        <div class="w-full h-32 bg-gray-300 rounded-lg">
            <img alt="Placeholder image of a product with a gray background" class="w-full h-full object-cover rounded-lg" height="150" src="https://storage.googleapis.com/a1aa/image/uWO5AIbRO7r3G1cMQnfgxt7Q9tBYgc7EUsDEFP4mBKa0f94TA.jpg" width="150" />
        </div>
        <div class="w-full h-32 bg-gray-300 rounded-lg">
            <img alt="Placeholder image of a product with a gray background" class="w-full h-full object-cover rounded-lg" height="150" src="https://storage.googleapis.com/a1aa/image/uWO5AIbRO7r3G1cMQnfgxt7Q9tBYgc7EUsDEFP4mBKa0f94TA.jpg" width="150" />
        </div>
        <div class="w-full h-32 bg-gray-300 rounded-lg">
            <img alt="Placeholder image of a product with a gray background" class="w-full h-full object-cover rounded-lg" height="150" src="https://storage.googleapis.com/a1aa/image/uWO5AIbRO7r3G1cMQnfgxt7Q9tBYgc7EUsDEFP4mBKa0f94TA.jpg" width="150" />
        </div>
        <div class="w-full h-32 bg-gray-300 rounded-lg">
            <img alt="Placeholder image of a product with a gray background" class="w-full h-full object-cover rounded-lg" height="150" src="https://storage.googleapis.com/a1aa/image/uWO5AIbRO7r3G1cMQnfgxt7Q9tBYgc7EUsDEFP4mBKa0f94TA.jpg" width="150" />
        </div>
        <div class="w-full h-32 bg-gray-300 rounded-lg">
            <img alt="Placeholder image of a product with a gray background" class="w-full h-full object-cover rounded-lg" height="150" src="https://storage.googleapis.com/a1aa/image/uWO5AIbRO7r3G1cMQnfgxt7Q9tBYgc7EUsDEFP4mBKa0f94TA.jpg" width="150" />
        </div>
    </div>
    <!-- Pagination -->
    <div class="flex justify-center items-center mt-10 space-x-1">
        <button class="px-3 py-1 border rounded-l-lg">
            Previous
        </button>
        <button class="px-3 py-1 border bg-black text-white">
            1
        </button>
        <button class="px-3 py-1 border">
            2
        </button>
        <button class="px-3 py-1 border">
            3
        </button>
        <span class="px-3 py-1">
            ...
        </span>
        <button class="px-3 py-1 border">
            67
        </button>
        <button class="px-3 py-1 border">
            68
        </button>
        <button class="px-3 py-1 border rounded-r-lg">
            Next
        </button>
    </div>
    <!-- Contact Us Section -->
    <div class="flex justify-center items-center mt-10 space-x-4">
        <button class="flex items-center space-x-2 border border-teal-500 rounded-full px-4 py-2">
            <i class="fas fa-phone text-teal-500">
            </i>
            <span class="text-teal-500">
                CONTACT US
            </span>
        </button>
        <a class="text-green-500 text-2xl" href="#">
            <i class="fab fa-whatsapp">
            </i>
        </a>
        <a class="text-pink-500 text-2xl" href="#">
            <i class="fab fa-instagram">
            </i>
        </a>
        <a class="text-blue-600 text-2xl" href="#">
            <i class="fab fa-facebook">
            </i>
        </a>
    </div>
</body>

</html>