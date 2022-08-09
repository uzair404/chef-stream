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
                    
                    <form action="{{route('facebooknewpass')}}" method="post" name="signupForm" id="signupForm">
                        @csrf
                        <h2 class="formTitle">
                            Set Password
                        </h2>

                        <div class="inputLabel">
                            <div class="inputDiv1">
                                <input disabled placeholder="Email" type="text" id="text" name="email" value="{{$email}}">
                            </div>

                            <div class="inputDiv2">
                                <input placeholder="New Password" type="password" id="password" name="password" required>
                            </div>
                        
                            <div class="inputDiv3">
                                <input placeholder="Confirm Password" type="password" id="confirmPassword" name="password_confirmation" required>
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