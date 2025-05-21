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

    <div class="admin-content d-flex w-100 h-100 bg-black">
        <div class="sidebar col-md-2 bg-secondary">
            <a href="" class="navbar-brand d-flex justify-content-center align-content-center py-4 text-white"> Mon LOGO</a>
            <ul class="navbar-nav ps-4">
                <li class="nav-item">
                    <a href="{{route('AdminHomePage')}}" class="nav-link text-white"> <i class="bx bx-plus"></i> Ajouter Nouveau Menu</a>
                </li>
            </ul>
        </div>
        <div class="content bg-light col-md-10">
            @yield("section")
        </div>
    </div>
    <script src="{{asset('assets/js/jquery-3.5.1.js')}}"></script>
    <script src="{{asset('assets/bootstrap/bootstrap-5.0.2-dist/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('assets/boxicons-master/dist/boxicons.js')}}"></script>
</body>
</html>