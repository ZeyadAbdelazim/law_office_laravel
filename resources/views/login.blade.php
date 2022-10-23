<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>login</title>

        @include('cdn')


        <link href="{{ url('/css/login.css') }}" rel="stylesheet">

    </head>
    <body>
    
    <main class="background">
    <div class="container">

    <section class="section register min-vh-100 d-flex flex-column 
    align-items-center justify-content-center py-4">

        <div class="container">
        
        <div class="row">
            <div class="col-lg-5 
            align-items-center justify-content-center">
            
            <div class="card mb-3">
                <div class="card-body">
                <div class="pt-4 pb-4">
                    <h5 class="card-title text-center pb-0 fs-4">LAW OFFICE</h5>
                    <h5 class="card-title text-center pb-0 fs-4">Login to Your Account</h5>
                    <p class="text-center small">Enter your username & password to login</p>
                </div>

                <form action={{ url('loginRequest') }} method="post">
                    @csrf

                    <div class="col-12">
                    <label for="yourUsername" class="form-label">Username</label>
                    <div class="input-group has-validation">
                        <input type="text" name="name" class="form-control" id="yourUsername" required>
                        <div class="invalid-feedback">Please enter your username.</div>
                    </div>
                    </div>

                    <div class="col-12">
                    <label for="yourPassword" class="form-label">Password</label>
                    <input type="password" name="password" class="form-control" id="yourPassword" required>
                    <div class="invalid-feedback">Please enter your password!</div>
                    </div>

                    <div class="col-12">
                    <div class="form-check mt-2">
                        <input class="form-check-input " type="checkbox" name="remember" value="true" id="rememberMe">
                        <label class="form-check-label" for="rememberMe">Remember me</label>
                    </div>
                    </div>
                    <div class="col-12">
                    <button class="btn btn-primary w-100 mb-2" type="submit"name="login">
                    Login</button>
                    </div>
                
                    <div class="col-12">
                    <p class="small mb-4">Don't have account? <a href="register">
                    Create an account</a></p>
                    </div>   
                </form>
                </div>
            </div>
            </div>
        </div>
        </div>
    </section>
    </div>
</main>
</body>
</html>
