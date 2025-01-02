<html lang="en">
 <head>
  <meta charset="utf-8"/>
  <meta content="width=device-width, initial-scale=1.0" name="viewport"/>
  <title>Pengaturan</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link rel="stylesheet" href="{{ asset('css/sidebar.css') }}">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet"/>
 </head>
 <body class="bg-gray-100">
    <div class="flex">
        <!-- Sidebar -->
        <x-admin-sidebar>
        </x-admin-sidebar>
        <!-- Main Content -->
        <div class="w-3/4 p-8">
            <div class="flex justify-between items-center mb-8">
                <h1 class="text-2xl font-bold">PENGATURAN</h1>
                <div class="flex space-x-4">
                    <i class="fas fa-moon text-xl"></i>
                    <a href="/admin/notifikasi">
                        <i class="fas fa-bell text-2xl"></i>
                    </a>
                </div>
            </div>
            <div class="bg-gray-100 p-4 rounded-lg mb-8">
                <div class="flex items-center space-x-4 mb-4">
                    <i class="fas fa-database text-xl"></i>
                    <h2 class="text-xl font-semibold">Backup Database</h2>
                </div>
                <p class="text-gray-600 mb-4">Backup Database berfungsi untuk mencadangkan data dari sebuah database untuk menjaga keamanan, integritas, ketersediaan data dan mengurangi resiko kehilangan data</p>
                <button class="bg-white border border-gray-300 px-4 py-2 rounded-lg">Backup</button>
            </div>
            <div class="mb-8">
                <h2 class="text-xl font-semibold mb-4">Nama dan Logo Website
                    <i class="fas fa-pen"></i>
                </h2>
                <div class="flex items-center space-x-4">
                    <img alt="HexonParts logo" class="w-24 h-12" height="50" src="https://storage.googleapis.com/a1aa/image/AZiED4k15DqlMJFFM7CfpmrJFB2wIYtft8DegFduKMaLf09PB.jpg" width="100"/>
                    <span class="text-2xl font-bold">HexonParts</span>
                </div>
            </div>
            <div class="mb-8">
                <h2 class="text-xl font-semibold mb-4">Banner
                    <i class="fas fa-pen"></i>
                </h2>
                <div class="flex space-x-4">
                    <div class="w-1/2 h-32 bg-gray-200 flex items-center justify-center">
                        <img alt="Banner" class="w-24 h-24" height="150" src="https://storage.googleapis.com/a1aa/image/Dp9od2d22wqWLdxq1NtkTfWGTTQDN8JWPmY3biXv9SfmPdfnA.jpg" width="150"/>
                    </div>
                    <div class="w-1/2 h-32 bg-gray-200 flex items-center justify-center">
                        <img alt="Banner" class="w-24 h-24" height="150" src="https://storage.googleapis.com/a1aa/image/Dp9od2d22wqWLdxq1NtkTfWGTTQDN8JWPmY3biXv9SfmPdfnA.jpg" width="150"/>
                    </div>
                </div>
            </div>
            <div class="mb-8">
                <h2 class="text-xl font-semibold mb-4">Footer
                    <i class="fas fa-pen"></i>
                </h2>
                <div class="flex justify-between">
                    <div class="flex space-x-4">
                        <i class="fab fa-twitter"></i>
                        <i class="fab fa-instagram"></i>
                        <i class="fab fa-facebook"></i>
                        <i class="fab fa-linkedin"></i>
                    </div>
                    <div class="flex space-x-8">
                        <div>
                            <h3 class="font-semibold">Use cases</h3>
                            <ul class="text-gray-600">
                                <li>UI design</li>
                                <li>UX design</li>
                                <li>Wireframing</li>
                            </ul>
                        </div>
                    <div>
                    <h3 class="font-semibold">Explore</h3>
                    <ul class="text-gray-600">
                        <li>Design</li>
                        <li>Prototyping</li>
                        <li>Development features</li>
                    </ul>
                </div>
                <div>
                    <h3 class="font-semibold">Resources</h3>
                    <ul class="text-gray-600">
                        <li>Blog</li>
                        <li>Best practices</li>
                        <li>Colors</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
        <!-- Footer -->
        <x-admin-footer></x-admin-footer>
    </div>
    </div>
    <script src="{{ asset('js/sidebar.js') }}"></script>
 </body>
</html>
