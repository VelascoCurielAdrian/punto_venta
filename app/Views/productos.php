<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Coppel</title>
</head>

<body>
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
            <label for="region" class="block text-sm font-medium leading-6 text-gray-900">Precio</label>
            <div class="mt-2">
              <input type="number" name="region" id="region" autocomplete="address-level1"
                class="block w-full rounded-md border-0 py-1.5 p-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-1 focus:ring-inset">
            </div>
          </div>

          <div class="sm:col-span-2">
            <label for="country" class="block text-sm font-medium leading-6 text-gray-900">Categoria</label>
            <div class="mt-2">
              <select id="country" name="country" autocomplete="country-name"
                class="block w-full rounded-md border-0 py-1.5 p-2 h-9 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset">
                <option>Habilitado</option>
                <option>Inabilitado</option>
              </select>
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
          <div class="sm: col-span-6">
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
          <div class="sm:col-span-6">
            <label for="country" class="block text-sm font-medium leading-6 text-gray-900">Listado</label>
            <div class="overflow-x-auto">
              <table class="w-full min-w-[540px]" data-tab-for="order" data-page="active">
                <thead>
                  <tr>
                    <th
                      class="text-[12px] uppercase tracking-wide font-medium text-gray-400 py-2 px-4 bg-gray-50 text-left rounded-tl-md rounded-bl-md">
                      Nombre</th>
                    <th
                      class="text-[12px] uppercase tracking-wide font-medium text-gray-400 py-2 px-4 bg-gray-50 text-left">
                      Descripción</th>
                    <th
                      class="text-[12px] uppercase tracking-wide font-medium text-gray-400 py-2 px-4 bg-gray-50 text-left">
                      Precio</th>
                    <th
                      class="text-[12px] uppercase tracking-wide font-medium text-gray-400 py-2 px-4 bg-gray-50 text-left rounded-tr-md rounded-br-md">
                      Categoria</th>
                    <th
                      class="text-[12px] uppercase tracking-wide font-medium text-gray-400 py-2 px-4 bg-gray-50 text-left rounded-tr-md rounded-br-md">
                      Estatus</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td class="py-2 px-4 border-b border-b-gray-50">
                      <div class="flex items-center">
                        <img src="https://placehold.co/32x32" alt="" class="w-8 h-8 rounded object-cover block">
                        <a href="#" class="text-gray-600 text-sm font-medium hover:text-blue-500 ml-2 truncate">Create
                          landing page</a>
                      </div>
                    </td>
                    <td class="py-2 px-4 border-b border-b-gray-50">
                      <span class="text-[13px] font-medium text-gray-400">3 days</span>
                    </td>
                    <td class="py-2 px-4 border-b border-b-gray-50">
                      <span class="text-[13px] font-medium text-gray-400">$56</span>
                    </td>
                    <td class="py-2 px-4 border-b border-b-gray-50">
                      <span
                        class="inline-block p-1 rounded bg-emerald-500/10 text-emerald-500 font-medium text-[12px] leading-none">In
                        progress</span>
                    </td>
                  </tr>
                  <tr>
                    <td class="py-2 px-4 border-b border-b-gray-50">
                      <div class="flex items-center">
                        <img src="https://placehold.co/32x32" alt="" class="w-8 h-8 rounded object-cover block">
                        <a href="#" class="text-gray-600 text-sm font-medium hover:text-blue-500 ml-2 truncate">Create
                          landing page</a>
                      </div>
                    </td>
                    <td class="py-2 px-4 border-b border-b-gray-50">
                      <span class="text-[13px] font-medium text-gray-400">3 days</span>
                    </td>
                    <td class="py-2 px-4 border-b border-b-gray-50">
                      <span class="text-[13px] font-medium text-gray-400">$56</span>
                    </td>
                    <td class="py-2 px-4 border-b border-b-gray-50">
                      <span
                        class="inline-block p-1 rounded bg-emerald-500/10 text-emerald-500 font-medium text-[12px] leading-none">In
                        progress</span>
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>

          </div>
        </div>
      </div>

  </form>

</body>

</html>