<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>HexonPart</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet" />
    <style>
        .carousel-item {
            opacity: 0;
            visibility: hidden;
            transition: opacity 0.5s ease-in-out, visibility 0s 0.5s;
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
        }

        .carousel-item.active {
            opacity: 1;
            visibility: visible;
            transition: opacity 0.5s ease-in-out;
        }
    </style>
</head>

<body class="bg-white text-center">
    <!-- Search Bar -->
    <div class="flex justify-center items-center mt-10 space-x-2 w-full select-none">
        <!-- Input and Search Button in the Center -->
        <div class="flex justify-center items-center space-x-2 w-full max-w-5xl mx-auto">
            <input class="border border-black rounded-full px-4 py-2 w-3/4" placeholder="Cari Barang" type="text" />
            <button class="border border-black rounded-full px-4 py-2">
                <i class="fas fa-search"></i>
            </button>
            <!-- Buttons on the Right -->
            <div class="flex space-x-2 pl-6">
                <button>
                    <a href="/user/Order">
                        <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path d="M2.25 2.25a.75.75 0 0 0 0 1.5h1.386c.17 0 .318.114.362.278l2.558 9.592a3.752 3.752 0 0 0-2.806 3.63c0 .414.336.75.75.75h15.75a.75.75 0 0 0 0-1.5H5.378A2.25 2.25 0 0 1 7.5 15h11.218a.75.75 0 0 0 .674-.421 60.358 60.358 0 0 0 2.96-7.228.75.75 0 0 0-.525-.965A60.864 60.864 0 0 0 5.68 4.509l-.232-.867A1.875 1.875 0 0 0 3.636 2.25H2.25ZM3.75 20.25a1.5 1.5 0 1 1 3 0 1.5 1.5 0 0 1-3 0ZM16.5 20.25a1.5 1.5 0 1 1 3 0 1.5 1.5 0 0 1-3 0Z"></path>
                        </svg>
                    </a>
                </button>
                <button>
                    <!-- Wrap the SVG in an <a> tag to make it clickable -->
                    <a href="/user/Profil">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path d="M17.982 18.725A7.488 7.488 0 0 0 12 15.75a7.488 7.488 0 0 0-5.982 2.975m11.963 0a9 9 0 1 0-11.963 0m11.963 0A8.966 8.966 0 0 1 12 21a8.966 8.966 0 0 1-5.982-2.275M15 9.75a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" stroke-linecap="round" stroke-linejoin="round"></path>
                        </svg>
                    </a>
                </button>
            </div>
        </div>
    </div>
    <!-- Carousel -->
    <div class="flex justify-center items-center mt-10">
        <div class="relative w-full sm:w-3/4 h-48 bg-gray-300 rounded-lg overflow-hidden">
            <div class="carousel-item active">
                <img alt="Placeholder image of a carousel slide with a gray background" class="w-full h-full object-cover rounded-lg" height="200" src="https://storage.googleapis.com/a1aa/image/mee5gPdvfTBToo6EcDi7B0QE4GmqXzGw1zPRz3hWgeteZUMfE.jpg" width="600" />
            </div>
            <div class="carousel-item">
                <img alt="Placeholder image of a carousel slide with a gray background" class="w-full h-full object-cover rounded-lg" height="200" src="https://picsum.photos/600/200?random" width="600" />
            </div>
            <div class="carousel-item">
                <img alt="Placeholder image of a carousel slide with a gray background" class="w-full h-full object-cover rounded-lg" height="200" src="https://www.w3schools.com/w3images/mountains.jpg" width="600" />
            </div>
            <button class="absolute left-0 top-1/2 transform -translate-y-1/2 text-2xl" onclick="prevSlide()">
                <i class="fas fa-chevron-left">
                </i>
            </button>
            <button class="absolute right-0 top-1/2 transform -translate-y-1/2 text-2xl" onclick="nextSlide()">
                <i class="fas fa-chevron-right">
                </i>
            </button>
            <div class="absolute bottom-0 left-1/2 transform -translate-x-1/2 mb-4 flex">
                <span class="carousel-indicator w-3 h-3 bg-black rounded-full mx-1 sm:cursor-pointer select-none" data-slide="0"></span>
                <span class="carousel-indicator w-3 h-3 bg-black rounded-full mx-1 sm:cursor-pointer select-none"></span>
                <span class="carousel-indicator w-3 h-3 bg-black rounded-full mx-1 sm:cursor-pointer select-none" data-slide="2"></span>
            </div>
        </div>
    </div>
    <!-- Product Section -->
    <h2 class="mt-10 text-lg font-semibold">Produk Terbaru</h2>
    <div id="product-container" class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-5 gap-4 mt-4 mx-4"></div>

    <!-- Pagination -->
    <div class="flex justify-center items-center mt-10 space-x-1">
        <button id="prev-button" class="px-3 py-1 border">Previous</button>
        <span id="pagination-buttons" class="flex space-x-1"></span>
        <button id="next-button" class="px-3 py-1 border">Next</button>
    </div>

    <!-- Contact Us Section -->
    <div class="max-w-full mx-auto p-4 bg-white shadow-md mt-32 text-center">
        <h1 class="text-blue-600 text-xl font-bold">
            Asian-Accessory.com
        </h1>
        <p>
            JL. Prof. DR. Latumeten Raya No. 20 J-K Grogol Petamburan. Jakarta Barat. Prov. DKI Jakarta
        </p>
        <div class="flex justify-center items-center mt-2">
            <i class="fas fa-map-marker-alt text-blue-600"></i>
            <a class="text-blue-600 ml-2" href="#">
                Lihat Google Maps
            </a>
        </div>
        <div class="flex justify-center items-center mt-2">
            <i class="fas fa-info-circle text-red-600"></i>
            <p class="text-red-600 ml-2">
                Tidak bisa pilih barang langsung di toko kami. Order dulu di website, bayar bisa cash di toko!
            </p>
        </div>
        <p class="mt-2">
            Telp. (021) 5641747
        </p>
        <p>
            WhatsApp Admin:
            <a class="text-blue-600" href="tel:081312225555">
                08 131 222 5555
            </a>
        </p>
        <p class="mt-2 font-bold">
            Jam Operasional
        </p>
        <p>
            Senin - Sabtu: 08.00 WIB - 17.00 WIB
        </p>
        <p>
            Libur pada hari Minggu dan Tanggal Merah
        </p>
        <footer class="mmax-w-full mx-auto p-4 bg-white shadow text-center">
            <div class="flex flex-col md:flex-row justify-center">
                <div class="mb-4 md:mb-0">
                    <p class="font-bold">
                        Asian Accessory
                    </p>
                    <ul>
                        <li>
                            <a class="text-gray-700" href="#">
                                Tentang Kami
                            </a>
                        </li>
                        <li>
                            <a class="text-gray-700" href="#">
                                Kontak Kami
                            </a>
                        </li>
                        <li class="flex justify-center space-x-2 mt-2">
                            <a class="text-gray-700" href="#">
                                <i class="fab fa-instagram"></i>
                            </a>
                            <a class="text-gray-700" href="#">
                                <i class="fab fa-facebook"></i>
                            </a>
                            <a class="text-gray-700" href="#">
                                <i class="fab fa-telegram"></i>
                            </a>
                        </li>
                    </ul>
                </div>
                <div>
                    <p class="font-bold">
                        Layanan Pelanggan
                    </p>
                    <ul>
                        <li>
                            <a class="text-gray-700" href="#">
                                Cara Belanja
                            </a>
                        </li>
                        <li>
                            <a class="text-gray-700" href="#">
                                Biaya Pengiriman
                            </a>
                        </li>
                        <li>
                            <a class="text-gray-700" href="#">
                                Cara Pembayaran
                            </a>
                        </li>
                        <li>
                            <a class="text-gray-700" href="#">
                                Garansi Produk
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="text-center text-gray-600 mt-4">
                <p>
                    Last Update: 14 Dec 2024 15:52:59 © Asian-Accessory.com
                </p>
                <p>
                    Copyright 2008 - 2024. All Rights Reserved
                </p>
            </div>
        </footer>
    </div>


    <script>
        let currentSlide = 0;
        const slides = document.querySelectorAll('.carousel-item');
        const indicators = document.querySelectorAll('.carousel-indicator');

        function showSlide(index) {
            slides.forEach((slide, i) => {
                slide.classList.toggle('active', i === index);
            });
            indicators.forEach((indicator, i) => {
                indicator.classList.toggle('active', i === index);
            });
        }

        function nextSlide() {
            currentSlide = (currentSlide + 1) % slides.length;
            showSlide(currentSlide);
        }

        function prevSlide() {
            currentSlide = (currentSlide - 1 + slides.length) % slides.length;
            showSlide(currentSlide);
        }

        indicators.forEach((indicator) => {
            indicator.addEventListener('click', (e) => {
                const slideIndex = parseInt(e.target.getAttribute('data-slide'));
                currentSlide = slideIndex;
                showSlide(currentSlide);
            });
        });

        // Auto slide every 8 seconds
        setInterval(nextSlide, 8000);

        // slide halaman
        const apiUrl = 'https://jsonplaceholder.typicode.com/photos';
        const productsPerPage = 15; // Number of products per page
        let currentPage = 1; // The current page
        let products = []; // Store products data

        // Fetch data from the API
        async function fetchProducts() {
            const response = await fetch(apiUrl);
            const data = await response.json();
            products = data; // Store products data to avoid multiple API calls
        }

        // Function to render products for the current page
        function renderProducts() {
            const start = (currentPage - 1) * productsPerPage;
            const end = start + productsPerPage;
            const currentProducts = products.slice(start, end);

            const productContainer = document.getElementById('product-container');
            productContainer.innerHTML = currentProducts
                .map(
                    (product) => `
            <div class="w-full h-32 bg-gray-300 rounded-lg">
                <img alt="${product.title}" class="w-full h-full object-cover rounded-lg" src="${product.url}" />
            </div>
        `
                )
                .join('');
        }

        // Function to render pagination buttons
        function renderPagination() {
            const totalPages = Math.ceil(products.length / productsPerPage);
            const paginationButtons = document.getElementById('pagination-buttons');

            // Limit the number of visible pagination buttons (e.g., 3 pages at a time)
            const range = 1; // Show only 1 page before and after the current page
            const startPage = Math.max(1, currentPage - range);
            const endPage = Math.min(totalPages, currentPage + range);

            let buttonsHtml = '';

            // First button and ellipsis if needed
            if (startPage > 1) {
                buttonsHtml += `<button class="px-3 py-1 border" data-page="1">1</button>`;
                if (startPage > 2) {
                    buttonsHtml += `<span class="px-3 py-1">...</span>`;
                }
            }

            // Pages around the current page
            for (let i = startPage; i <= endPage; i++) {
                buttonsHtml += `
            <button class="px-3 py-1 border ${i === currentPage ? 'bg-black text-white' : ''}" data-page="${i}">
                ${i}
            </button>
        `;
            }

            // Last page button and ellipsis if needed
            if (endPage < totalPages) {
                if (endPage < totalPages - 1) {
                    buttonsHtml += `<span class="px-3 py-1">...</span>`;
                }
                buttonsHtml += `<button class="px-3 py-1 border" data-page="${totalPages}">${totalPages}</button>`;
            }

            paginationButtons.innerHTML = buttonsHtml;

            // Event listener for page buttons
            document.querySelectorAll('#pagination-buttons button[data-page]').forEach((button) => {
                button.addEventListener('click', (e) => {
                    currentPage = Number(e.target.dataset.page);
                    renderProducts();
                    renderPagination();
                });
            });
        }

        // Event listener for Next and Previous buttons
        document.getElementById('prev-button').addEventListener('click', () => {
            if (currentPage > 1) {
                currentPage--; // Go to the previous page
                renderProducts();
                renderPagination();
            }
        });

        document.getElementById('next-button').addEventListener('click', () => {
            const totalPages = Math.ceil(products.length / productsPerPage);
            if (currentPage < totalPages) {
                currentPage++; // Go to the next page
                renderProducts();
                renderPagination();
            }
        });

        // Initialize the page
        async function initializePage() {
            await fetchProducts(); // Wait for the data to be fetched
            renderProducts();
            renderPagination();
        }

        initializePage(); // Initialize the page
    </script>
</body>

</html>