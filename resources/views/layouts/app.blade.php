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
      <nav class="bg-gradient-to-r from-slate-800 to-slate-700 text-white shadow-lg p-2 flex">
        <a href="" class="flex-auto bg-white"></a>
        <ul class="flex-1 flex justify-around bg-stone-500">
			<li>Home</li>
			<li>About</li>
			<li>Product</li>
			<li>Blog</li>
			<li>Contact</li>
        </ul>
		<div class="flex-1 bg-white">
			
		</div>
      </nav>
  </header>

    @yield('section')
    <script src="{{asset('assets/js/jquery-3.5.1.js')}}"></script>
    <script src="{{asset('assets/boxicons-master/dist/boxicons.js')}}"></script>
    @livewireScripts
</body>
</html>