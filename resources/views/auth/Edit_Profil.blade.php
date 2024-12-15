<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>
        Form Submission
    </title>
    <script src="https://cdn.tailwindcss.com">
    </script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&amp;display=swap" rel="stylesheet" />
    <style>
        body {
            font-family: 'Roboto', sans-serif;
        }
    </style>
</head>

<body class="bg-gray-100 flex items-center justify-center min-h-screen">
    <a class="absolute top-4 left-4 flex items-center text-black text-lg" href="/">
        <i class="fas fa-arrow-left mr-2">
        </i>
        <span>
            Kembali
        </span>
    </a>
    <div class="bg-white p-8 rounded-lg shadow-lg w-full max-w-md">
        <h1 class="text-2xl font-bold mb-6">
            Form Submission
        </h1>
        <form id="submissionForm" onsubmit="handleSubmit(event)">
            <div class="mb-4">
                <label class="block text-gray-700" for="name">
                    Name
                </label>
                <input class="w-full px-3 py-2 border rounded-lg" id="name" required="" type="text" />
            </div>
            <div class="mb-4">
                <label class="block text-gray-700" for="email">
                    Email
                </label>
                <input class="w-full px-3 py-2 border rounded-lg" id="email" required="" type="email" />
            </div>
            <div class="mb-4">
                <label class="block text-gray-700" for="phone">
                    Phone
                </label>
                <input class="w-full px-3 py-2 border rounded-lg" id="phone" required="" type="tel" />
            </div>
            <div class="mb-4">
                <label class="block text-gray-700" for="ttb">
                    Date of Birth
                </label>
                <input class="w-full px-3 py-2 border rounded-lg" id="ttb" required="" type="date" />
            </div>
            <div class="mb-4">
                <label class="block text-gray-700" for="gender">
                    Gender
                </label>
                <select class="w-full px-3 py-2 border rounded-lg" id="gender" required="">
                    <option value="">
                        Select Gender
                    </option>
                    <option value="male">
                        Male
                    </option>
                    <option value="female">
                        Female
                    </option>
                    <option value="other">
                        Other
                    </option>
                </select>
            </div>
            <div class="mb-4">
                <label class="block text-gray-700" for="address">
                    Address
                </label>
                <textarea class="w-full px-3 py-2 border rounded-lg" id="address" required="" rows="3"></textarea>
            </div>
            <button class="w-full bg-blue-500 text-white py-2 rounded-lg hover:bg-blue-600" type="submit">
                Submit
            </button>
        </form>
    </div>
    <div class="fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center hidden" id="formSuccess">
        <div class="bg-white p-10 rounded-lg shadow-lg text-center w-96">
            <div class="text-5xl text-green-500 mb-4">
                <i class="fas fa-check-circle">
                </i>
            </div>
            <p class="text-lg mb-6">
                Berhasil
            </p>
            <button class="bg-gray-300 text-black py-2 px-6 rounded-full" onclick="closePopup('formSuccess')">
                Oke
            </button>
        </div>
    </div>
    <div class="fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center hidden" id="formError">
        <div class="bg-white p-6 rounded-lg shadow-lg text-center">
            <img alt="Error icon with a cross mark" class="mx-auto mb-4" height="100" src="https://storage.googleapis.com/a1aa/image/D3fbmMVfEbiisEEUWRJV8neUoEqf9WMvvvrEeluix46C9PYfE.jpg" width="100" />
            <h2 class="text-2xl font-bold mb-2">
                Error!
            </h2>
            <p class="text-gray-700 mb-4">
                Please fill in all the fields correctly.
            </p>
            <button class="bg-red-500 text-white py-2 px-4 rounded-lg hover:bg-red-600" onclick="closePopup('formError')">
                Close
            </button>
        </div>
    </div>
    <script>
        function handleSubmit(event) {
            event.preventDefault(); // Mencegah halaman refresh saat submit

            // Ambil elemen input
            const name = document.getElementById("name").value.trim();
            const email = document.getElementById("email").value.trim();
            const phone = document.getElementById("phone").value.trim();
            const ttb = document.getElementById("ttb").value.trim();
            const gender = document.getElementById("gender").value;
            const address = document.getElementById("address").value.trim();

            // Hanya menampilkan popup ketika ada inputan
            if (name && email && phone && ttb && gender && address) {
                openPopup('formSuccess'); // Jika semua input terisi, buka popup berhasil
            } else {
                openPopup('formError'); // Jika ada yang kosong, buka popup gagal
            }
        }

        function openPopup(popupId) {
            document.getElementById(popupId).classList.remove('hidden');
        }

        function closePopup(popupId) {
            document.getElementById(popupId).classList.add('hidden');
        }
    </script>
</body>

</html>