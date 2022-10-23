<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>register</title>

                <link href="{{ url('/css/register.css') }}" rel="stylesheet">
            @include('cdn')
    </head>

    <body>

    <div class="background">
    <div class="container ">
    <section class="section register d-flex flex-column 
    align-items-center justify-content-center py-4">
        <div class="container">
        <div class="row ">
            <div class="col-lg-5 col-md-6  align-items-center justify-content-center mt-5">
            <div class="card mb-3">

                <div class="card-body">

                <div class="pt-4 pb-2">
                    <h5 class="card-title text-center pb-0 fs-4">Sign-up a Account</h5>
                    <p class="text-center small">Enter your information to sign-up</p>
                </div>

                <form action={{ url('registerRequest') }} method="post">
                    @csrf

                    <div class="col-12">
                    <label for="yourUsername" class="form-label">Username</label>
                    <div class="input-group has-validation">
                    <input type="text" name="name" class="form-control" id="yourUsername" 
                    required>
                    <div class="invalid-feedback">Please enter your username.</div>
                    </div>
                    </div>

                    <div class="col-12">
                    <label for="yourEmail" class="form-label">Your Email</label>
                    
                    <div class="input-group has-validation">
                        <span class="input-group-text" id="inputGroupPrepend">@</span>
                        <input type="text" name="email" class="form-control" id="email" required>
                        <div class="invalid-feedback">Please enter your username.</div>
                    </div>
                    </div>

                    <div class="col-12">
                    <label for="yourPassword" class="form-label">Password</label>
                    <input type="password" name="password" class="form-control" id="yourPassword" required>
                    <div class="invalid-feedback">Please enter your password!</div>
                    </div>

                    <div class="col-12">
                    <label for="phone" class="form-label">Your Phone</label>
                    
                    <div class="input-group has-validation">
                        <input type="number" name="phone" class="form-control" id="phone" required>
                        <div class="invalid-feedback">Please enter your phone.</div>
                    </div>
                    </div>

                    <div class="col-12">
                    <label for="country" class="form-label">Your Country</label>
                    <div class="input-group has-validation">
                        <input type="text" name="country" class="form-control" id="country" required>
                        <div class="invalid-feedback">Please enter your country.</div>
                    </div>
                    </div>

                    <div class="col-12">
                    <div class="form-check mt-2">
                        <input class="form-check-input" type="checkbox" name="remember" value="true" id="rememberMe">
                        <label class="form-check-label" for="rememberMe">Remember me</label>
                    </div>
                    </div>
                    <div class="col-12">
                    <button class="btn btn-primary w-100" type="submit"name="register">Register</button>
                    </div>
                
                    <div class="col-12 mb-4">
                    <p class="small mb-0">Don't have account? <a href="login">login </a></p>
                    </div>   
                    
                </form>

                </div>
            </div>


            </div>
        </div>
        </div>

    </section>
    </div></div>
    </body>
</html>
