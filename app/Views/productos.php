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
            <label for="country" class="block text-sm font-medium leading-6 text-gray-900">Estatus</label>
            <div class="mt-2">
              <select id="country" name="country" autocomplete="country-name"
                class="block w-full rounded-md border-0 py-1.5 p-2 h-9 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset">
                <option>Habilitado</option>
                <option>Inabilitado</option>
              </select>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="mt-6 flex items-center justify-end gap-x-6">
      <button type="button" class="text-sm font-semibold leading-6 text-gray-900">Cancelar</button>
      <button type="submit"
        class="rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Guardar</button>
    </div>
  </form>

</body>

</html>