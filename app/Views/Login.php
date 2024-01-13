<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Coppel</title>
  <link href="https://cdn.jsdelivr.net/npm/remixicon@4.0.0/fonts/remixicon.css" rel="stylesheet" />
  <link rel="stylesheet" href="css/output.css">
  <link rel="stylesheet" href="https://cdn.datatables.net/1.13.7/css/jquery.dataTables.css" />
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script
    src="https://cdn.jsdelivr.net/npm/gasparesganga-jquery-loading-overlay@2.1.7/dist/loadingoverlay.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>


<body class="text-gray-800 font-inter">
  <div class="flex min-h-full flex-col justify-center px-6 py-12 lg:px-8">
    <div class="sm:mx-auto sm:w-full sm:max-w-sm items-center">
      <div href="coppel" class="flex items-center h-full justify-center">
        <img src="https://aforecoppel.com/wp-content/themes/afore-coppel-theme/assets/svg/logo.svg" alt=""
          class="w-auto h-10 rounded object-cover">
      </div>
    </div>
    <div class="mt-10 sm:mx-auto sm:w-full sm:max-w-sm">
      <form class="space-y-6" action="#" method="POST">
        <div>
          <label for="usuario" class="block text-sm font-medium leading-6 text-gray-900">Usuario</label>
          <div class="mt-2">
            <input id="usuario" name="usuario" type="usuario" autocomplete="usuario" required
              class="block w-full rounded-md border-0 py-1.5 p-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-slate-600 sm:text-sm sm:leading-6">
          </div>
        </div>

        <div>
          <div class="flex items-center justify-between">
            <label for="password" class="block text-sm font-medium leading-6 text-gray-900">Contraseña</label>
          </div>
          <div class="mt-2">
            <input id="password" name="password" type="password" autocomplete="current-password" required
              class="block w-full rounded-md border-0 py-1.5 p-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-slate-600 sm:text-sm sm:leading-6">
          </div>
        </div>

        <div>
          <button type="submit"
            class="flex w-full justify-center rounded-md bg-slate-600 px-3 py-1.5 text-sm font-semibold leading-6 text-white shadow-sm hover:bg-slate-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-slate-600">Iniciar
            sesión</button>
        </div>
      </form>
    </div>
  </div>
  <script>
    document.addEventListener('DOMContentLoaded', function () {
      const form = document.querySelector('form');

      form.addEventListener('submit', function (event) {
        event.preventDefault();
        const usuario = document.getElementById('usuario').value;
        const password = document.getElementById('password').value;
        const apiUrl = 'http://localhost:8080/api/v1/login';

        $.LoadingOverlay("show", {
          background: "rgba(50, 50, 50, 0.5)",
          size: 8,
        });

        fetch(apiUrl, {
          method: 'POST',
          headers: {
            'Content-Type': 'application/json',
          },
          body: JSON.stringify({ usuario, password }),
        })
          .then(response => response.json())
          .then(response => {
            if (response.type === 'error') throw (response);

            localStorage.setItem('Coppel Afore', JSON.stringify(response.data));

            Swal.fire({
              title: 'Éxito!',
              text: response.message,
              icon: 'success',
              confirmButtonText: 'OK',
              confirmButtonColor: '#4DB6AC',
              customClass: {
                popup: 'custom-success-popup',
              },
            });
          })
          .catch(error => {
            Swal.fire({
              title: error.title,
              text: error.message,
              icon: 'error',
              confirmButtonText: 'OK'
            });
          }).finally(() => {
            $.LoadingOverlay("hide");
          });
      });
    });
  </script>
</body>

</html>