<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Coppel</title>
  <link href="https://cdn.jsdelivr.net/npm/remixicon@4.0.0/fonts/remixicon.css" rel="stylesheet" />
  <link rel="stylesheet" href="css/output.css">
  <link rel="stylesheet" href="https://cdn.datatables.net/1.13.7/css/jquery.dataTables.css" />

</head>


<body class="text-gray-800 font-inter">

  <!-- Inicio: Sidebar -->
  <div class="fixed left-0 top-0 w-64 h-full bg-gray-900 p-4 z-50 sidebar-menu transition-transform">
    <ul class="mt-4">
      <li class="mb-1 group active">
        <a href="coppel"
          class="flex items-center py-2 px-4 text-gray-300 hover:bg-gray-950 hover:text-gray-100 rounded-md group-[.active]:bg-gray-800 group-[.active]:text-white">
          <i class="ri-store-2-line mr-3 text-lg"></i>
          <span class="text-sm">Inicio</span>
        </a>
      </li>
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

  <!-- Incio de main -->
  <?php include 'main.php'; ?>
  <!-- Finf de main -->
  <script src="js/dashboard.js"></script>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.js"></script>
</body>

</html>