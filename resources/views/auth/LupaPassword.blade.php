<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>
        Lupa Password
    </title>
    <script src="https://cdn.tailwindcss.com">
    </script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet" />
    <style>
        /* Efek blur untuk kolom form */
        .form-input-blur {
            position: relative;
        }

        .form-input-blur::after {
            content: '';
            position: absolute;
            top: 5px;
            left: 5px;
            width: 100%;
            height: 100%;
            background: rgba(255, 255, 255, 0.5);
            filter: blur(5px);
            z-index: -1;
            border-radius: 0.5rem;
        }
    </style>
</head>

<body class="bg-gradient-to-r from-blue-50 to-purple-50 flex items-center justify-center min-h-screen relative">
    <!-- Form Lupa Password -->
    <div class="w-full max-w-md bg-white p-8 rounded-xl shadow-lg mx-4 sm:mx-0 mt-16 sm:mt-0">
        <div class="flex justify-center mb-8">
            <img alt="User             icon" class="rounded-full border-4 border-white shadow-lg" height="100" src="https://storage.googleapis.com/a1aa/image/Z5pikvHYUrKmOZi4MxIrtq2rsAN8WJjLrsvrY9YNT0p9QZeJA.jpg" width="100" />
        </div>
        <form>
            <!-- Kolom Input dengan Shadow -->
            <div class="mb-6 form-input-blur">
                <label class="block text-gray-700 text-sm font-semibold mb-2">
                    <i class="fas fa-envelope mr-2"></i>
                    Email
                </label>
                <input class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent transition-all duration-200 shadow-md" placeholder="Masukkan email Anda" type="email" />
            </div>

            <!-- Tombol Kirim -->
            <div class="flex justify-center mb-4">
                <button class="px-6 py-3 bg-gradient-to-r from-blue-600 to-purple-500 text-white rounded-lg hover:from-blue-700 hover:to-purple-600 transition-all duration-200 w-full" type="submit">
                    Kirim Link Reset Password
                </button>
            </div>

            <!-- Tombol Kembali -->
            <div class="flex justify-center mb-4">
                <a class="flex items-center text-lg text-blue-800 bg-gradient-to-r from-white to-sky-300 px-4 py-2 rounded-lg hover:from-sky-100 hover:to-sky-400 transition-all duration-200" href="/">
                    <i class="fas fa-arrow-left text-xl mr-2"></i>
                    Kembali
                </a>
            </div>
        </form>
    </div>
</body>

</html>