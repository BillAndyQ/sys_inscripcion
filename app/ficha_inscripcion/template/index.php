<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ficha de Inscripción</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://cdn.tailwindcss.com?plugins=forms,typography,aspect-ratio,line-clamp,container-queries"></script>
    
    <link rel="stylesheet" href="https://rsms.me/inter/inter.css">

</head>
<body class="flex justify-center py-7">

<form>
  <div class="space-y-12 border px-10 py-7 border-gray-900/10">
  <div class="border-b border-gray-900/10 pb-7">
      <h1 class="text-xl font-bold leading-9 text-gray-900">Ficha de Inscripcion - Admisión 2024</h1>
      <p class="mt-1 text-lg leading-6 text-gray-600"></p>
      <p class="mt-4 text-lg font-semibold leading-6 text-gray-900">Datos Personales</p>

      <div class="mt-7 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
        <div class="sm:col-span-4">
          <label for="country" class="block text-sm font-medium leading-6 text-gray-900">Programa de estudios al que postula</label>
          <div class="mt-2">
            <select id="country" name="country" autocomplete="country-name" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:max-w-xs sm:text-sm sm:leading-6">
              <option>United States</option>
              <option>Canada</option>
              <option>Mexico</option>
            </select>
          </div>
        </div>
        <div class="sm:col-span-2">
          <label for="fecha" class="block text-sm font-medium leading-6 text-gray-900">Fecha</label>
          <div class="mt-2">
            <div class="flex rounded-md shadow-sm ring-1 ring-inset ring-gray-300 focus-within:ring-2 focus-within:ring-inset focus-within:ring-indigo-600 sm:max-w-md">
              <input type="date" value="<?php echo date('Y-m-d'); ?>" disabled name="fecha" id="fecha" autocomplete="username" class="block flex-1 ps-3 border-0 bg-transparent py-1.5 pl-1 text-gray-900 placeholder:text-gray-400 focus:ring-0 sm:text-sm sm:leading-6" placeholder="janesmith">
            </div>
          </div>
        </div>
        <!-- DATOS PERSONALES -->
        <div class="sm:col-span-3">
          <label for="username" class="block text-sm font-medium leading-6 text-gray-900">Apellido Paterno</label>
          <div class="mt-2">
            <div class="flex rounded-md shadow-sm ring-1 ring-inset ring-gray-300 focus-within:ring-2 focus-within:ring-inset focus-within:ring-indigo-600 sm:max-w-md">
              <input type="text" name="username" id="username" autocomplete="username" class="block flex-1 ps-3 border-0 bg-transparent py-1.5 pl-1 text-gray-900 placeholder:text-gray-400 focus:ring-0 sm:text-sm sm:leading-6" placeholder="janesmith">
            </div>
          </div>
        </div>
        <div class="sm:col-span-3">
          <label for="username" class="block text-sm font-medium leading-6 text-gray-900">Apellido Materno</label>
          <div class="mt-2">
            <div class="flex rounded-md shadow-sm ring-1 ring-inset ring-gray-300 focus-within:ring-2 focus-within:ring-inset focus-within:ring-indigo-600 sm:max-w-md">
              <input type="text" name="username" id="username" autocomplete="username" class="block flex-1 ps-3 border-0 bg-transparent py-1.5 pl-1 text-gray-900 placeholder:text-gray-400 focus:ring-0 sm:text-sm sm:leading-6" placeholder="janesmith">
            </div>
          </div>
        </div>
        <div class="sm:col-span-6">
          <label for="username" class="block text-sm font-medium leading-6 text-gray-900">Nombres</label>
          <div class="mt-2">
            <div class="flex rounded-md shadow-sm ring-1 ring-inset ring-gray-300 focus-within:ring-2 focus-within:ring-inset focus-within:ring-indigo-600 sm:max-w-md">
              <input type="text" name="username" id="username" autocomplete="username" class="block flex-1 ps-3 border-0 bg-transparent py-1.5 pl-1 text-gray-900 placeholder:text-gray-400 focus:ring-0 sm:text-sm sm:leading-6" placeholder="janesmith">
            </div>
          </div>
        </div>

        <div class="col-span-full">
          <label for="about" class="block text-sm font-medium leading-6 text-gray-900">Direccion</label>
          <div class="mt-2">
            <textarea id="about" name="about" rows="3" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"></textarea>
          </div>
          <p class="mt-3 text-sm leading-6 text-gray-600">Write a few sentences about yourself.</p>
        </div>
        <!-- FOTO -->
        <div class="col-span-full">
          <label for="cover-photo" class="block text-sm font-medium leading-6 text-gray-900">Suba su foto</label>
          <div class="mt-2 flex justify-center rounded-lg border border-dashed border-gray-900/25 px-6 py-10">
            <div class="text-center">
              <svg class="mx-auto h-12 w-12 text-gray-300" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true">
                <path fill-rule="evenodd" d="M1.5 6a2.25 2.25 0 012.25-2.25h16.5A2.25 2.25 0 0122.5 6v12a2.25 2.25 0 01-2.25 2.25H3.75A2.25 2.25 0 011.5 18V6zM3 16.06V18c0 .414.336.75.75.75h16.5A.75.75 0 0021 18v-1.94l-2.69-2.689a1.5 1.5 0 00-2.12 0l-.88.879.97.97a.75.75 0 11-1.06 1.06l-5.16-5.159a1.5 1.5 0 00-2.12 0L3 16.061zm10.125-7.81a1.125 1.125 0 112.25 0 1.125 1.125 0 01-2.25 0z" clip-rule="evenodd" />
              </svg>
              <div class="mt-4 flex text-sm leading-6 text-gray-600">
                <label for="file-upload" class="relative cursor-pointer rounded-md bg-white font-semibold text-indigo-600 focus-within:outline-none focus-within:ring-2 focus-within:ring-indigo-600 focus-within:ring-offset-2 hover:text-indigo-500">
                  <span>Upload a file</span>
                  <input id="file-upload" name="file-upload" type="file" class="sr-only">
                </label>
                <p class="pl-1">or drag and drop</p>
              </div>
              <p class="text-xs leading-5 text-gray-600">PNG, JPG, GIF up to 10MB</p>
            </div>
          </div>
        </div>
        <!-- DEPARTAMENTO -->
        <div class="sm:col-span-2">
          <label for="country" class="block text-sm font-medium leading-6 text-gray-900">Departamento</label>
          <div class="mt-2">
            <select id="departamento" name="departamento" autocomplete="departamento" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:max-w-xs sm:text-sm sm:leading-6">
            </select>
          </div>
        </div>
        <div class="sm:col-span-2">
          <label for="country" class="block text-sm font-medium leading-6 text-gray-900">Provincia</label>
          <div class="mt-2">
            <select id="provincia" name="provincia" autocomplete="provincia" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:max-w-xs sm:text-sm sm:leading-6">
     
            </select>
          </div>
        </div>

        <div class="sm:col-span-2">
          <label for="country" class="block text-sm font-medium leading-6 text-gray-900">Distrito</label>
          <div class="mt-2">
            <select id="country" name="country" autocomplete="country-name" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:max-w-xs sm:text-sm sm:leading-6">
     
            </select>
          </div>
        </div>

        <div class="sm:col-span-2">
          <label for="username" class="block text-sm font-medium leading-6 text-gray-900">Teléfono / Celular</label>
          <div class="mt-2">
            <div class="flex rounded-md shadow-sm ring-1 ring-inset ring-gray-300 focus-within:ring-2 focus-within:ring-inset focus-within:ring-indigo-600 sm:max-w-md">
              <input type="text" name="username" id="username" autocomplete="username" class="block flex-1 ps-3 border-0 bg-transparent py-1.5 pl-1 text-gray-900 placeholder:text-gray-400 focus:ring-0 sm:text-sm sm:leading-6" placeholder="janesmith">
            </div>
          </div>
        </div>

        <div class="sm:col-span-4">
          <label for="username" class="block text-sm font-medium leading-6 text-gray-900">Correo Electrónico</label>
          <div class="mt-2">
            <div class="flex rounded-md shadow-sm ring-1 ring-inset ring-gray-300 focus-within:ring-2 focus-within:ring-inset focus-within:ring-indigo-600 sm:max-w-md">
              <input type="text" name="username" id="username" autocomplete="username" class="block flex-1 ps-3 border-0 bg-transparent py-1.5 pl-1 text-gray-900 placeholder:text-gray-400 focus:ring-0 sm:text-sm sm:leading-6" placeholder="janesmith">
            </div>
          </div>
        </div>

        <!-- FECHA NACIMIENTO -->

        <div class="sm:col-span-2">
          <label for="fecha" class="block text-sm font-medium leading-6 text-gray-900">Fecha nacimiento</label>
          <div class="mt-2">
            <div class="flex rounded-md shadow-sm ring-1 ring-inset ring-gray-300 focus-within:ring-2 focus-within:ring-inset focus-within:ring-indigo-600 sm:max-w-md">
              <input type="date" name="fecha" id="fecha" autocomplete="username" class="block flex-1 ps-3 border-0 bg-transparent py-1.5 pl-1 text-gray-900 placeholder:text-gray-400 focus:ring-0 sm:text-sm sm:leading-6" placeholder="janesmith">
            </div>
          </div>
        </div>

        <div class="sm:col-span-2">
          <label for="username" class="block text-sm font-medium leading-6 text-gray-900">DNI</label>
          <div class="mt-2">
            <div class="flex rounded-md shadow-sm ring-1 ring-inset ring-gray-300 focus-within:ring-2 focus-within:ring-inset focus-within:ring-indigo-600 sm:max-w-md">
              <input type="text" name="username" id="username" autocomplete="username" class="block flex-1 ps-3 border-0 bg-transparent py-1.5 pl-1 text-gray-900 placeholder:text-gray-400 focus:ring-0 sm:text-sm sm:leading-6" placeholder="xxxxxxxx">
            </div>
          </div>
        </div> 

        <div class="sm:col-span-2">
          <label for="username" class="block text-sm font-medium leading-6 text-gray-900">Estado Civil</label>
          <div class="mt-2">
            <div class="flex rounded-md shadow-sm ring-1 ring-inset ring-gray-300 focus-within:ring-2 focus-within:ring-inset focus-within:ring-indigo-600 sm:max-w-md">
              <input type="text" name="username" id="username" autocomplete="username" class="block flex-1 ps-3 border-0 bg-transparent py-1.5 pl-1 text-gray-900 placeholder:text-gray-400 focus:ring-0 sm:text-sm sm:leading-6" placeholder="xxxxxxxx">
            </div>
          </div>
        </div>

        <div class="sm:col-span-2">
          <label for="username" class="block text-sm font-medium leading-6 text-gray-900">Edad</label>
          <div class="mt-2">
            <div class="flex rounded-md shadow-sm ring-1 ring-inset ring-gray-300 focus-within:ring-2 focus-within:ring-inset focus-within:ring-indigo-600 sm:max-w-md">
              <input type="text" name="username" id="username" autocomplete="username" class="block flex-1 ps-3 border-0 bg-transparent py-1.5 pl-1 text-gray-900 placeholder:text-gray-400 focus:ring-0 sm:text-sm sm:leading-6" placeholder="xxxxxxxx">
            </div>
          </div>
        </div>

        <div class="sm:col-span-4">
          <label for="username" class="block text-sm font-medium leading-6 text-gray-900">Profesion Ocupacion</label>
          <div class="mt-2">
            <div class="flex rounded-md shadow-sm ring-1 ring-inset ring-gray-300 focus-within:ring-2 focus-within:ring-inset focus-within:ring-indigo-600 sm:max-w-md">
              <input type="text" name="username" id="username" autocomplete="username" class="block flex-1 ps-3 border-0 bg-transparent py-1.5 pl-1 text-gray-900 placeholder:text-gray-400 focus:ring-0 sm:text-sm sm:leading-6" placeholder="xxxxxxxx">
            </div>
          </div>
        </div>
        
        <fieldset class="sm:col-span-2">
          <legend class="text-sm font-semibold leading-6 text-gray-900">Sexo</legend>
          <div class="mt-4 space-y-3">
            <div class="flex items-center gap-x-3">
              <input id="sexo" name="sexo" type="radio" class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-600">
              <label for="push-everything" class="block text-sm font-medium leading-6 text-gray-900">Masculino</label>
            </div>
            <div class="flex items-center gap-x-3">
              <input id="sexo" name="sexo" type="radio" class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-600">
              <label for="push-email" class="block text-sm font-medium leading-6 text-gray-900">Femenino</label>
            </div>
          </div>
        </fieldset>

        <div class="sm:col-span-6 h-1">
          <label for="username" class="block text-sm underline font-medium leading-6 text-gray-900">Lugar de nacimiento</label>
  
        </div>

        <div class="sm:col-span-2">
          <label for="country" class="block text-sm font-medium leading-6 text-gray-900">Distrito</label>
          <div class="mt-2">
            <select id="country" name="country" autocomplete="country-name" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:max-w-xs sm:text-sm sm:leading-6">
              <option>Lima</option>
              <option>Canada</option>
              <option>Mexico</option>
            </select>
          </div>
        </div>

        <div class="sm:col-span-2">
          <label for="country" class="block text-sm font-medium leading-6 text-gray-900">Provincia</label>
          <div class="mt-2">
            <select id="country" name="country" autocomplete="country-name" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:max-w-xs sm:text-sm sm:leading-6">
              <option>Lima</option>
              <option>Canada</option>
              <option>Mexico</option>
            </select>
          </div>
        </div>

        <div class="sm:col-span-2">
          <label for="country" class="block text-sm font-medium leading-6 text-gray-900">Departamento</label>
          <div class="mt-2">
            <select id="country" name="country" autocomplete="country-name" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:max-w-xs sm:text-sm sm:leading-6">
              <option>Lima</option>
              <option>Canada</option>
              <option>Mexico</option>
            </select>
          </div>
        </div>

      </div>
    </div>

    <div class="border-b border-gray-900/10 pb-7">
      <h1 class="text-xl font-bold leading-9 text-gray-900">Datos del centro Educativo de procedencia</h1>
      <div class="mt-7 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
        <div class="sm:col-span-4">
          <label for="username" class="block text-sm font-medium leading-6 text-gray-900">Nombre de la I.E.</label>
          <div class="mt-2">
            <div class="flex rounded-md shadow-sm ring-1 ring-inset ring-gray-300 focus-within:ring-2 focus-within:ring-inset focus-within:ring-indigo-600 sm:max-w-md">
              <input type="text" name="username" id="username" autocomplete="username" class="block ps-3 flex-1 border-0 bg-transparent py-1.5 pl-1 text-gray-900 placeholder:text-gray-400 focus:ring-0 sm:text-sm sm:leading-6" placeholder="janesmith">
            </div>
          </div>
        </div>


        <div class="sm:col-span-6 h-1">
          <label for="username" class="block text-sm underline font-medium leading-6 text-gray-900">Ubicación de la institución educativa</label>
        </div>

        <div class="sm:col-span-2">
          <label for="country" class="block text-sm font-medium leading-6 text-gray-900">Distrito</label>
          <div class="mt-2">
            <select id="country" name="country" autocomplete="country-name" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:max-w-xs sm:text-sm sm:leading-6">
              <option>Lima</option>
              <option>Canada</option>
              <option>Mexico</option>
            </select>
          </div>
        </div>

        <div class="sm:col-span-2">
          <label for="country" class="block text-sm font-medium leading-6 text-gray-900">Provincia</label>
          <div class="mt-2">
            <select id="country" name="country" autocomplete="country-name" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:max-w-xs sm:text-sm sm:leading-6">
              <option>Lima</option>
              <option>Canada</option>
              <option>Mexico</option>
            </select>
          </div>
        </div>

        <div class="sm:col-span-2">
          <label for="country" class="block text-sm font-medium leading-6 text-gray-900">Departamento</label>
          <div class="mt-2">
            <select id="country" name="country" autocomplete="country-name" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:max-w-xs sm:text-sm sm:leading-6">
              <option>Lima</option>
              <option>Canada</option>
              <option>Mexico</option>
            </select>
          </div>
        </div>

        <fieldset class="sm:col-span-2">
          <legend class="text-sm font-semibold leading-6 text-gray-900">Tipo de institucion educativa</legend>
          <div class="mt-4 space-y-3">
            <div class="flex items-center gap-x-3">
              <input id="push-everything" name="push-notifications" type="radio" class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-600">
              <label for="push-everything" class="block text-sm font-medium leading-6 text-gray-900">Estatal</label>
            </div>
            <div class="flex items-center gap-x-3">
              <input id="push-email" name="push-notifications" type="radio" class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-600">
              <label for="push-email" class="block text-sm font-medium leading-6 text-gray-900">Particular</label>
            </div>
            <div class="flex items-center gap-x-3">
              <input id="push-email" name="push-notifications" type="radio" class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-600">
              <label for="push-email" class="block text-sm font-medium leading-6 text-gray-900">EBR</label>
            </div>
            <div class="flex items-center gap-x-3">
              <input id="push-email" name="push-notifications" type="radio" class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-600">
              <label for="push-email" class="block text-sm font-medium leading-6 text-gray-900">CEBA</label>
            </div>
          </div>
        </fieldset>

        <div class="sm:col-span-2">
          <label for="username" class="block text-sm font-medium leading-6 text-gray-900">Año de egreso</label>
          <div class="mt-2">
            <div class="flex rounded-md shadow-sm ring-1 ring-inset ring-gray-300 focus-within:ring-2 focus-within:ring-inset focus-within:ring-indigo-600 sm:max-w-md">
              <input type="text" name="username" id="username" autocomplete="username" class="block flex-1 ps-3 border-0 bg-transparent py-1.5 pl-1 text-gray-900 placeholder:text-gray-400 focus:ring-0 sm:text-sm sm:leading-6" placeholder="2023">
            </div>
          </div>
        </div>
        
        <div class="sm:col-span-2">
          <label for="country" class="block text-sm font-medium leading-6 text-gray-900">Turno</label>
          <div class="mt-2">
            <select id="country" name="country" autocomplete="country-name" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:max-w-xs sm:text-sm sm:leading-6">
              <option>Mañana</option>
              <option>Tarde</option>
              <option>Noche</option>
            </select>
          </div>
        </div>
      </div>
    </div>

    <div class="border-b border-gray-900/10 pb-12">
      <h2 class="text-xl font-bold leading-9 text-gray-900">Preparación Pre-Universitaria</h2>

 
      <fieldset class="sm:col-span-2">
          <legend class="text-sm font-semibold leading-6 text-gray-900">Tipo de institucion educativa</legend>
          <div class="mt-4 space-y-3">
            <div class="flex items-center gap-x-3">
              <input id="tipo_institucion" name="tipo_institucion" type="radio" class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-600">
              <label for="push-everything" class="block text-sm font-medium leading-6 text-gray-900">Estatal</label>
            </div>
            <div class="flex items-center gap-x-3">
              <input id="tipo_institucion" name="tipo_institucion" type="radio" class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-600">
              <label for="push-email" class="block text-sm font-medium leading-6 text-gray-900">Particular</label>
            </div>
            <div class="flex items-center gap-x-3">
              <input id="tipo_institucion" name="tipo_institucion" type="radio" class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-600">
              <label for="push-email" class="block text-sm font-medium leading-6 text-gray-900">EBR</label>
            </div>
            <div class="flex items-center gap-x-3">
              <input id="tipo_institucion" name="tipo_institucion" type="radio" class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-600">
              <label for="push-email" class="block text-sm font-medium leading-6 text-gray-900">CEBA</label>
            </div>
          </div>
        </fieldset>

    </div>

    <div class="border-b border-gray-900/10 pb-12">
      <h2 class="text-xl font-bold leading-9 text-gray-900">Datos adicionales del postulante</h2>
      
        <div class="sm:col-span-4">
          <label for="username" class="block text-sm font-medium leading-6 text-gray-900">Centro de labores</label>
          <div class="mt-2">
            <div class="flex rounded-md shadow-sm ring-1 ring-inset ring-gray-300 focus-within:ring-2 focus-within:ring-inset focus-within:ring-indigo-600 sm:max-w-md">
              <input type="text" name="username" id="username" autocomplete="username" class="block ps-3 flex-1 border-0 bg-transparent py-1.5 pl-1 text-gray-900 placeholder:text-gray-400 focus:ring-0 sm:text-sm sm:leading-6" placeholder="janesmith">
            </div>
          </div>
        </div>
        <div class="sm:col-span-2">
          <label for="turno_labor" class="block text-sm font-medium leading-6 text-gray-900">Turno</label>
          <div class="mt-2">
            <select id="turno_labor" name="turno_labor" autocomplete="turno_labor" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:max-w-xs sm:text-sm sm:leading-6">
              <option>Mañana</option>
              <option>Tarde</option>
              <option>Noche</option>
            </select>
          </div>
        </div>

        <div class="col-span-full">
          <label for="about" class="block text-sm font-medium leading-6 text-gray-900">Direccion</label>
          <div class="mt-2">
            <textarea id="about" name="about" rows="3" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"></textarea>
          </div>
        </div>
     
      </div>
      <div class="mt-6 flex items-center justify-end gap-x-6">
        <button type="button" class="text-sm font-semibold leading-6 text-gray-900">Cancel</button>
        <button type="submit" class="rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Save</button>
    </div>

    </div>
      </div>
    </div>
  </div>
</form>
<script>
  let jsonData; // Declara una variable para almacenar los datos JSON

  fetch('https://raw.githubusercontent.com/jmcastagnetto/ubigeo-peru-aumentado/main/ubigeo_ccpp.json')
    .then(response => {
      // Verificar si la solicitud fue exitosa (código de estado 200)
      if (!response.ok) {
        throw new Error('Error al cargar el JSON');
      }
      // Parsear el JSON y almacenarlo en la variable
      return response.json();
    })
    .then(data => {
      console.log(data[0]['departamento']);
      const departamentosUnicos = {};
      // Iterar sobre cada objeto en el JSON
      data.forEach(objeto => {
        // Extraer el valor de la columna "Departamento" de cada objeto
        const departamento = objeto['departamento'];
        // Agregar el departamento al objeto solo si aún no está presente
        if (!departamentosUnicos[departamento]) {
          departamentosUnicos[departamento] = true;
        }
      });

      // Extraer los nombres de los departamentos únicos del objeto
      const departamentosArray = Object.keys(departamentosUnicos);
      console.log('Departamentos únicos:', departamentosArray);
      // Obtener el elemento select por su ID
      var inputDepartamento = document.getElementById("departamento");

      departamentosArray.forEach(item => {
        var option = document.createElement("option");
        option.text = item;

        inputDepartamento.add(option);
      });

    })
    .catch(error => {
      // Capturar y manejar errores
      console.error('Error:', error);
    });

   

  </script>
</body>
</html>