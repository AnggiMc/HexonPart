<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>
        Order Page
    </title>
    <script src="https://cdn.tailwindcss.com">
    </script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet" />
</head>

<body class="bg-gray-200">
    <div class="absolute top-4 left-4 flex items-center">
        <a class="absolute top-4 left-4 flex items-center text-lg text-black" href="/user/Order">
            <i class="fas fa-arrow-left text-xl mr-2">
            </i>
            Kembali
        </a>
    </div>
    <div class="max-w-4xl mx-auto p-4 relative mt-12">
        <div class="bg-white p-4 shadow-md">
            <div class="mb-4">
                <label class="block text-gray-700">
                    Alamat
                </label>
                <textarea class="w-full p-2 border rounded" rows="2">JL. Sitaubdi Gegerkalong HJ. Ridho II</textarea>
            </div>
            <div class="mb-4 flex items-center">
                <div class="w-24 h-24 bg-gray-100 flex items-center justify-center relative">
                    <i class="fas fa-heart absolute top-2 left-2 text-black">
                    </i>
                    <img alt="Product image placeholder" class="opacity-50" height="100" src="https://placehold.co/100x100" width="100" />
                </div>
                <span class="ml-4">
                    Produk ini merupakan wkwkwkwkwk
                </span>
            </div>
            <div class="mb-4 flex items-center">
                <div class="w-24 h-24 bg-gray-100 flex items-center justify-center relative">
                    <i class="fas fa-heart absolute top-2 left-2 text-black">
                    </i>
                    <img alt="Product image placeholder" class="opacity-50" height="100" src="https://placehold.co/100x100" width="100" />
                </div>
                <span class="ml-4">
                    Produk ini merupakan wkwkwkwkwk
                </span>
            </div>
            <div class="mb-4">
                <label class="block text-gray-700">
                    Metode Pembayaran
                </label>
                <select class="w-full p-2 border rounded">
                    <option>
                        Value
                    </option>
                </select>
            </div>
            <div class="flex justify-between items-center">
                <span class="text-lg">
                    Total Pembayaran :
                    <span class="text-orange-500">
                        Rp75.000
                    </span>
                </span>
                <button class="bg-orange-500 text-white px-4 py-2 rounded">
                    Buat Pesanan
                </button>
            </div>
        </div>
    </div>
</body>

</html>