<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>Edit Order</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="{{ asset('css/sidebar.css') }}">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet" />
</head>
 <body class="bg-gray-100">
  <div class="flex">
    <!-- Sidebar -->
    <x-admin-sidebar>
    </x-admin-sidebar>
    <div class="flex-1 p-8">
    <div class="flex justify-between items-center mb-8">
        <a class="text-blue-700" href="/admin/order">
            <i class="fas fa-arrow-left text-xl"></i>
        </a>
        <h1 class="text-2xl font-bold">Edit Order</h1>
        <div class="flex items-center space-x-4">
            <i class="fas fa-moon text-xl"></i>
            <a href="/admin/notifikasi">
                <i class="fas fa-bell text-2xl"></i>
            </a>
        </div>
    </div>
    <form class="space-y-4" method="" action="">
        <div class="flex items-center">
            <label for="total" class="w-32">Total</label>
            <input class="border p-2 w-full" name="total" id="total" placeholder="Masukan Total" type="text"/>
        </div>
        <div class="flex items-center">
            <label for="status" class="w-32">Status</label>
            <select class="border p-2 w-full" name="status" id="status">
                <option>Masukan Status Order</option>
                <option value="1">Pending</option>
                <option value="2">Completed</option>
                <option value="3">Canceled</option>
            </select>
        </div>
        <div class="flex items-center">
            <label for="alamat" class="w-32">Alamat Pengiriman</label>
            <input class="border p-2 w-full" name="alamat" id="alamat" placeholder="Masukan Alamat" type="text"/>
        </div>
        <div class="flex justify-center">
            <button class="bg-gray-300 text-gray-700 px-4 py-2 rounded" name="ubahord" id="ubahord" type="submit">Ubah Order</button>
        </div>
    </form>
    </div>
  </div>
  <script src="{{ asset('js/sidebar.js') }}"></script>
 </body>
</html>
