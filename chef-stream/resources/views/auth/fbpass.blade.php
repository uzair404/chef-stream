<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>New Pass</title>
    <link rel="stylesheet" href="{{url('/frontend/css/newpass.css')}}">
    <link rel="stylesheet" href="{{url('/frontend/css/all.css')}}">
</head>
<body>
    <x-auth-validation-errors class="mb-4" :errors="$errors" />
    <div class="container">
                <div class="cardStyle">
                    @php
                        if(!isset($email)){
                            echo '<script>window.location = "/dashboard";</script>';
                        }
                        session()->forget('fb_email');
                    @endphp
                    <form action="{{route('login')}}" method="post" name="signupForm" id="signupForm">
                        @csrf
                        <h2 class="formTitle">
                            Enter Password
                        </h2>

                        <div class="inputLabel">
                            <div class="inputDiv1">
                                <input placeholder="Email" type="text" id="text" name="email" value="{{$email}}">
                            </div>

                            <div class="inputDiv2">
                                <input placeholder="Password" type="password" id="password" name="password" required>
                            </div>

                            <label>
                                <input style="
                                text-align: center;
                                height: 10%;
                                display: inline;
                                margin-left:34%; 
                                margin-top:5%;" 
                                type="checkbox" name="remember" class="rememberme"> Remember me
                            </label>
                            <div style="margin-left: 30%" class="flex items-center justify-end mt-4 ml-8">
                                @if (Route::has('password.request'))
                                    <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('password.request') }}">
                                        {{ __('Forgot your password?') }}
                                    </a>
                                @endif
                            </div>
                    
                            <div class="buttonWrapper">
                                <button type="submit" id="submitButton" onclick="validateSignupForm()" class="submitButton pure-button pure-button-primary">
                                <span>Submit</span>
                                </button>
                            </div>
                        </div>
                    
                    </form>
                </div>
            </div>
        </div>

    <script src="{{url('/frontend/js/newpass.js')}}"></script>
</body>
</html>