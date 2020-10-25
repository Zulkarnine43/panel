@extends('home.headerFooter')

@section('body')
    <section class="my-3">
    <div class="col-lg-6 mx-auto  jumbotron">
        <form class="form-group" action='' method="POST">
            <div>
                <h1 class="text-center">Register Here</h1>
            </div>

            <div class="form-group">
                <label>Register as</label>
                <select class="form-control" name="register_to" >
                    <option value="null"><-------Register As------------></option>
                    <option value="farmer">Farmer</option>
                    <option value="customer">Customer</option>
                </select>
            </div>

            <div class="form-group">
                <!-- Username -->
                <label>Username</label>
                <div>
                    <input type="text" id="username" name="username" placeholder="xyz123" class="form-control">
                    <p class="">Username can contain any letters or numbers, without spaces</p>
                </div>
            </div>

            <div class="form-group">
                <!-- E-mail -->
                <label>E-mail</label>
                <div>
                    <input type="text" id="email" name="email" placeholder="xyz@gmail.com" class="form-control">
                    <p class="">Please provide your E-mail</p>
                </div>
            </div>


            <div class="form-group">

                <label>Mobile</label>
                <div>
                    <input type="tel" id="mobile" name="mobile" placeholder="8801xxxxxxxxx" class="form-control">
                    <p class=""></p>
                </div>
            </div>

            <div class="form-group">
                <label>Division</label>
                <select class="form-control" name="district" >
                    <option value="null"><-------Select Your District------------></option>
                    <option value="Dhaka">Dhaka</option>
                    <option value="Rajshahi">Rajshahi</option>
                    <option value="Khulna">Khulna</option>
                    <option value="Chittagong">Chittagong</option>
                    <option value="Barishal">Barishal</option>
                    <option value="Comilla">Comilla</option>
                    <option value="Rangpur">Rangpur</option>
                </select>
            </div>

            <div class="control-group">

                <label>Zip code</label>
                <div>
                    <input type="number" id="zip" name="zip_code" placeholder="xxxx" class="form-control">
                    <p class=""></p>
                </div>
            </div>

            <div class="control-group">
                <!-- Password-->
                <label>Password</label>
                <div>
                    <input type="password" id="password" name="password" placeholder="Xyz123" class="form-control">
                    <p class="">Password should be at least 6 characters</p>
                </div>
            </div>

            <div class="control-group">
                <!-- Password -->
                <label>Password (Confirm)</label>
                <div>
                    <input type="password" id="password_confirm" name="password_confirm" placeholder="Xyz123" class="form-control">
                    <p class="">Please confirm password</p>
                </div>
            </div>

            <div class="control-group">
                <!-- Button -->
                <div>
                    <button class="btn btn-block btn-success">SignUp</button>
                </div>
            </div>
        </form>
        <span>Have an Account?</span><a class="btn btn-success" href="{{route('login')}}">Login</a>
    </div>
    </section>
@endsection