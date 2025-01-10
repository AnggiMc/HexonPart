<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>
        Responsive Form
    </title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
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
    <!-- Form Registrasi -->
    <div class="w-full max-w-md bg-white p-8 rounded-xl shadow-lg mx-4 sm:mx-0 mt-16 sm:mt-0">
        <div class="flex justify-center mb-8">
            <img alt="User            icon" class="rounded-full border-4 border-white shadow-lg" height="100" src="https://storage.googleapis.com/a1aa/image/Z5pikvHYUrKmOZi4MxIrtq2rsAN8WJjLrsvrY9YNT0p9QZeJA.jpg" width="100" />
        </div>
        <<form method="POST" action="{{ route('login') }}">
            @csrf
            <!-- Kolom Input Email -->
            <div class="mb-6">
                <label class="block text-gray-700 text-sm font-semibold mb-2">
                    <i class="fas fa-envelope mr-2"></i>
                    Email
                </label>
                <input type="email" name="email" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent transition-all duration-200 shadow-md" placeholder="Masukkan email Anda" required>
            </div>

            <!-- Kolom Input Password -->
            <div class="mb-6">
                <label class="block text-gray-700 text-sm font-semibold mb-2">
                    <i class="fas fa-lock mr-2"></i>
                    Password
                </label>
                <input type="password" name="password" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent transition-all duration-200 shadow-md" placeholder="Masukkan password Anda" required>
            </div>

            <!-- Tombol Submit -->
            <div class="flex items-center justify-between">
                <button type="submit" class="w-full bg-blue-500 text-white font-semibold py-2 rounded-lg hover:bg-blue-600 transition duration-200">
                    Login </button>
            </div>
        </form>
    </div>
</body>


@if(session('notifikasi'))
    <script>
        notifikasi('{{ session('notifikasi.tipe') }}', '{{ session('notifikasi.pesan') }}');
    </script>
@endif

<script>
    function notifikasi(tipe, pesan) {
        Swal.fire({
            icon: tipe,
            title: pesan,
            showConfirmButton: false,
            timer: 1500
        });
    }
</script>

</html>