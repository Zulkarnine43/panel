@extends('home.headerFooter')

@section('body')



    <script src="{{asset('final_eagri/vendor/bootstrap/js/jquery-1.8.3.min.js')}}"></script>
    <script src="{{asset('final_eagri/vendor/bootstrap/js/jquery.elevatezoom.js')}}"></script>





        <div class="row">
            <!----Image Slider start----------->
            <div class="col-lg-6">
         <div>
		        <div id="carouselExampleIndicators" class="carousel slide my-2" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                </ol>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img id="zoom_01" class="d-block img-fluid" src='{{ asset('final_eagri/img/a.jpg')}}' data-zoom-image="{{ asset('final_eagri/img/a.jpg')}}" alt="First slide"/>
                    </div>
                    <div class="carousel-item">
                        <img id="zoom_02" class="d-block img-fluid" src='{{ asset('final_eagri/img/b.jpg')}}' data-zoom-image="{{ asset('final_eagri/img/b.jpg')}}" alt="Second slide"/>
                    </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
		 </div>
            </div>

            <!----Image Details start----------->
            <div class="col-lg-6">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">
                            <a href="#">Item Two</a>
                        </h4>
                        <h5>$24.99</h5>
                        <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet numquam aspernatur! Lorem ipsum dolor sit amet.</p>
                    </div>
                    <div class="card-footer">
                        <button class="btn btn-success btn-block" data-toggle="modal" data-target="#BidModal">Bid here</button>
                    </div>
                </div>
            </div>
        </div>

    <!----Bidding Modal start----------->

    <div class="modal" id="BidModal">
        <div class="modal-dialog">
            <div class="modal-content bg-light">
                <div class="modal-header">
                    <h3>Bid</h3>
                    <button class="close text-dark" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body">
                    <form action="" method="get">
                           <div class="font-weight-bolder text-center display-5">
                               Bid Rate::<span class="ml-4">Tk-350</span>
                           </div>

                        <div class="font-weight-bolder text-center display-5">
                             Best Bidder::<span class="ml-4">Tk-450</span>
                        </div>
                         
                        <div class="form-group">
                            <label for="email">Name</label>
                            <input type="text" name="name" value="" class="form-control" placeholder="Enter your name">
                        </div>


                        <div class="form-group">
                            <label for="email">Mobile</label>
                            <input type="text" name="mobile" value="" class="form-control" placeholder="Enter your mobile">
                        </div>


                        <div class="form-group">
                            <label for="email">Bid price</label>
                            <input type="text" name="message" value="" class="form-control" placeholder="Enter Bid price">
                        </div>

                        <input type="submit" value="Bid" class="btn btn-success">
                    </form>
                </div>
            </div>
        </div>
    </div>






    <!----comment section start----------->
      <style>
          .user_name{
              font-size:14px;
              font-weight: bold;
          }
          .comments-list .media{
              border-bottom: 1px dotted #ccc;
          }
      </style>

      <div class="row justify-content-center">
          <div class="col-md-8">
              <div>
                  <h1><small class="pull-right">45 more bids</small> Bids </h1>
              </div>
              <div class="comments-list">

                  <p><small class="pull-right">5 days ago</small> </p>
                  <div class="media">
                      <div class="media-body">
                          <h4 class="media-heading user_name">Baltej Singh</h4>
                          Wow! this is really great.

                          <p><small><a href="">Like</a> - <a href="">Share</a></small></p>
                      </div>
                  </div>

                  <p><small class="pull-right">5 days ago</small> </p>
                  <div class="media">
                      <div class="media-body">
                          <h4 class="media-heading user_name">Baltej Singh</h4>
                          Wow! this is really great.

                          <p><small><a href="">Like</a> - <a href="">Share</a></small></p>
                      </div>
                  </div>



                  </div>
              </div>

          </div>


    <!---- Slider script start----------->
    <script>
         $("#zoom_01").elevateZoom();
         $("#zoom_02").elevateZoom();
    </script>
@endsection

        {{--<!DOCTYPE html>--}}
{{--<html>--}}
{{--<head>--}}
    {{--<meta charset='utf-8'/>--}}
    {{--<title>jQuery elevateZoom Demo</title>--}}
    {{--<script src="{{asset('final_eagri/vendor/bootstrap/js/jquery-1.8.3.min.js')}}"></script>--}}
    {{--<script src="{{asset('final_eagri/vendor/bootstrap/js/jquery.elevatezoom.js')}}"></script>--}}
{{--</head>--}}
{{--<body>--}}
{{--<h1>Basic Zoom Example</h1>--}}
{{--<img id="zoom_01" class="img-fluid" src='{{ asset('final_eagri/img/a.jpg')}}' data-zoom-image="{{ asset('final_eagri/img/a.jpg')}}"/>--}}

{{--<br />--}}
{{--see more examples online <a href="http://www.elevateweb.co.uk/image-zoom/examples">http://www.elevateweb.co.uk/image-zoom/examples</a>--}}
{{--<script>--}}
    {{--$("#zoom_01").elevateZoom();--}}
{{--</script>--}}
{{--</body>--}}
{{--</html>--}}