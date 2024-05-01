<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://cdn.tailwindcss.com?plugins=forms,typography,aspect-ratio,line-clamp,container-queries"></script>
    
    <link rel="stylesheet" href="https://rsms.me/inter/inter.css">
    <style>
        body{
            background-image: url('https://aulavirtualvrht.edu.pe/pluginfile.php/1/theme_space/sliderimage1/1713751701/Captura%20de%20Pantalla%202023-12-12%20a%20la%28s%29%2010.02.20.png'); /* Reemplaza 'ruta/de/tu/imagen.jpg' con la ruta de tu imagen */
            background-size: cover; /* Ajusta el tamaño del fondo */
            background-position: center;
        }
    </style>
</head>
<body>
    <section class="bg-black bg-opacity-20">
  <div class="flex flex-col items-center justify-center px-6 py-8 mx-auto md:h-screen lg:py-0">
      <a href="#" class="flex items-center mb-6 text-2xl font-semibold text-gray-900 dark:text-white">
      <img src="https://institutovrht.edu.pe/images/logo_2021.png" alt="">    
      </a>
      <div class="w-full bg-white rounded-lg shadow dark:border md:mt-0 sm:max-w-md xl:p-0 dark:bg-gray-800 dark:border-gray-700">
          <div class="p-6 space-y-4 md:space-y-6 sm:p-8">
              <h1 class="text-xl font-bold leading-tight tracking-tight text-gray-900 md:text-2xl dark:text-white">
                Ficha de Inscripcion 
              </h1>
              <form class="space-y-4 md:space-y-6" action="" method="POST">
                  <div>
                      <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nº Voucher</label>
                      <input value="P20242008" type="text" name="voucher" id="voucher" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required="">
                  </div>
                  <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Verificar</button>
              </form>
          </div>
      </div>
  </div>
</section>
</body>
</html>