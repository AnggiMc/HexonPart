<div class="bg-blue-800 text-white w-64 min-h-screen p-4">
    <div class="flex flex-col items-center">
     <div class="bg-white rounded-full p-4 mb-4">
      <img alt="User profile picture" class="rounded-full" height="100" src="https://storage.googleapis.com/a1aa/image/NeueL7eUxxf6QREgJdyEjvfu8e77o25XGNGJMaSCaymIbn0fJA.jpg" width="100"/>
     </div>
     <div class="text-center mb-4">
      <h2 class="text-lg font-bold">Nama Admin</h2>
      <p class="text-sm">Role admin</p>
     </div>
    </div>
    <nav>
        <ul>
            <li class="mb-2">
                <a class="flex items-center p-2 hover:bg-blue-700 rounded" href="/admin/dashboard">
                    <i class="fas fa-th-large mr-2"></i>Dashboard
                </a>
            </li>
            <li class="mb-2 relative dropdown">
                <button class="flex items-center p-2 hover:bg-blue-700 rounded w-full" onclick="toggleDropdown(this)">
                    <i class="fas fa-box mr-2"></i>
                    Products
                    <i class="fas fa-caret-down ml-auto"></i>
                </button>
                <ul class="dropdown-menu bg-blue-800 text-white rounded shadow-lg mt-1">
                        <li class="mb-1">
                            <a class="flex items-center p-2 hover:bg-blue-700 rounded" href="/admin/data-produk">
                                <i class="fas fa-database mr-2"></i>
                                Data Product
                            </a>
                        </li>
                    <li>
                        <a class="flex items-center p-2 hover:bg-blue-700 rounded" href="/admin/tambah-produk">
                            <i class="fas fa-plus-square mr-2"></i>
                            Add Product
                        </a>
                    </li>
                </ul>
            </li>
            <li class="mb-2 relative dropdown">
                <button class="flex items-center p-2 hover:bg-blue-700 rounded w-full" onclick="toggleDropdown(this)">
                    <i class="fas fa-users mr-2"></i>
                    Users
                    <i class="fas fa-caret-down ml-auto"></i>
                </button>
                <ul class="dropdown-menu bg-blue-800 text-white rounded shadow-lg mt-1">
                    <li class="mb-1">
                        <a class="flex items-center p-2 hover:bg-blue-700 rounded" href="/admin/data-user">
                            <i class="fas fa-user mr-2"></i>
                            Data Users
                        </a>
                    </li>
                    <li>
                        <a class="flex items-center p-2 hover:bg-blue-700 rounded" href="/admin/tambah-user">
                            <i class="fas fa-user-plus mr-2"></i>
                            Add Users
                        </a>
                    </li>
                </ul>
            </li>
            <li class="mb-2 relative dropdown">
                <button class="flex items-center p-2 hover:bg-blue-700 rounded w-full" onclick="toggleDropdown(this)">
                    <i class="fas fa-layer-group mr-2"></i>
                    Categories
                    <i class="fas fa-caret-down ml-auto"></i>
                </button>
                <ul class="dropdown-menu bg-blue-800 text-white rounded shadow-lg mt-1">
                    <li class="mb-1">
                        <a class="flex items-center p-2 hover:bg-blue-700 rounded" href="/admin/category">
                            <i class="fas fa-folder mr-2"></i>
                            Data Categories
                        </a>
                    </li>
                    <li>
                        <a class="flex items-center p-2 hover:bg-blue-700 rounded" href="/admin/tambah-category">
                            <i class="fas fa-folder-plus mr-2"></i>
                            Add Categories
                        </a>
                    </li>
                </ul>
            </li>
            <li class="mb-2 relative dropdown">
                <button class="flex items-center p-2 hover:bg-blue-700 rounded w-full" onclick="toggleDropdown(this)">
                    <i class="fas fa-tags mr-2"></i>
                    Brands
                    <i class="fas fa-caret-down ml-auto"></i>
                </button>
                <ul class="dropdown-menu bg-blue-800 text-white rounded shadow-lg mt-1">
                    <li class="mb-1">
                        <a class="flex items-center p-2 hover:bg-blue-700 rounded" href="/admin/brand">
                            <i class="fas fa-tag mr-2"></i>
                            Data Brand
                        </a>
                    </li>
                    <li>
                        <a class="flex items-center p-2 hover:bg-blue-700 rounded" href="/admin/tambah-brand">
                            <i class="fas fa-plus-square mr-2"></i>
                            Add Brand
                        </a>
                    </li>
                </ul>
            </li>
            <li class="mb-2">
                <a class="flex items-center p-2 hover:bg-blue-700 rounded" href="/admin/order">
                    <i class="fas fa-shopping-cart mr-2"></i>
                    Orders
                </a>
            </li>
            <li class="mb-2">
                <a class="flex items-center p-2 hover:bg-blue-700 rounded" href="/admin/kupon">
                    <i class="fas fa-gift mr-2"></i>
                    Coupons
                </a>
            </li>
            <li class="mb-2 relative dropdown">
                <button class="flex items-center p-2 hover:bg-blue-700 rounded w-full" onclick="toggleDropdown(this)">
                    <i class="fas fa-wallet mr-2"></i>
                    Payments
                    <i class="fas fa-caret-down ml-auto"></i>
                </button>
                <ul class="dropdown-menu bg-blue-800 text-white rounded shadow-lg mt-1">
                    <li class="mb-1">
                        <a class="flex items-center p-2 hover:bg-blue-700 rounded" href="/admin/payment">
                            <i class="fas fa-credit-card mr-2"></i>
                            Data Payments
                        </a>
                    </li>
                    <li>
                        <a class="flex items-center p-2 hover:bg-blue-700 rounded" href="/admin/tambah-payment">
                            <i class="fas fa-money-bill mr-2"></i>
                            Add Payments
                        </a>
                    </li>
                </ul>
            </li>
            <li class="mb-2">
                <a class="flex items-center p-2 hover:bg-blue-700 rounded" href="/admin/setting">
                    <i class="fas fa-cog mr-2"></i>
                    Setting
                </a>
            </li>
            <li class="mb-2">
                <a class="flex items-center p-2 hover:bg-blue-700 rounded" href="/admin/profile">
                    <i class="fas fa-id-badge mr-2"></i>
                    Profile
                </a>
            </li>
            <li>
                <a class="flex items-center p-2 hover:bg-blue-700 rounded" href="/auth/Login">
                    <i class="fas fa-sign-out-alt mr-2"></i>
                    Logout
                </a>
            </li>
        </ul>
    </nav>
</div>