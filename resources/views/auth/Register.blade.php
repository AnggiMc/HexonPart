<html>

<head>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet" />
</head>

<body class="bg-gray-100 flex items-center justify-center min-h-screen relative">
    <a href="/" class="absolute top-4 left-4 flex items-center text-black text-lg">
        <i class="fas fa-arrow-left mr-2"></i>
        <span>Kembali</span>
    </a>
    <div class="w-full max-w-md bg-white p-8 rounded-lg shadow-md mx-4 sm:mx-0">
        <div class="flex justify-center mb-6">
            <img alt="User icon" class="rounded-full" height="100" src="https://placehold.co/100x100" width="100" />
        </div>
        <form>
            <div class="mb-4">
                <label class="block text-gray-700">Nama</label>
                <input class="w-full px-3 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" placeholder="Nama" type="text" />
            </div>
            <div class="mb-4">
                <label class="block text-gray-700">Email</label>
                <input class="w-full px-3 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" placeholder="Email" type="email" />
            </div>
            <div class="mb-4">
                <label class="block text-gray-700">No HP</label>
                <input class="w-full px-3 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" placeholder="No HP" type="text" />
            </div>
            <div class="mb-4">
                <label class="block text-gray-700">TTB/TTH</label>
                <input class="w-full px-3 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" placeholder="TTB/TTH" type="text" />
            </div>
            <div class="mb-4">
                <label class="block text-gray-700">Jenis Kelamin</label>
                <input class="w-full px-3 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" placeholder="Jenis Kelamin" type="text" />
            </div>
            <div class="mb-4">
                <label class="block text-gray-700">Alamat</label>
                <input class="w-full px-3 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" placeholder="Alamat" type="text" />
            </div>
            <div class="mb-4">
                <label class="block text-gray-700">Password</label>
                <input class="w-full px-3 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" placeholder="Password" type="password" />
            </div>
            <div class="mb-4">
                <label class="block text-gray-700">Konfirmasi Password</label>
                <input class="w-full px-3 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" placeholder="Konfirmasi Password" type="password" />
            </div>
            <div class="flex justify-center">
                <button class="px-4 py-2 bg-gray-500 text-white rounded-lg" type="submit">Register</button>
            </div>
        </form>
    </div>
</body>

</html>