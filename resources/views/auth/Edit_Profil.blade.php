<html>

<head>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet" />
</head>

<body class="bg-gray-100 flex items-center justify-center min-h-screen relative">
    <a class="absolute top-4 left-4 text-black text-lg" href="#">
        <i class="fas fa-arrow-left"></i> Kembali
    </a>
    <div class="w-full max-w-md bg-white p-8 rounded-lg shadow-md">
        <div class="flex justify-center mb-6">
            <img alt="User icon" class="rounded-full" height="100" src="https://placehold.co/100x100" width="100" />
        </div>
        <form>
            <div class="mb-4">
                <label class="block text-gray-700">Nama</label>
                <input class="w-full px-3 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" type="text" value="" />
            </div>
            <div class="mb-4">
                <label class="block text-gray-700">Email</label>
                <input class="w-full px-3 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" type="email" value="" />
            </div>
            <div class="mb-4">
                <label class="block text-gray-700">No HP</label>
                <input class="w-full px-3 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" type="text" value="" />
            </div>
            <div class="mb-4">
                <label class="block text-gray-700">TTB/TTH</label>
                <input class="w-full px-3 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" type="text" value="" />
            </div>
            <div class="mb-4">
                <label class="block text-gray-700">Jenis Kelamin</label>
                <input class="w-full px-3 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" type="text" value="" />
            </div>
            <div class="mb-4">
                <label class="block text-gray-700">Alamat</label>
                <input class="w-full px-3 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" type="text" value="" />
            </div>
            <div class="flex justify-center">
                <button class="px-4 py-2 bg-gray-500 text-white rounded-lg" type="submit">Save</button>
            </div>
        </form>
    </div>
</body>

</html>