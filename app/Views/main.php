<main class="w-full md:w-[calc(100%-256px)] md:ml-64 bg-gray-50 min-h-screen transition-all main">
  <div class="py-2 px-6 bg-white flex items-center shadow-md shadow-black/5">
    <button type="button" class="text-lg text-gray-600 sidebar-toggle">
      <i class="ri-menu-line"></i>
    </button>
    <ul class="flex items-center text-sm ml-4">
      <li class="text-gray-600 mr-2 font-medium">Crud punto de venta</li>
      <li class="text-gray-600 mr-2 font-medium">/</li>
      <li class="text-gray-600 mr-2 font-medium">
        <?= $ruta ?>
      </li>
    </ul>
    <ul class="ml-auto flex items-center">
      <li class="dropdown ml-3">
        <button type="button" class="dropdown-toggle flex items-center">
          <i class="ri-shield-user-line text-lg" class="rounded block object-cover align-middle"></i>
        </button>
        <ul
          class="dropdown-menu shadow-md shadow-black/5 z-30 hidden py-1.5 rounded-md bg-white border border-gray-100 w-full max-w-[140px]">
          <li>
            <a href="#"
              class="flex items-center text-[13px] py-1.5 px-4 text-gray-600 hover:text-blue-500 hover:bg-gray-50">Perfil</a>
          </li>
      </li>
    </ul>
  </div>
  <div class="py-6 px-8 bg-white min-h-screen">
    <?= $contenido ?>
  </div>
</main>