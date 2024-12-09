<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>Hexon Part</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet" />
</head>

<body class="bg-white text-gray-800">
    <header class="border-b border-gray-200">
        <div class="container mx-auto flex justify-between items-center py-4 px-6">
            <div class="text-2xl font-bold">
                <i class="fas fa-cube"></i>
            </div>
            <nav class="hidden md:flex space-x-4">
                <a class="text-gray-600 hover:text-gray-800" href="#">Products</a>
                <a class="text-gray-600 hover:text-gray-800" href="#">Solutions</a>
                <a class="text-gray-600 hover:text-gray-800" href="#">Community</a>
                <a class="text-gray-600 hover:text-gray-800" href="#">Resources</a>
                <a class="text-gray-600 hover:text-gray-800" href="#">Pricing</a>
                <a class="text-gray-600 hover:text-gray-800" href="#">Contact</a>
            </nav>
            <div class="md:hidden">
                <button id="menu-button" class="text-gray-600 focus:outline-none">
                    <i class="fas fa-bars"></i>
                </button>
            </div>
        </div>
        <div id="mobile-menu" class="hidden md:hidden">
            <nav class="flex flex-col space-y-2 px-6 py-4">
                <a class="text-gray-600 hover:text-gray-800" href="#">Products</a>
                <a class="text-gray-600 hover:text-gray-800" href="#">Solutions</a>
                <a class="text-gray-600 hover:text-gray-800" href="#">Community</a>
                <a class="text-gray-600 hover:text-gray-800" href="#">Resources</a>
                <a class="text-gray-600 hover:text-gray-800" href="#">Pricing</a>
                <a class="text-gray-600 hover:text-gray-800" href="#">Contact</a>
            </nav>
        </div>
    </header>
    <main class="container mx-auto flex flex-col md:flex-row items-center justify-between py-20 px-6">
        <div class="text-left md:w-1/2">
            <p class="text-lg text-gray-600 mb-2">Halo, Selamat datang</p>
            <h1 class="text-4xl font-bold text-gray-800 mb-6">Temukan Spare part Impianmu</h1>
            <div class="space-x-4">
                <button class="px-4 py-2 bg-gray-200 text-gray-600 rounded">Sign in</button>
                <button class="px-4 py-2 bg-gray-400 text-white rounded">Register</button>
            </div>
        </div>
        <div class="md:w-1/2 mt-10 md:mt-0"> <img alt="Placeholder image for spare part" class="w-full h-auto" height="300" src="https://storage.googleapis.com/a1aa/image/jYkowuMF33LNH5UvcgbKsrxBpfEYsORFMacXA9YGcWa7Tb8JA.jpg" width="400" /> </div>
    </main>
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