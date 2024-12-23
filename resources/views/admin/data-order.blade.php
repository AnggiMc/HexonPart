<html lang="en">
 <head>
  <meta charset="utf-8"/>
  <meta content="width=device-width, initial-scale=1.0" name="viewport"/>
  <title>
   Data Order
  </title>
  <script src="https://cdn.tailwindcss.com">
  </script>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet"/>
 </head>
 <body class="bg-gray-100">
  <div class="flex min-h-screen">
    <!-- Sidebar -->
    <x-admin-sidebar>
    </x-admin-sidebar>
   <!-- Main Content -->
   <div class="flex-1 p-8 ml-64">
    <div class="flex items-center justify-between mb-6">
     <h1 class="text-2xl font-semibold">
      Data Order
     </h1>
     <div class="flex items-center">
      <input class="border border-gray-300 rounded-l px-4 py-2" placeholder="Cari Barang" name="cari-order" id="cari-order" type="text"/>
      <button class="bg-purple-500 text-white px-4 py-2 rounded-r">
       <i class="fas fa-search">
       </i>
      </button>
      <select class="ml-4 border border-gray-300 rounded px-4 py-2">
       <option>
        Title
       </option>
      </select>
     </div>
    </div>
    <div class="space-y-4">
     <div class="bg-white p-4 rounded shadow flex items-center justify-between">
      <div class="flex items-center">
       <img alt="Product image placeholder" class="w-24 h-24 mr-4" height="100" src="https://placehold.co/100x100" width="100"/>
       <div>
        <h2 class="text-xl font-semibold">
         AKI
        </h2>
        <p>
         Detail Produk
        </p>
       </div>
      </div>
      <button class="bg-blue-500 text-white px-4 py-2 rounded">
       Detail
      </button>
     </div>
     <div class="bg-white p-4 rounded shadow flex items-center justify-between">
      <div class="flex items-center">
       <img alt="Product image placeholder" class="w-24 h-24 mr-4" height="100" src="https://placehold.co/100x100" width="100"/>
       <div>
        <h2 class="text-xl font-semibold">
         Title
        </h2>
        <p>
         Body text for whatever you'd like to say. Add main takeaway points, quotes, anecdotes, or even a very very short story.
        </p>
       </div>
      </div>
      <button class="bg-blue-500 text-white px-4 py-2 rounded">
       Detail
      </button>
     </div>
     <div class="bg-white p-4 rounded shadow flex items-center justify-between">
      <div class="flex items-center">
       <img alt="Product image placeholder" class="w-24 h-24 mr-4" height="100" src="https://placehold.co/100x100" width="100"/>
       <div>
        <h2 class="text-xl font-semibold">
         Title
        </h2>
        <p>
         Body text for whatever you'd like to say. Add main takeaway points, quotes, anecdotes, or even a very very short story.
        </p>
       </div>
      </div>
      <button class="bg-blue-500 text-white px-4 py-2 rounded">
       Detail
      </button>
     </div>
    </div>
    <!-- Sidebar -->
    <x-admin-footer>
    </x-admin-footer>
   </div>
  </div>
 </body>
</html>