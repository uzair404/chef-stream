<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" 
    integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous"/>
    <link rel="stylesheet" href="{{url('/frontend/css/styleSetting.css')}}">
    <link rel="stylesheet" href="{{url("/frontend/css/all.css")}}">

    <title>Account Settings</title>
</head>
<body>
    <div class="container">
        <div class="navigation">
            <ul>
                <li>
                    <a href="/">
                        <span class="icon"></span>
                        <span class="title"><h2>ChefStream</h2></span>
                    </a>
                </li>
                <li>
                    <a href="{{url('/dashboard')}}">
                        <span class="icon"><i class="fa fa-home" aria-hidden="true"></i></span>
                        <span class="title">Home Page</span>
                    </a>
                </li>
                <li>
                    <a href="{{url('/dashboard/courses')}}">
                        <span class="icon"><i class="fa fa-book" aria-hidden="true"></i></span>
                        <span class="title">Courses</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <span class="icon"><i class="fa fa-desktop" aria-hidden="true"></i></span>
                        <span class="title">Online Class</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <span class="icon"><i class="fa fa-credit-card" aria-hidden="true"></i></span>
                        <span class="title">Payment</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <span class="icon"><i class="fa fa-comment" aria-hidden="true"></i></span>
                        <span class="title">Message</span>
                    </a>
                </li>
                <li>
                    <a href="{{url('/dashboard/setting')}}">
                        <span class="icon"><i class="fa fa-cog" aria-hidden="true"></i></span>
                        <span class="title">Setting</span>
                    </a>
                </li>
                <li>
                    <a href="{{url('/dashboard/password')}}">
                        <span class="icon"><i class="fa fa-lock" aria-hidden="true"></i></span>
                        <span class="title">Password</span>
                    </a>
                </li>
                <li>
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf

                        <x-dropdown-link :href="route('logout')"
                                onclick="event.preventDefault();
                                            this.closest('form').submit();">
                        <span class="icon"><i class="fa fa-unlock-alt" aria-hidden="true"></i></span>
                        <span class="title">Sign Out</span>
                        </x-dropdown-link>
                    </form>
                </li>
            </ul>
        </div>

        <div class="main">
            <div class="topbar">
                <div class="toggle" onclick="toggleMenu()"><i class="fa fa-bars" aria-hidden="true"></i></div>
                <div class="search">
                    <label>
                        <input type="text" placeholder="Search Here">
                        <i class="fa fa-search" aria-hidden="true"></i>
                    </label>
                </div>
                <div class="user">
                    <img src="{{url('/frontend/images/dashboard.jpg')}}" alt="">
                </div>
            </div>

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
                    <div class="selectorDiv">
                        <div class="inputDiv">
                            <label class="inputLabel" for="cName">Email Address</label>
                            <input type="text" id="cName" name="cName" required>
                        </div>
                        <div class="inputDiv">
                            <label class="inputLabel" for="cName">Phone Number</label>
                            <input type="text" id="cName" name="cName" required>
                        </div>
                    </div>
                    <div class="selectorDiv1">
                        <div class="inputDiv1">
                            <label class="inputLabel" for="cName">Education Qualification</label>
                            <input type="text" id="cName" name="cName" required>
                        </div>
                    </div>
                    <div class="selectorDiv">
                        <div class="inputDiv">
                            <label class="inputLabel" for="cName">Degrees</label>
                            <input type="text" id="cName" name="cName" required>
                        </div>
                        <div class="inputDiv">
                            <label class="inputLabel" for="cName">Awards</label>
                            <input type="text" id="cName" name="cName" required>
                        </div>
                    </div>
                    <div class="inputDiv1">
                        <label class="inputLabel" for="cName">Bio</label>
                        <textarea class="form-control" rows="4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Labore vero enim error similique quia numquam ullam corporis officia odio repellendus aperiam consequatur laudantium porro voluptatibus, itaque laboriosam veritatis voluptatum distinctio!</textarea>
                    </div>
                    
                  
                        <div class="buttonWrapper">
                            <button type="submit" id="submitButton" onclick="validateSignupForm()" class="submitButton pure-button pure-button-primary">
                            <span>Update</span>
                            </button>
                        </div>
                </form>
                </div>
            </div>
        </div>

    <script src="{{url('/frontend/js/setting.js')}}"></script>
</body>
</html>