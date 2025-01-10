<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>Dashboard</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="{{ asset('css/sidebar.css') }}">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet" />
</head>
<body class="bg-white">
    <div class="flex">
        <!-- Sidebar -->
        <x-admin-sidebar>
        </x-admin-sidebar>
        <!-- Main Content -->
        <div class="w-4/5 p-8">
            <div class="flex justify-between items-center mb-8">
                <img alt="Hexon Parts Logo" class="h-12" height="50" src="{{ asset('img/HexonPart-Logo.png') }}" width="100"/>
                <h1 class="text-2xl font-bold">Selamat Datang di Panel Admin</h1>
                <div class="flex space-x-4">
                    <i class="fas fa-moon text-2xl"></i>
                    <a href="/admin/notifikasi">
                        <i class="fas fa-bell text-2xl"></i>
                    </a>
                </div>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
                <div class="bg-white shadow-md rounded-lg p-6">
                    <div class="flex items-center mb-4">
                        <i class="fas fa-boxes text-3xl text-blue-500 mr-4"></i>
                        <h2 class="text-lg font-bold">Total Produk</h2>
                    </div>
                    <p class="text-3xl font-bold text-blue-500">{{ $totalProducts }}</p>
                </div>
                <div class="bg-white shadow-md rounded-lg p-6">
                    <div class="flex items-center mb-4">
                        <i class="fas fa-users text-3xl text-green-500 mr-4"></i>
                        <h2 class="text-lg font-bold">Total Pengguna</h2>
                    </div>
                    <p class="text-3xl font-bold text-green-500">{{ $totalUsers }}</p>
                </div>
                <div class="bg-white shadow-md rounded-lg p-6">
                    <div class="flex items-center mb-4">
                        <i class="fas fa-shopping-cart text-3xl text-purple-500 mr-4"></i>
                        <h2 class="text-lg font-bold">Total Pesanan</h2>
                    </div>
                    <p class="text-3xl font-bold text-purple-500">{{ $totalOrders }}</p>
                </div>
                <div class="bg-white shadow-md rounded-lg p-6">
                    <div class="flex items-center mb-4">
                        <i class="fas fa-list-alt text-3xl text-yellow-500 mr-4"></i>
                        <h2 class="text-lg font-bold">Total Categori</h2>
                    </div>
                    <p class="text-3xl font-bold text-yellow-500">{{ $totalCategories }}</p>
                </div>
                <div class="bg-white shadow-md rounded-lg p-6">
                    <div class="flex items-center mb-4">
                        <i class="fas fa-credit-card text-3xl text-red-500 mr-4"></i>
                        <h2 class="text-lg font-bold">Total Pembayaran</h2>
                    </div>
                    <p class="text-3xl font-bold text-red-500">{{ $totalPayments }}</p>
                </div>
            </div>
            <div class="bg-white p-6 rounded-lg shadow-md">
                <h2 class="text-lg font-bold mb-4">System Logs</h2>
                <div class="overflow-x-auto">
                    <table class="w-full text-left text-sm">
                        <thead>
                            <tr>
                                <th class="border px-2 py-1">ID Log</th>
                                <th class="border px-2 py-1">Nama</th>
                                <th class="border px-2 py-1">Action</th>
                                <th class="border px-2 py-1">Timestamp</th>
                            </tr>
                        </thead>
                        <tbody id="system-logs">
                            <!-- Data log akan ditampilkan di sini -->
                        </tbody>
                    </table>
                </div>
            </div>

            <script>
                // Fungsi untuk mengupdate data log secara real-time
                function updateSystemLogs() {
                    $.ajax({
                        type: 'GET',
                        url: '/admin/system-logs',
                        dataType: 'json',
                        success: function(data) {
                            $('#system-logs').empty();
                            $.each(data, function(index, value) {
                                $('#system-logs').append(`
                                    <tr>
                                        <td class="border px-2 py-1">${value.id}</td>
                                        <td class="border px-2 py-1">${value.nama}</td>
                                        <td class="border px-2 py-1">${value.action}</td>
                                        <td class="border px-2 py-1">${value.timestamp}</td>
                                    </tr>
                                `);
                            });
                        }
                    });
                }
            
                // Fungsi untuk mengupdate data log secara real-time setiap 5 detik
                    setInterval(updateSystemLogs, 5000);

                // Fungsi untuk mengupdate data log secara real-time saat halaman di-load
                    $(document).ready(function() {
                        updateSystemLogs();
                        });
            </script>
            
            <!-- Footer -->
            <x-admin-footer></x-admin-footer>
        </div>
    </div>
    <script src="{{ asset('js/sidebar.js') }}"></script>
</body>
</html>