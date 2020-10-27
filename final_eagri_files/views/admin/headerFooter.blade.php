<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Simple Sidebar - Start Bootstrap Template</title>

    <!-- Bootstrap core CSS -->
    <link href="{{asset('final_eagri/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('final_eagri/vendor/bootstrap/css/font-awesome.css')}}" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="" rel="stylesheet">
    <link href="{{asset('final_eagri/css/simple-sidebar.css')}}" rel="stylesheet">

</head>

<body>

<div class="d-flex" id="wrapper">

    <!-- Sidebar -->
    <div class="bg-light border-right" id="sidebar-wrapper">
        <div class="sidebar-heading">E_agriculture</div>
        <div class="list-group list-group-flush">
            <a href="#" class="list-group-item list-group-item-action bg-light">Dashboard</a>
            <a href="#" class="list-group-item list-group-item-action bg-light">Shortcuts</a>
            <a href="#" class="list-group-item list-group-item-action bg-light">Overview</a>
            <a href="#" class="list-group-item list-group-item-action bg-light">Events</a>
            <a href="#" class="list-group-item list-group-item-action bg-light">Status</a>
            <span class="dropdown">
                <a class=" dropdown-toggle list-group-item list-group-item-action bg-light" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    News
                </a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="{{route('add_news')}}">Add News</a>
                    <a class="dropdown-item" href="{{route('manage_news')}}">Manage News</a>
                </div>
            </span>


            <span class="dropdown">
                <a class=" dropdown-toggle list-group-item list-group-item-action bg-light" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Comments
                </a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="{{route('manage_Comments')}}">Manage Comments</a>
                </div>
            </span>
        </div>
    </div>
    <!-- /#sidebar-wrapper -->

    <!-- Page Content -->
    <div id="page-content-wrapper">

        <nav class="navbar navbar-expand-lg navbar-light bg-light border-bottom">
            <button class="btn btn-primary" id="menu-toggle">Admin Menu</button>

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mx-auto mt-2 mt-lg-0">
                    <li class="nav-item active">
                        <a class="nav-link" href="{{route('a_home')}}">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Users
                        </a>
                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{route('all_farmer')}}">Farmers</a>
                            <a class="dropdown-item" href="{{route('all_customer')}}">Customer</a>
                        </div>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Crops
                        </a>
                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" target="_blank" href="{{route('index')}}">Collection_crops</a>
                            <a class="dropdown-item" href="{{route('verified_crops')}}">Verified crops</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="{{route('Unverified_crops')}}">Unverified crops</a>
                        </div>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            News
                        </a>
                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{route('add_news')}}">Add News</a>
                            <a class="dropdown-item" href="{{route('manage_news')}}">Manage News</a>
                        </div>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="dropdown-toggle nav-link" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown">
                            <i class="fa fa-user" style="font-size: 28px;">admin</i>
                        </a>
                        <div class="dropdown-menu nav-item" aria-labelledby="dropdownMenuLink">
                            <a class="dropdown-item" href="{{route('f_profile')}}">profile</a>
                            <a class="dropdown-item" href="{{route('a_login')}}">logout</a>
                        </div>
                    </li>
                </ul>
                <form class="form-inline my-2 my-lg-0 mr-4">
                    <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-success my-2 my-sm-0 text-dark" type="submit">
                        <i class="fa fa-search">search</i>
                    </button>
                </form>
            </div>
        </nav>

        <div class="container-fluid">
         @yield('body')
        </div>
    </div>
    <!-- /#page-content-wrapper -->

</div>
<!-- /#wrapper -->



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


<!-- Menu Toggle Script -->
<script>
    $("#menu-toggle").click(function(e) {
        e.preventDefault();
        $("#wrapper").toggleClass("toggled");
    });
</script>

</body>

</html>
