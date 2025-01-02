<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>Hexon Parts</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet" />
</head>

<body class="bg-white text-black">
    <header class="p-4 border-b border-gray-300">
        <div class="flex items-center justify-between">
            <img alt="Hexon Parts logo" class="h-12" height="50" src="https://storage.googleapis.com/a1aa/image/Yprl59Y7c5o7Ph6WVC2ehOYrbeK0hLA0pcuHXIUfXWKzbkePB.jpg" width="100" />
            <div class="flex items-center w-1/2">
                <input class="w-full p-2 border border-black rounded-l-md" placeholder="cari barang" type="text" />
                <button class="p-2 border border-black rounded-r-md bg-white">
                    <i class="fas fa-search"></i>
                </button>
            </div>
            <nav class="hidden md:flex items-center space-x-4">
                <a class="text-lg" href="/user/Home">Home</a>
                <a class="text-lg" href="#">Kategori</a>
                <a class="text-lg" href="/user/Order">Keranjang</a>
                <a class="text-lg" href="#"><i class="fas fa-user"></i></a>
            </nav>
            <button id="menu-button" class="md:hidden flex items-center px-3 py-2 border rounded text-gray-800 border-gray-800 hover:text-blue-500 hover:border-blue-500">
                <svg class="fill-current h-3 w-3" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                    <title>Menu</title>
                    <path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z"></path>
                </svg>
            </button>
        </div>
        <div id="mobile-menu" class="hidden md:hidden flex flex-col items-center space-y-4 mt-4 w-full">
            <a class="text-gray-800 hover:text-blue-500 border border-black w-full text-center py-2" href="/user/Home">Home</a>
            <a class="text-gray-800 hover:text-blue-500 border border-black w-full text-center py-2" href="#">Kategori</a>
            <a class="text-gray-800 hover:text-blue-500 border border-black w-full text-center py-2" href="/user/Order">Keranjang</a>
            <a class="text-gray-800 hover:text-blue-500 border border-black w-full text-center py-2" href="#"><i class="fas fa-user"></i></a>
        </div>
    </header>
    <div class="p-4">
        <a class="text-xl" href="/user/Home"><i class="fas fa-arrow-left"></i> Kembali</a>
    </div>
    <main class="p-4">
        <div id="product-container" class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
            <!-- Product items will be injected here by JavaScript -->
        </div>
        <!-- Pagination -->
        <div class="flex justify-center items-center mt-10 space-x-1">
            <button id="prev-button" class="px-3 py-1 border">Previous</button>
            <span id="pagination-buttons" class="flex space-x-1"></span>
            <button id="next-button" class="px-3 py-1 border">Next</button>
        </div>
    </main>
    <footer class="bg-white py-8 border-t border-gray-200 mt-8">
        <div class="container mx-auto px-4">
            <div class="flex justify-between">
                <div class="flex space-x-4">
                    <a href="#" class="text-black"><i class="fab fa-facebook-f"></i></a>
                    <a href="#" class="text-black"><i class="fab fa-twitter"></i></a>
                    <a href="#" class="text-black"><i class="fab fa-instagram"></i></a>
                    <a href="#" class="text-black"><i class="fab fa-linkedin-in"></i></a>
                </div>
                <div class="flex space-x-16">
                    <div>
                        <h3 class="font-semibold mb-2">Use cases</h3>
                        <ul>
                            <li><a href="#" class="text-black">UI design</a></li>
                            <li><a href="#" class="text-black">UX design</a></li>
                            <li><a href="#" class="text-black">Wireframing</a></li>
                            <li><a href="#" class="text-black">Diagramming</a></li>
                        </ul>
                    </div>
                    <div>
                        <h3 class="font-semibold mb-2">Explore</h3>
                        <ul>
                            <li><a href="#" class="text-black">Design</a></li>
                            <li><a href="#" class="text-black">Prototyping</a></li>
                            <li><a href="#" class="text-black">Development features</a></li>
                            <li><a href="#" class="text-black">Design systems</a></li>
                        </ul>
                    </div>
                    <div>
                        <h3 class="font-semibold mb-2">Resources</h3>
                        <ul>
                            <li><a href="#" class="text-black">Blog</a></li>
                            <li><a href="#" class="text-black">Best practices</a></li>
                            <li><a href="#" class="text-black">Colors</a></li>
                            <li><a href="#" class="text-black">Color wheel</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <script>
        const apiUrl = 'https://jsonplaceholder.typicode.com/photos';
        const productsPerPage = 9; // Number of products per page
        let currentPage = 1; // The current page
        let products = []; // Store products data

        // Fetch data from the API
        async function fetchProducts() {
            try {
                const response = await fetch(apiUrl);
                const data = await response.json();
                products = data; // Store products data to avoid multiple API calls
                console.log('Products fetched:', products); // Debug log
            } catch (error) {
                console.error('Error fetching products:', error);
            }
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
        <div class="w-full h-64 bg-gray-300 rounded-lg">
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

        // Toggle mobile menu
        document.getElementById('menu-button').addEventListener('click', function() {
            var menu = document.getElementById('mobile-menu');
            if (menu.classList.contains('hidden')) {
                menu.classList.remove('hidden');
            } else {
                menu.classList.add('hidden');
            }
        });
    </script>
</body>

</html>