@extends('chef-dashboard.layouts.joiner')
@section('title') Account Settings @endsection
@section('head')
<link rel="stylesheet" href="{{url('/frontend/css/styleSetting.css')}}">
@endsection

@section('main')

            <div class="mainDiv">
                <div class="cardStyle">
                <form action="" method="post" name="signupForm" id="signupForm">
                        <h2 class="formTitle pb-4 border-bottom">
                            Account Settings
                        </h2>
                        
                        <hr>
                    
                        <div class="d-flex align-items-start py-3 border-bottom">
                            <img src="{{url('/frontend/images/dashboard.jpg')}}"
                                class="img" alt="">
                            <div class="pl-sm-4 pl-2" id="img-section">
                                <b class="profile">Profile Photo</b>
                                <p class="img-para">Accepted file type .png. Less than 5MB</p>
                                <button class="submitButton1"><b>Upload</b></button>
                            </div>
                        </div>

                        <hr>

                    <div class="selectorDiv">
                        <div class="inputDiv">
                            <label class="inputLabel" for="cName">First Name</label>
                            <input type="text" id="cName" name="cName" required>
                        </div>
                        <div class="inputDiv">
                            <label class="inputLabel" for="cName">Last Name</label>
                            <input type="text" id="cName" name="cName" required>
                        </div>
                    </div>
                    <div class="selectorDiv1">
                        <div class="inputDiv1">
                            <label class="inputLabel" for="cName">Email Address</label>
                            <input type="text" id="cName" name="cName" required>
                        </div>
                    </div>
                    <div class="selectorDiv">
                        <div class="inputDiv">
                            <label class="inputLabel" for="cName">Phone number:</label>
                            <input type="tel" id="phone" name="phone" pattern="[0-9]{4}-[0-9]{7}" placeholder="0333-1234567">
                        </div>
                        <div class="inputDiv">
                            <label class="inputLabel" for="cName">Age</label>
                            <input type="number" id="cName" name="cName" required>
                        </div>
                    </div>
                    <div class="selectorDiv1">
                        <div class="inputDiv1">
                            <label class="inputLabel" for="cName">Education Qualification</label>
                            <input type="text" id="cName" name="cName" required>
                        </div>
                    </div>
                    <div class="selectorDiv1">
                        <div class="inputDiv1">
                            <label class="inputLabel" for="cName">Certification</label>
                            <input type="text" id="cName" name="cName" required>
                        </div>
                    </div>
                    <div class="selectorDiv1">
                        <div class="inputDiv1">
                            <label class="inputLabel" for="cName">Experience</label>
                            <input type="text" id="cName" name="cName" required>
                        </div>
                    </div>
                    <div class="inputDiv1">
                        <label class="inputLabel" for="cName">Bio</label>
                        <textarea class="form-control" rows="4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Labore vero enim error similique quia numquam ullam corporis officia odio repellendus aperiam consequatur laudantium porro voluptatibus, itaque laboriosam veritatis voluptatum distinctio!</textarea>
                    </div>
                    
                  
                        <div class="buttonWrapper">
                            <button type="submit" id="submitButton" class="submitButton pure-button pure-button-primary">
                            <span>Update</span>
                            </button>
                        </div>
                </form>
                </div>
            </div>
@endsection

@section('scripts')
@endsection