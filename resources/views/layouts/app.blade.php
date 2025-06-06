<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('assets/boxicons-master/css/boxicons.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @livewireStyles
    <title>{{$title}}</title>
</head>
<body>

    <header>
        <nav class="fixed top-0 left-0 right-0 bg-white shadow-md z-10">
  <div class="container mx-auto px-4">
    <div class="flex justify-between items-center h-16">
      <!-- Logo -->
      <a href="#" class="text-xl font-bold text-gray-800">Mon logo</a>

      <!-- Menu Desktop -->
      <div class="hidden md:flex items-center space-x-8">
        <a href="#" class="text-gray-600 hover:text-gray-900 transition">Accueil</a>
        <a href="#" class="text-gray-600 hover:text-gray-900 transition">Produits</a>
        <a href="#" class="text-gray-600 hover:text-gray-900 transition">Blog</a>
        <a href="#" class="text-gray-600 hover:text-gray-900 ml-4">
          <i class="bx bx-cart bx-sm"></i>
        </a>
      </div>

      <!-- Bouton Mobile -->
      <button class="md:hidden focus:outline-none" id="mobile-menu-button">
        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
        </svg>
      </button>
    </div>

    <!-- Menu Mobile -->
    <div class="md:hidden hidden pb-4" id="mobile-menu">
      <div class="flex flex-col space-y-3 mt-2">
        <a href="#" class="text-gray-600 hover:text-gray-900 px-3 py-2">Accueil</a>
        <a href="#" class="text-gray-600 hover:text-gray-900 px-3 py-2">Produits</a>
        <a href="#" class="text-gray-600 hover:text-gray-900 px-3 py-2">Blog</a>
        <a href="#" class="text-gray-600 hover:text-gray-900 px-3 py-2 flex items-center">
          <i class="bx bx-cart bx-sm mr-2"></i> Panier
        </a>
      </div>
    </div>
  </div>
</nav>


    </header>
    @yield('section')
    <script src="{{asset('assets/js/jquery-3.5.1.js')}}"></script>
    
    <script src="{{asset('assets/boxicons-master/dist/boxicons.js')}}"></script>
    @livewireScripts
</body>
</html>