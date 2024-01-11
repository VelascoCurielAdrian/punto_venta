<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link href="https://cdn.jsdelivr.net/npm/remixicon@4.0.0/fonts/remixicon.css" rel="stylesheet" />
  <link rel="stylesheet" href="css/output.css">
</head>


<body class="text-gray-800 font-inter">

  <!-- Inicio: Sidebar -->
  <div class="fixed left-0 top-0 w-64 h-full bg-gray-900 p-4 z-50 sidebar-menu transition-transform">
    <a href="coppel" class="flex items-center justify-center pb-4 border-b border-b-gray-800">
      <img src="https://www.coppel.com/images/emarketing/logo.svg" alt="" class="w-auto h-10 rounded object-cover">
    </a>
    <ul class="mt-4">
      <li class="mb-1 group active">
        <a href="categoriaProductos"
          class="flex items-center py-2 px-4 text-gray-300 hover:bg-gray-950 hover:text-gray-100 rounded-md group-[.active]:bg-gray-800 group-[.active]:text-white">
          <i class="ri-store-2-line mr-3 text-lg"></i>
          <span class="text-sm">Categoria de productos</span>
        </a>
      </li>
      <li class="mb-1 group active">
        <a href="productos"
          class="flex items-center py-2 px-4 text-gray-300 hover:bg-gray-950 hover:text-gray-100 rounded-md group-[.active]:bg-gray-800 group-[.active]:text-white">
          <i class="ri-store-2-line mr-3 text-lg"></i>
          <span class="text-sm">Productos</span>
        </a>
      </li>
    </ul>
  </div>
  <div class="fixed top-0 left-0 w-full h-full bg-black/50 z-40 md:hidden sidebar-overlay"></div>
  <!-- Fin: Sidebar -->

  <!-- Incio de ain -->
  <?php include 'main.php'; ?>
  <!-- Finf de ain -->

  <script src="https://unpkg.com/@popperjs/core@2"></script>
  <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
  <script src="js/dashboard.js"></script>
</body>

</html>