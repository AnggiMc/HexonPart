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
    <!-- Header -->
    <x-user-header>
    </x-user-header>
    <!-- Carousel -->
    <div class="flex justify-center items-center mt-10">
        <div class="relative w-full sm:w-3/4 h-48 bg-gray-300 rounded-lg overflow-hidden">
            <div class="carousel-item active">
                <img alt="Placeholder image of a carousel slide with a gray background"
                    class="w-full h-full object-cover rounded-lg" height="200"
                    src="https://storage.googleapis.com/a1aa/image/mee5gPdvfTBToo6EcDi7B0QE4GmqXzGw1zPRz3hWgeteZUMfE.jpg"
                    width="600" />
            </div>
            <div class="carousel-item">
                <img alt="Placeholder image of a carousel slide with a gray background"
                    class="w-full h-full object-cover rounded-lg" height="200"
                    src="https://picsum.photos/600/200?random" width="600" />
            </div>
            <div class="carousel-item">
                <img alt="Placeholder image of a carousel slide with a gray background"
                    class="w-full h-full object-cover rounded-lg" height="200"
                    src="https://www.w3schools.com/w3images/mountains.jpg" width="600" />
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
                <span class="carousel-indicator w-3 h-3 bg-black rounded-full mx-1 sm:cursor-pointer select-none"
                    data-slide="0"></span>
                <span
                    class="carousel-indicator w-3 h-3 bg-black rounded-full mx-1 sm:cursor-pointer select-none"></span>
                <span class="carousel-indicator w-3 h-3 bg-black rounded-full mx-1 sm:cursor-pointer select-none"
                    data-slide="2"></span>
            </div>
        </div>
    </div>
    <!-- Product Section -->
    <h2 class="mt-10 text-lg font-semibold">Produk Terbaru</h2>
    <div id="product-container" class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-5 gap-4 mt-4 mx-4">
    </div>

    <!-- Pagination -->
    <div class="flex justify-center items-center mt-10 space-x-1">
        <button id="prev-button" class="px-3 py-1 border">Previous</button>
        <span id="pagination-buttons" class="flex space-x-1"></span>
        <button id="next-button" class="px-3 py-1 border">Next</button>
    </div>

    <!-- Contact Us Section -->
    <x-user-footer>
    </x-user-footer>
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
        const productsPerPage = 20; // Number of products per page
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

        function filterProducts() {
            const searchInput = document.getElementById('search-input').value.toLowerCase();
            filteredProducts = products.filter(product => product.title.toLowerCase().includes(searchInput));
            currentPage = 1; // Reset to the first page
            renderProducts();
            renderPagination();
        }

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