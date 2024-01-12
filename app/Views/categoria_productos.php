<form>
  <div class="space-y-12">
    <div class="space-y-2">
      <h2 class="text-base font-semibold leading-7 text-gray-900">Categoria de producto</h2>
      <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">

        <div class="sm:col-span-2 sm:col-start-1">
          <label for="city" class="block text-sm font-medium leading-6 text-gray-900">Nombre</label>
          <div class="mt-2">
            <input type="text" name="city" id="city" autocomplete="address-level2"
              class="block w-full rounded-md border-0 py-1.5 p-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-1 focus:ring-inset">
          </div>
        </div>

        <div class="sm:col-span-2">
          <label for="region" class="block text-sm font-medium leading-6 text-gray-900">Descripción</label>
          <div class="mt-2">
            <input type="text" name="region" id="region" autocomplete="address-level1"
              class="block w-full rounded-md border-0 py-1.5 p-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-1 focus:ring-inset">
          </div>
        </div>

        <div class="sm:col-span-2">
          <label for="country" class="block text-sm font-medium leading-6 text-gray-900">Estatus</label>
          <div class="mt-2">
            <select id="country" name="country" autocomplete="country-name"
              class="block w-full rounded-md border-0 py-1.5 p-2 h-9 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset">
              <option>Habilitado</option>
              <option>Inabilitado</option>
            </select>
          </div>
        </div>

        <div class="sm:col-span-6">
          <div class="mt-6 flex items-center justify-end gap-x-6">
            <button type="button"
              class="rounded-md bg-red-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-red-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-red-600">
              Cancelar
            </button>
            <button type="submit"
              class="rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:gray-indigo-600">
              Guardar</button>
          </div>
        </div>
      </div>
    </div>
</form>

<div class="space-y-12">
  <div class="space-y-2">
    <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
      <div class="sm:col-span-6">
        <div class="flex justify-between">
          <h2 class="text-base font-semibold leading-7 text-gray-900 mb-2">Listado de producto</h2>
          <form action="" class="flex items-center mb-4">
            <div class="relative w-full mr-2">
              <input type="text"
                class="py-2 pr-4 pl-10 bg-gray-50 w-full outline-none border border-gray-100 rounded-md text-sm focus:border-blue-500"
                placeholder="Busqueda">
              <i class="ri-search-line absolute top-1/2 left-4 -translate-y-1/2 text-gray-400"></i>
            </div>
          </form>
        </div>
        <div class="overflow-x-auto">
          <?= $tablaHTML; ?>
        </div>
      </div>
    </div>
  </div>
</div>