@extends('chef-dashboard.layouts.joiner')
@section('title') Reset Password @endsection
@section('head')
<link rel="stylesheet" href="{{url('/frontend/css/stylePassword.css')}}">
@endsection

@section('main')
            <div class="mainDiv">
                <div class="cardStyle">

                    <form action="{{route('changepass')}}" method="post" name="signupForm" id="signupForm">
                        @csrf
                        <img src="{{url('/frontend/images/password.png')}}" id="signupLogo"/>
                    
                        <h2 class="formTitle">
                            Reset Password
                        </h2>
                    
                        <div class="inputDiv">
                            <label class="inputLabel" for="password">New Password</label>
                            <input type="password" id="password" name="password" required>
                        </div>
                    
                        <div class="inputDiv">
                            <label class="inputLabel" for="confirmPassword">Confirm Password</label>
                            <input type="password" id="confirmPassword" name="password_confirmation">
                        </div>
                  
                        <div class="buttonWrapper">
                            <button type="submit" id="submitButton" class="submitButton pure-button pure-button-primary">
                            <span>Reset Password</span>
                            </button>
                        </div>
                    
                    </form>
                </div>
            </div>
        </div>

@endsection

@section('scripts')
@endsection