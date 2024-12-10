<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>
        Profile Page
    </title>
    <script src="https://cdn.tailwindcss.com">
    </script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet" />
</head>

<body class="bg-gray-100 flex items-center justify-center min-h-screen relative">
    <a class="absolute top-4 left-4 text-black text-lg" href="/">
        <i class="fas fa-arrow-left">
        </i>
        Kembali
    </a>
    <div class="w-full max-w-md bg-white p-8 rounded-lg shadow-md">
        <div class="flex justify-center mb-6">
            <img alt="User profile icon" class="rounded-full" height="100" src="https://storage.googleapis.com/a1aa/image/I4eWZJJIhxwTb6FiygJPFSOMvcLfl3B6yXljguUxd38Vzi5TA.jpg" width="100" />
        </div>
        <div class="mb-4">
            <label class="block text-gray-700">
                Nama
            </label>
            <input class="w-full px-3 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" readonly="" type="text" value="" />
        </div>
        <div class="mb-4">
            <label class="block text-gray-700">
                Email
            </label>
            <input class="w-full px-3 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" readonly="" type="email" value="" />
        </div>
        <div class="mb-4">
            <label class="block text-gray-700">
                No HP
            </label>
            <input class="w-full px-3 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" readonly="" type="text" value="" />
        </div>
        <div class="mb-4">
            <label class="block text-gray-700">
                TT/BB/TH
            </label>
            <input class="w-full px-3 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" readonly="" type="text" value="" />
        </div>
        <div class="mb-4">
            <label class="block text-gray-700">
                Jenis Kelamin
            </label>
            <input class="w-full px-3 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" readonly="" type="text" value="" />
        </div>
        <div class="mb-4">
            <label class="block text-gray-700">
                Alamat
            </label>
            <input class="w-full px-3 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" readonly="" type="text" value="" />
        </div>
        <div class="flex justify-center space-x-4 mt-4">
            <a href="/auth/Edit_Password" class="bg-gray-500 text-white px-4 py-2 rounded-lg">
                Ubah Password
            </a>
            <button class="bg-gray-500 text-white px-4 py-2 rounded-lg">
                Logout
            </button>
        </div>
    </div>
</body>

</html>