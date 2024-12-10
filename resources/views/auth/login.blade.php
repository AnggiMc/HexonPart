<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hexon Part</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
</head>

<body class="flex items-center justify-center min-h-screen bg-gray-100">
    <a href="/" class="absolute top-4 left-4 flex items-center text-black text-lg">
        <i class="fas fa-arrow-left mr-2"></i>
        <span>Kembali</span>
    </a>
    <div class="w-full max-w-xs md:max-w-md lg:max-w-lg">
        <form class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="email">
                    Email
                </label>
                <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="email" type="text" placeholder="Value">
            </div>
            <div class="mb-6">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="password">
                    Password
                </label>
                <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline" id="password" type="password" placeholder="Value">
            </div>
            <div class="flex items-center justify-between">
                <button class="bg-black text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="button">
                    Login
                </button>
            </div>
            <div class="mt-4">
                <a class="inline-block align-baseline font-bold text-sm text-gray-500 hover:text-gray-800" href="#">
                    Forgot password?
                </a>
            </div>
        </form>
    </div>
</body>

</html>