<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous"/>
    <link rel="stylesheet" href="{{url('/frontend/css/dashboard.css')}}">
    <title>Home Page</title>
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

            <div class="cardBox">
                <div class="card">
                    <div>
                        <div class="numbers">Profile</div>
                        <div class="cardName"><a href="#" id="view-btn">View Profile</a></div>
                    </div>
                    <div class="iconBox">
                        <i class="fa fa-eye" aria-hidden="true"></i>
                    </div>
                </div>
                <div class="card">
                    <div>
                        <div class="numbers">56</div>
                        <div class="cardName"><a href="#" id="view-btn">View Students</a></div>
                    </div>
                    <div class="iconBox">
                        <i class="fa fa-users" aria-hidden="true"></i>
                    </div>
                </div>
                <div class="card">
                    <div>
                        <div class="numbers">5</div>
                        <div class="cardName"><a href="#" id="view-btn">View Messages</a></div>
                    </div>
                    <div class="iconBox">
                        <i class="fa fa-comment" aria-hidden="true"></i>
                    </div>
                </div>
                <div class="card">
                    <div>
                        <div class="numbers">$6,040</div>
                        <div class="cardName"><a href="#" id="view-btn">View Payment</a></div>
                    </div>
                    <div class="iconBox">
                        <i class="fa fa-credit-card" aria-hidden="true"></i>
                    </div>
                </div>
            </div>

            <div class="details">
                <div class="recentStudents">
                    <div class="cardHeader">
                        <h2>Recent Students</h2>
                        <a href="#" class="btn">View All</a>
                    </div>
                    <table>
                        <thead>
                            <tr>
                                <td>Student Name</td>
                                <td>Course</td>
                                <td>Price</td>
                                <td>Payment</td>
                                <td>Status</td>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Ali Murtaza</td>
                                <td>Food & Beverges</td>
                                <td>Rs 30000</td>
                                <td>Paid</td>
                                <td><span class="status delivered">Delivered</span></td>
                            </tr>
                            <tr>
                                <td>Sana Bilal</td>
                                <td>Culinary Arts</td>
                                <td>Rs 20000</td>
                                <td>Paid</td>
                                <td><span class="status pending">Pending</span></td>
                            </tr>
                            <tr>
                                <td>Sadia Nasir</td>
                                <td>Culinary Arts</td>
                                <td>Rs 20000</td>
                                <td>Paid</td>
                                <td><span class="status return">Return</span></td>
                            </tr>
                            <tr>
                                <td>Laiba Hanif</td>
                                <td>Choclate Desserts</td>
                                <td>Rs 12000</td>
                                <td>Paid</td>
                                <td><span class="status inprogress">In Progress</span></td>
                            </tr>
                            <tr>
                                <td>Ali Zaidi</td>
                                <td>Food & Beverges</td>
                                <td>Rs 30000</td>
                                <td>Paid</td>
                                <td><span class="status delivered">Delivered</span></td>
                            </tr>
                            <tr>
                                <td>Hifza Khan</td>
                                <td>Food & Beverges</td>
                                <td>Rs 30000</td>
                                <td>Paid</td>
                                <td><span class="status delivered">Pending</span></td>
                            </tr>
                            <tr>
                                <td>Suleman Nasir</td>
                                <td>Choclate Desserts</td>
                                <td>Rs 12000</td>
                                <td>Paid</td>
                                <td><span class="status return">Return</span></td>
                            </tr>
                            <tr>
                                <td>Quaisar Shakeel</td>
                                <td>Food & Beverges</td>
                                <td>Rs 30000</td>
                                <td>Paid</td>
                                <td><span class="status inprogress">In Progress</span></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <script src="{{url('/frontend/js/dashboard.js')}}"></script>
</body>
</html>