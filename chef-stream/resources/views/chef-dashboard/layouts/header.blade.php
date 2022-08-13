<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" 
    integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous"/>
    <link rel="stylesheet" href="{{url("/frontend/css/all.css")}}">
    @yield('head')
    <title>@yield('title')</title>
</head>
<body>
    
    <div class="container">
        <div class="navigation">
            <ul>
                <li>
                    <a href="/">
                        <span class="icon"></span>
                        <span class="title"><h2>Chef Stream</h2></span>
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
                    <img src="{{asset('/frontend/images/dashboard.jpg')}}" alt="">
                </div>
            </div>
            <x-auth-validation-errors class="mb-4" :errors="$errors" />