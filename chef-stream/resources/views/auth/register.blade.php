<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous"/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="{{url('/frontend/css/style.css')}}">
    <title>ChefStream</title>
</head>
<body>
    <x-auth-validation-errors class="mb-4" :errors="$errors" />
    

    <div class="container">
        <div class="chefStream">
            <form action="{{ route('login') }}" method="POST" class="sign-in-form">
                @csrf
                <h2 class="title1">Sign In</h2>
                <div class="input-field1">
                    <i class="fas fa-user"></i>
                    <input type="email" placeholder="Email" name="email">
                </div> 
                <div class="input-field1">
                    <i class="fas fa-lock"></i>
                    <input type="password" placeholder="Password" name="password"required autocomplete="current-password">
                </div>
                <label>
                    <input type="checkbox" name="remember" class="rememberme"> Remember me
                </label>
                <input type="submit" value="Login" class="btn1">
                
                <p class="social-text">or</p>
                <div class="social-media">
                    <a href="#" class="social-icon">
                        <i class="fab fa-facebook"></i>
                    </a>
                    <a href="#" class="social-icon">
                        <i class="fab fa-google"></i>
                    </a>
                    <a href="#" class="social-icon">
                        <i class="fab fa-linkedin-in"></i>
                    </a>
                </div>
                <p class="account-text">Don't have an account? <a href="{{url('/register')}}" id="sign-up-btn2">Sign Up</a></p>
            </form>
 
            <form action="{{ route('register') }}" method="POST" class="sign-up-form">
                @csrf
                <h2 class="title2">Sign Up</h2>
                <div class="input-field2">
                    <i class="fas fa-user"></i>
                    <input type="text" placeholder="Username" name="name" value="{{old('name')}}">
                </div>
                <div class="input-field2">
                    <i class="fas fa-envelope"></i>
                    <input type="text" placeholder="Email" name="email" value="{{old('email')}}">
                </div>
                <div class="input-field2">
                    <i class="fas fa-lock"></i>
                    <input type="password" placeholder="Password" name="password">
                </div>
                <div class="input-field2">
                    <i class="fas fa-lock"></i>
                    <input type="password" placeholder="Confirm Password" name="password_confirmation">
                </div>
                <div class="g-recaptcha" data-sitekey="6Ldl3LwgAAAAAO_wFiej2vCzV6vtnLoKBBYsgsXy" data-callback="callback"></div>
                <input disabled type="submit" value="Sign up" id="submit-btn1" name='signup' class="btn2">
                <p class="social-text">or</p>
                <div class="social-media">
                    <a href="#" class="social-icon">
                        <i class="fab fa-facebook"></i>
                    </a>
                    <a href="#" class="social-icon">
                        <i class="fab fa-google"></i>
                    </a>
                    <a href="#" class="social-icon">
                        <i class="fab fa-linkedin-in"></i>
                    </a>
                </div>
                <p class="account-text">Already have an account? <a href="{{url('/login')}}" id="sign-in-btn2">Sign In</a></p>
            </form>
        </div>
        <div class="panels-container">
            <div class="panel left-panel">
                <div class="content">
                    <h3>Already a Member!</h3>
                    <p>Login to your Account</p>
                    <button class="btn1" id="sign-in-btn">Sign in</button>
                </div>
                <img src="{{url('/frontend/images/image3.png')}}" alt="" class="image">
            </div>

            <div class="panel right-panel">
                <div class="content">
                    <h3>New Here!</h3>
                    <p>Want to be a part of our family?</p>
                    <button class="btn1" id="sign-up-btn">Sign up</button>
                </div>
                <img src="{{url("/frontend/images/image2.png")}}" alt="" class="image">
            </div>
        </div>
    </div>
    

    <script src="{{url('frontend/js/script.js')}}"></script>


    
</body>
</html>

 
