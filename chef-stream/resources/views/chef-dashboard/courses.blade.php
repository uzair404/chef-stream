<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" 
    integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous"/>
    <link rel="stylesheet" href="{{url('/frontend/css/styleCourses.css')}}">
    <title>Courses</title>
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
                    <img src="user.jpg" alt="">
                </div>
            </div>

            <div class="mainDiv">
                <div class="cardStyle">
                    <form action="" method="post" name="signupForm" id="signupForm">
                        <h2 class="formTitle">
                            Courses Registration
                        </h2>
                    
                        <div class="inputDiv">
                            <label class="inputLabel" for="cName">Course Name</label>
                            <input type="text" id="cName" name="cName" required>
                        </div>
                    <div class="selectorDiv">
                        <div class="inputDiv1">
                            <label class="inputLabel1" for="students">No. of Students</label>
                            <select name="students" id="students" name="students">
                                <option>Select</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                                <option value="6">6</option>
                                <option value="7">7</option>
                                <option value="8">8</option>
                                <option value="9">9</option>
                                <option value="10">10</option>
                                <option value="11">11</option>
                                <option value="12">12</option>
                                <option value="13">13</option>
                                <option value="14">14</option>
                                <option value="15">15</option>
                            </select>
                        </div>
                        <div class="inputDiv1">
                            <label class="inputLabel1" for="cDuration">Course Duration</label>
                            <select name="students" id="cDuration" name="cDuration">
                                <option>Select</option>
                                <option value="1">3 Days</option>
                                <option value="2">7 Days</option>
                                <option value="3">12 Days</option>
                                <option value="4">15 Days</option>
                                <option value="5">20 Days</option>
                                <option value="6">1 Month</option>
                                <option value="7">2 Month</option>
                                <option value="8">3 Month</option>
                                <option value="9">4 Month</option>
                            </select>
                        </div>
                    </div>
                        <div class="weekDays-selector ml-5">
                            <label class="inputLabel" for="days">Days in a Week</label>
                            <input type="checkbox" id="weekday-sun" class="weekday">
                            <label for="weekday-sun">S</label>
                            <input type="checkbox" id="weekday-mon" class="weekday">
                            <label for="weekday-mon">M</label>
                            <input type="checkbox" id="weekday-tue" class="weekday">
                            <label for="weekday-tue">T</label>
                            <input type="checkbox" id="weekday-wed" class="weekday">
                            <label for="weekday-wed">W</label>
                            <input type="checkbox" id="weekday-thu" class="weekday">
                            <label for="weekday-thu">T</label>
                            <input type="checkbox" id="weekday-fri" class="weekday">
                            <label for="weekday-fri">F</label>
                            <input type="checkbox" id="weekday-sat" class="weekday">
                            <label for="weekday-sat">S</label>
                        </div>
                    <div class="selectorDiv">
                        <div class="inputDiv2">
                            <label class="inputLabel" for="startDate">Start Date</label>
                            <input type="date" data-date-inline-picker="true" id="startDate" name="startDate" required>
                        </div>
                        <div class="inputDiv2">
                            <label class="inputLabel" for="endDate">End Date</label>
                            <input type="date" data-date-inline-picker="true" id="endDate" name="endDate" required>
                        </div>
                    </div>
                        <div class="inputDiv3">
                            <label class="inputLabel" for="confirmPassword">Amount</label>
                            <input type="text" onkeypress="return isNumberKey(event)" required>
                        </div>
                  
                        <div class="buttonWrapper">
                            <button type="submit" id="submitButton" onclick="validateSignupForm()" class="submitButton pure-button pure-button-primary">
                            <span>Verify Course</span>
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        
    <script src="{{url('/frontend/js/courses.js')}}"></script>
</body>
</html>