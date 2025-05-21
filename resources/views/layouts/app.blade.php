<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('assets/bootstrap/bootstrap-5.0.2-dist/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/boxicons-master/css/boxicons.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
    <title>{{$title}}</title>
</head>
<body>

    <header>
        <nav class="navbar navbar-expand-md navbar-light shadow fixed-top bg-light z-n1">
            <div class="container">
                <a class="navbar-brand" href="#">Mon logo</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarID"
                    aria-controls="navbarID" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-end" id="navbarID">
                    <ul class="navbar-nav gap-5">
                        <li class="nav-item">
                            <a href="" class="nav-link">Accueil</a>
                        </li>
                        <li class="nav-item">
                            <a href="" class="nav-link">produits</a>
                        </li>
                        <li class="nav-item">
                            <a href="" class="nav-link">Blog</a>
                        </li>
                        <li  class="nav-item pt-2 ms-4">
                            <a href="nav-link">
                                <i class="bx bx-cart bx-sm text-dark"></i>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    @yield('section')
    <script src="{{asset('assets/js/jquery-3.5.1.js')}}"></script>
    <script src="{{asset('assets/bootstrap/bootstrap-5.0.2-dist/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('assets/boxicons-master/dist/boxicons.js')}}"></script>
</body>
</html>