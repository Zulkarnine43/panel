<link href="{{asset('final_eagri/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">

    <section class="">
        <div class="col-lg-6 mx-auto mt-5  jumbotron">
            <form class="form-group" action='' method="POST">
                <div>
                    <h1 class=" text-center">Login Here</h1>
                </div>
                <div class="form-group">
                    <!-- E-mail -->
                    <label>E-mail</label>
                    <div>
                        <input type="text" id="email" name="email" placeholder="your email" class="form-control">
                        <p class="">Please provide your E-mail</p>
                    </div>
                </div>



                <div class="control-group">
                    <!-- Password-->
                    <label>Password</label>
                    <div>
                        <input type="password" id="password" name="password" placeholder="your password" class="form-control">
                        <p class=""></p>
                    </div>
                </div>

                <div class="control-group">
                    <!-- Button -->
                    <div>
                        <button class="btn btn-block btn-success">Login</button>
                    </div>
                </div>
            </form>
            <a href="" class="btn btn-outline-success">Forgot password</a>
        </div>
    </section>
