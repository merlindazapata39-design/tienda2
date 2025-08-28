<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Barra de Navegación</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100">

  <nav class="bg-white shadow-md">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
      <div class="flex justify-between h-16">
        <!-- Logo -->
        <div class="flex-shrink-0 flex items-center">
          <a href="#" class="text-xl font-bold text-blue-600">MiLogo</a>
        </div>

        <!-- Menú en desktop -->
        <div class="hidden md:flex md:items-center space-x-4">
          <a href="{{route('persona.index')}}" class="text-gray-700 hover:text-blue-500">Gestionar persona</a>
          <a href="#" class="text-gray-700 hover:text-green-600">Gestionar productos</a>
          <a href="#" class="text-gray-700 hover:text-red-300">Gestionar ventas</a>
          <a href="#" class="text-gray-700 hover:text-blue-600">Contacto</a>
        </div>

        <!-- Botón hamburguesa -->
        <div class="flex items-center md:hidden">
          <button id="menu-btn" class="text-gray-700 focus:outline-none">
            <svg class="w-6 h-6" fill="none" stroke="currentColor"
                 viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
              <path stroke-linecap="round" stroke-linejoin="round"
                    stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
            </svg>
          </button>
        </div>
      </div>
    </div>

    <!-- Menú móvil -->
    <div id="mobile-menu" class="md:hidden hidden px-4 pb-4">
      <a href="#" class="block py-2 text-gray-700 hover:text-blue-600">Inicio</a>
      <a href="#" class="block py-2 text-gray-700 hover:text-blue-600">Servicios</a>
      <a href="#" class="block py-2 text-gray-700 hover:text-blue-600">Acerca</a>
      <a href="#" class="block py-2 text-gray-700 hover:text-blue-600">Contacto</a>
    </div>
  </nav>

  <script>
    // Script para mostrar/ocultar el menú móvil
    const menuBtn = document.getElementById('menu-btn');
    const mobileMenu = document.getElementById('mobile-menu');

    menuBtn.addEventListener('click', () => {
      mobileMenu.classList.toggle('hidden');
    });
  </script>

</body>
</html>
