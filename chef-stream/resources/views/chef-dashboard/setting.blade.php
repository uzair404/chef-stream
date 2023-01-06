@extends('chef-dashboard.layouts.joiner')
@section('title') Account Settings @endsection
@section('head')
<link rel="stylesheet" href="{{url('/frontend/css/styleSetting.css')}}">
@endsection

@section('main')

            <div class="mainDiv">
                <div class="cardStyle">
                <form action="{{url('/dashboard/setting')}}" method="post" enctype="multipart/form-data" name="signupForm" id="signupForm">@csrf
                        <h2 class="formTitle pb-4 border-bottom">
                            Account Settings
                        </h2>
                        
                        <hr>
                    
                        <div class="d-flex align-items-start py-3 border-bottom">
                            @php
                            $image = $settings->dp_file;     
                            @endphp
                            <img src="{{ asset('uploads/usersdp/' . $image) }}"
                                class="img" alt="">
                            <div class="pl-sm-4 pl-2" id="img-section">
                                <b class="profile">Profile Photo</b>
                                <p class="img-para">Accepted file type .png. Less than 5MB</p>
                                <input name="dp_file" type="file" id="dp" style="display: none">
                                <label style="padding: 5px;text-align: center;" for="dp" class="submitButton1"><b>Upload</b></label>
                            </div>
                        </div>

                        <hr>

                    <div class="selectorDiv">
                        <div class="inputDiv">
                            <label class="inputLabel" for="fName">First Name</label>
                            <input type="text" id="fName" name="fName" value="{{$settings->fname}}" required>
                        </div>
                        <div class="inputDiv">
                            <label class="inputLabel" for="lName">Last Name</label>
                            <input type="text" id="lName" value="{{$settings->lname}}" name="lName" required>
                        </div>
                    </div>
                    <div class="selectorDiv1">
                        <div class="inputDiv1">
                            <label class="inputLabel" for="email">Email Address</label>
                            <input type="text" id="email" value="{{$settings->email}}" name="email" required>
                        </div>
                    </div>
                    <div class="selectorDiv">
                        <div class="inputDiv">
                            <label class="inputLabel" for="phone">Phone number</label>
                            <input type="number" id="phone" name="phone" value="{{$settings->phone}}" pattern="[0-9]{4}-[0-9]{7}" placeholder="0333-1234567">
                        </div>
                        <div class="inputDiv">
                            <label class="inputLabel" for="age">Age</label>
                            <input type="number" id="age" value="{{$settings->age}}" name="age" required>
                        </div>
                    </div>
                    <div class="selectorDiv1">
                        <div class="inputDiv1">
                            <label class="inputLabel" for="eq">Education Qualification</label>
                            {{-- <input type="text" value="{{$settings->education_qualificaion}}" id="eq" name="eq" required> --}}
                            <select name="eq" id="eq">
                                <option value="eq" {{ $settings->education_qualificaion == "eq" ? 'selected' : '' }}>I will Not Tell</option>

                                <option value="matric" {{ $settings->education_qualificaion == "matric" ? 'selected' : '' }}>Matric</option>
                                <option value="graduate" {{ $settings->education_qualificaion == "graduate" ? 'selected' : '' }}>Graduate</option>
                                <option value="engineer" {{ $settings->education_qualificaion == "engineer" ? 'selected' : '' }}>Engineer</option>
                                <option value="programmer" {{ $settings->education_qualificaion == "programmer" ? 'selected' : '' }}>Programmer</option>
                            </select>  
                        </div>
                    </div>
                    <div class="selectorDiv1">
                        <div class="inputDiv1">
                            <label class="inputLabel" for="cert">Certification</label>
                            <input type="text" value="{{$settings->cerificate}}" id="cert" name="cert" required>
                        </div>
                    </div>
                    <div class="selectorDiv1">
                        <div class="inputDiv1">
                            <label class="inputLabel" for="exp">Experience</label>
                            <input type="text" value="{{$settings->experience}}" id="exp" name="exp" required>
                        </div>
                    </div>
                    <div class="inputDiv1">
                        <label class="inputLabel" for="bio">Bio</label>
                        <textarea name="bio" id="bio" class="form-control" rows="4">{{$settings->bio}}</textarea>
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