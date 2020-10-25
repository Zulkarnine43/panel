@extends('home.headerFooter')

@section('body')

    <section class="my-3">
        <div class="col-lg-6 mx-auto  jumbotron">
            <form class="form-group" action='' method="POST">
                <div>
                    <h1 class=" text-center">Login Here</h1>
                </div>

                <div class="form-group">
                    <label class="">Login As</label>
                    <select class="form-control" name="register_to" >
                        <option value="null"><-------Login As------------></option>
                        <option value="farmer">Farmer</option>
                        <option value="customer">Customer</option>
                    </select>
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
           <span>Not an Account?</span><a class="btn btn-success" href="{{route('signup')}}">SignUp</a>
        </div>
    </section>
    @endsection