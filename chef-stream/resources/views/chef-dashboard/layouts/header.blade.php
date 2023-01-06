<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/002c1f1fc0.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="{{url("/frontend/css/all.css")}}">
    @yield('head')
    <title>@yield('title')</title>
    <style>
        .dropdown-item{
            display: block;
        }
        .dropdown-menu{
            background: white;
            padding: 5px;
            position: absolute;
            right: 3%;
            z-index: 20;
            border: 1px solid black;
            border-radius: 2%;
            /* display: none; */
        }
        #navbarDropdownMenuLink:hover + #dd-menu{display: block}
    </style>
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
                        <span class="title">Dashboard</span>
                    </a>
                </li>
                <li>
                    <a href="{{url('/dashboard/courses')}}">
                        <span class="icon"><i class="fa fa-book" aria-hidden="true"></i></span>
                        <span class="title">Course Verification</span>
                    </a>
                </li>
                <li>
                    <a href="{{url('/dashboard/manager')}}">
                        <span class="icon"><i class="fa fa-tasks" aria-hidden="true"></i></span>
                        <span class="title">Course Manager</span>
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
                    <a href="{{url('/dashboard/message')}}">
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
                    <form method="POST" action="{{ route('logout') }}" style="border: none">
                        @csrf

                        <x-dropdown-link :href="route('logout')"
                                onclick="event.preventDefault();
                                            this.closest('form').submit();">
                        <span class="icon"><i class="fa-solid fa-right-from-bracket"></i></span>
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
                <div>
                    <ul class="navbar-nav">
                        <li class="nav-item dropdown" style="list-style: none">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <div class="user">
                                <img id="top-menu-image" src="{{asset('/frontend/images/dashboard.jpg')}}" alt="">
                            </div>
                        </a>
                        <div style="display: none" class="dropdown-menu" id="dd-menu" aria-labelledby="navbarDropdownMenuLink">
                            <a class="dropdown-item" href="#">Switch to Student Dashboard</a>
                            <a class="dropdown-item" href="{{url('/dashboard/setting')}}">Setting</a>
                            <a class="dropdown-item" href="{{route('logout')}}">Log Out</a>
                        </div>
                        </li>   
                    </ul>
                </div>
            </div>
            <x-auth-validation-errors class="mb-4" :errors="$errors" />
            <x-auth-validation-success/>