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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>


<div class="fixed-top">

    <!--Top Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-light ">

        <a class="text-dark navbar-brand ml-4" href="#">Online Agriculture</a>

        <button class="navbar-toggler bg-dark" type="button" data-toggle="collapse" data-target="#navbarResponsive">
            <span class="navbar-toggler-icon "></span>
        </button>

        <div  class="collapse navbar-collapse" id="navbarResponsive">

            <div class="mx-auto">
                <form class="form-inline my-lg-0 mr-4" action="{{route('search')}}" method="get">
                    @csrf
                    <input  class="form-control mr-sm-2" type="search" name="search" placeholder="Search" aria-label="Search" style="width: 500px">
                    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">
                        <i class="fa fa-search" style="font-size:28px;color:green"></i>
                    </button>
                </form>
            </div>

               <div class="mr-4 ml-auto">
                   <a href="{{route('login')}}" class="nav-item btn btn-outline-success">Login</a>
                   <a href="{{route('signup')}}" class="nav-item btn btn-success ml-2">Signup</a>
               </div>
        </div>
</nav>


    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-secondary">
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav mx-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="{{route('index')}}">Home
                            <span class="sr-only">(current)</span>
                        </a>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="dropdown-toggle nav-link" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Ravi Crops</a>
                        <div class="dropdown-menu bg-dark nav-item" aria-labelledby="dropdownMenuLink">
                            <a class="nav-link" href="">about us</a>
                            <a class="nav-link" href="#">Another action</a>
                            <a class="nav-link" href="#">Something else</a>
                        </div>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="dropdown-toggle nav-link" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> Kharif Crops</a>
                        <div class="dropdown-menu bg-dark nav-item" aria-labelledby="dropdownMenuLink">
                            <a class="nav-link" href="">about us</a>
                            <a class="nav-link" href="#">Another action</a>
                            <a class="nav-link" href="#">Something else</a>
                        </div>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="dropdown-toggle nav-link" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> Zaid Crops</a>
                        <div class="dropdown-menu bg-dark nav-item" aria-labelledby="dropdownMenuLink">
                            <a class="nav-link" href="">about us</a>
                            <a class="nav-link" href="#">Another action</a>
                            <a class="nav-link" href="#">Something else</a>
                        </div>
                    </li>


                    <li class="nav-item">
                        <a class="nav-link" href="{{route('about')}}">about us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('services')}}">Services</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('contact')}}">Contact</a>
                    </li>


						 @if (session()->has('c_username'))

                    <li class="nav-item dropdown">
                        <a class="dropdown-toggle nav-link" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown">
                            <i class="fa fa-user" style="font-size: 20px;">{{Session()->get('c_username')}}</i>
                        </a>
                        <div class="dropdown-menu bg-dark nav-item" aria-labelledby="dropdownMenuLink">
                            <a class="nav-link" href="{{route('f_profile')}}">profile</a>
                            <a class="nav-link" href="{{route('c_message')}}">
                                <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-chat-right-text-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" d="M16 2a2 2 0 0 0-2-2H2a2 2 0 0 0-2 2v8a2 2 0 0 0 2 2h9.586a1 1 0 0 1 .707.293l2.853 2.853a.5.5 0 0 0 .854-.353V2zM3.5 3a.5.5 0 0 0 0 1h9a.5.5 0 0 0 0-1h-9zm0 2.5a.5.5 0 0 0 0 1h9a.5.5 0 0 0 0-1h-9zm0 2.5a.5.5 0 0 0 0 1h5a.5.5 0 0 0 0-1h-5z"/>
                                </svg>message
                            </a>
                            <a class="nav-link" href="{{route('logout')}}">logout</a>
                        </div>
                    </li>
					
					@endif
                </ul>
            </div>

    </nav>
</div>


<!-- Page Content -->

    <div class="row justify-content-sm-center mx-3" id="top">

        <div class="bg-light col-lg-2">

            <h1 class="my-5 my-sm-5">categories</h1>
            <div class="list-group text-lg-center">
                <a href="{{route('Categories',['crop_type'=>"Fruits"])}}" class="list-group-item btn btn-outline-primary">Fruits</a>
                <a href="{{route('Categories',['crop_type'=>"vegetables"])}}" class="list-group-item btn btn-outline-primary">Vagetables</a>
                <a href="#" class="list-group-item btn btn-outline-primary">Food Crops</a>
                <a href="#" class="list-group-item btn btn-outline-primary">Cash Crops</a>
                <a href="#" class="list-group-item btn btn-outline-primary">Plantation Crops</a>
                <a href="#" class="list-group-item btn btn-outline-primary">Horticulture crops</a>
                <a href="#" class="list-group-item btn btn-outline-primary">Rabi Crops</a>
                <a href="#" class="list-group-item btn btn-outline-primary">Kharif Crops</a>
                <a href="#" class="list-group-item btn btn-outline-primary">Zaid Crops</a>
            </div>
            <!-- Google trnaslate-->
             <div id="google_translate_element"></div>
        </div>
        <!-- /.col-lg-3 -->
        <div class="col-lg-10 mt-lg-0">
            <h3 class="text-success">{{Session::get('bid_success')}}</h3>

            <div class="alert alert-success alert-dismissable text-center">
                <button type="button" class="close" data-dismiss="alert">
                    <span>&times;</span>
                </button>
                <strong> Login for Import crop or bidding </strong>Details<a class="alert-link ml-1" href="{{route('services')}}">Check it out</a>
            </div>

        @yield('body')

        </div>
    </div>
    <!-- /.row -->

<!-- Top  -->
<div>
    <a class="btn btn-warning float-right" href="#top">Top</a>
</div>
<div class="clearfix"></div>

<!-- Footer -->
<footer class="py-5 bg-dark ">
    <div class="container ">
        <div class="row nav text-light">
            <div class="col-lg-3">
                <h2 >Our website</h2>
                <p class="lead text-justify" style="font-size: 14px" >At e_agriculture,
                    Innovation and simplicity makes us happy: our goal is to remove any technical or financial
                    barriers that can prevent crops sell and buy. We're excited to
                    help you on your journey!?</p>
            </div>

            <div class="col-lg-3 text-left">
                <h2 >Quick Menu</h2>
                <li class="nav-item"><a class="nav-link" href="">Home</a></li>
                <li class="nav-item"><a class="nav-link" href="">About</a></li>
                <li class="nav-item"><a class="nav-link" href="">Services</a></li>
                <li class="nav-item"><a class="nav-link" href="">Contact Us</a></li>
                <li class="nav-item"><a class="nav-link" href="">Message Us</a></li>
            </div>



            <div class="col-lg-3 text-left">
                <h2>News</h2>
                <li class="nav-item"><a class="nav-link" href="">kharif crop</a></li>
                <li class="nav-item"><a class="nav-link" href="">rabi crop</a></li>
                <li class="nav-item"><a class="nav-link" href="">zerind crop</a></li>
                <li class="nav-item"><a class="nav-link" href="">Guest Post</a></li>
                <li class="nav-item"><a class="nav-link" href="">Live Support</a></li>
            </div>



            <div class="col-lg-3 text-left">
                <h2 class="">Social Links</h2>
                <li class="nav-item" style="font-size: 22px">
                    <a class="fa fa-facebook" href=""></a>
                    <a class="fa fa-instagram ml-2" href=""></a>
                    <a class="fa fa-youtube ml-2" href=""></a>
                    <a class="fa fa-github ml-2" href=""></a>
                </li>

            </div>
        </div>

    </div>
    <p class="m-0 text-center text-white">Copyright &copy; E_agriculture 2020</p>
    <!-- Message -->
    <button class="fixed-bottom btn btn-success float-right " data-toggle="modal" data-target="#messageModal">Message us</button>


    <!-- Message Modal -->
    <div class="modal" id="messageModal">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Message us</h5>
                    <button class="close" data-dismiss="modal">&times;</button>
                </div>
                <form action="{{route('contact_message')}}" method="post">
                <div class="modal-body">
                        @csrf
                        <div class="form-group">
                            <label>Name</label>
                            <input class="form-control" name="name" type="text" placeholder="Name" required>
                        </div>
                        <div class="form-group">
                            <label>Email</label>
                            <input class="form-control" name="email" type="email" placeholder="Email" required>
                        </div>

                        <div class="form-group">
                            <label>Phone</label>
                            <input class="form-control" name="phone" type="tel" placeholder="Phone" required>
                        </div>
                        <div class="form-group">
                            <label>Message</label>
                            <textarea cols="30" rows="5" name="message" placeholder="Message" class="form-control" required></textarea>
                        </div>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button class="btn btn-warning">Send</button>
                </div>
                </form>
            </div>
        </div>
    </div>
</footer>


<!-- google translate js -->
<script type="text/javascript">
function googleTranslateElementInit() {
  new google.translate.TranslateElement({pageLanguage: 'en'}, 'google_translate_element');
}
</script>

<script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>


<!-- Bootstrap core JavaScript -->
<script src="{{asset('final_eagri/vendor/jquery/jquery.min.js')}}"></script>
<script src="{{asset('final_eagri/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<!-- product zoom view -->
<script src="{{asset('final_eagri/vendor/bootstrap/js/jquery.elevatezoom.js')}}"></script>

</body>

</html>
