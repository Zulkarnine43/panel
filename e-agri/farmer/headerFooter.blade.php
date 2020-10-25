
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Homepage</title>

    <!-- Bootstrap core CSS -->
    <link href="{{asset('final_eagri/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('final_eagri/vendor/bootstrap/css/font-awesome.css')}}" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="{{asset('final_eagri/css/shop-homepage.css')}}" rel="stylesheet">
    <link href="{{asset('final_eagri/css/style.css')}}" rel="stylesheet">
    <link href="{{asset('final_eagri/css/farmer.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
<div class="fixed-top">
    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark py-lg-2">
        <a class="navbar-brand ml-4" href="#">Start Bootstrap</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav mx-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="{{route('f_home')}}">Home
                        <span class="sr-only">(current)</span>
                    </a>
                </li>
                <li class="nav-item dropdown">
                    <a class="dropdown-toggle nav-link" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown">Crops</a>
                    <div class="dropdown-menu bg-dark nav-item" aria-labelledby="dropdownMenuLink">
                        <a class="nav-link" href="{{route('crop_import')}}">Import crop</a>
                        <a class="nav-link" href="{{route('crop_manage')}}">Manage crop</a>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('user_manage')}}">Customer_Information</a>
                </li>

                <li class="nav-item dropdown">
                    <a class="dropdown-toggle nav-link" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown">
                        <i class="fa fa-user" style="font-size: 28px;"></i>
                    </a>
                    <div class="dropdown-menu bg-dark nav-item" aria-labelledby="dropdownMenuLink">
                        <a class="nav-link" href="{{route('f_profile')}}">profile</a>
                        <a class="nav-link" href="{{route('index')}}">logout</a>
                    </div>
                </li>

            </ul>
            <form class="form-inline my-2 my-lg-0 mr-4">
                <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">
                    <i class="fa fa-search" style="font-size:28px;color:green"></i>
                </button>
            </form>

        </div>

    </nav>
</div>

<!-- Page Content -->
{{--<div class="container">--}}

<div class="row justify-content-sm-center mx-3">


    <!-- /.col-lg-3 -->
    <div class="col-lg-12 mt-lg-0">

        @yield('body')

    </div>


</div>
<!-- /.row -->
{{--<div  class="mr-auto">--}}
{{--<span>top</span>--}}
{{--</div>--}}

<!-- Footer -->
<footer class="py-5 bg-dark ">
    <div class="container ">
        <div class="row nav text-light">
            <div class="col-lg-3">
                <li class="nav-item"><a class="nav-link" href="">Blogs</a></li>
                <li class="nav-item"><a class="nav-link" href="">Projects</a></li>
                <li class="nav-item"><a class="nav-link" href="">Contact Us</a></li>
                <li class="nav-item"><a class="nav-link" href="">Guest Post</a></li>
                <li class="nav-item"><a class="nav-link" href="">Live Support</a></li>
            </div>

            <div class="col-lg-3">
                <li class="nav-item"><a class="nav-link" href="">Blogs</a></li>
                <li class="nav-item"><a class="nav-link" href="">Projects</a></li>
                <li class="nav-item"><a class="nav-link" href="">Contact Us</a></li>
                <li class="nav-item"><a class="nav-link" href="">Guest Post</a></li>
                <li class="nav-item"><a class="nav-link" href="">Live Support</a></li>
            </div>



            <div class="col-lg-3">
                <li class="nav-item"><a class="nav-link" href="">Blogs</a></li>
                <li class="nav-item"><a class="nav-link" href="">Projects</a></li>
                <li class="nav-item"><a class="nav-link" href="">Contact Us</a></li>
                <li class="nav-item"><a class="nav-link" href="">Guest Post</a></li>
                <li class="nav-item"><a class="nav-link" href="">Live Support</a></li>
            </div>



            <div class="col-lg-3">
                <li class="nav-item" style="font-size:28px;color:green"><a class="fa fa-facebook" href=""></a> <a class="fa fa-instagram ml-2" href=""></a></li>
                <li class="nav-item"><a class="nav-link" href="">Projects</a></li>
                <li class="nav-item"><a class="nav-link" href="">Contact Us</a></li>
                <li class="nav-item"><a class="nav-link" href="">Guest Post</a></li>
                <li class="nav-item"><a class="nav-link" href="">Live Support</a></li>
            </div>
        </div>

    </div>
    <p class="m-0 text-center text-white">Copyright &copy; E_agriculture 2020</p>
    <!-- /.container -->
</footer>

<!-- Bootstrap core JavaScript -->
<script src="{{asset('final_eagri/vendor/jquery/jquery.min.js')}}"></script>
<script src="{{asset('final_eagri/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>

</body>

</html>
