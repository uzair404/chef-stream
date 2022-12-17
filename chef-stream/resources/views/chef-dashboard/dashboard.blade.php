@extends('chef-dashboard.layouts.joiner')
@section('title') Dashboard @endsection
@section('head')
<link rel="stylesheet" href="{{url('/frontend/css/dashboard.css')}}">
@endsection

@section('main')

            <div class="cardBox">
                <div class="card">
                    <div>
                        <div class="numbers">Profile</div>
                        <div class="cardName"><a href="{{url('dashboard/setting')}}" id="view-btn">View Profile</a></div>
                    </div>
                    <div class="iconBox">
                        <i class="fa-solid fa-eye"></i>
                    </div>
                </div>
                <div class="card">
                    <div>
                        <div class="numbers">56</div>
                        <div class="cardName"><a href="{{url('dashboard/student')}}" id="view-btn">View Students</a></div>
                    </div>
                    <div class="iconBox">
                        <i class="fa fa-users" aria-hidden="true"></i>
                    </div>
                </div>
                <div class="card">
                    <div>
                        <div class="numbers">5</div>
                        <div class="cardName"><a href="{{url('dashboard/manager')}}" id="view-btn">View Courses</a></div>
                    </div>
                    <div class="iconBox">
                        <i class="fa fa-book" aria-hidden="true"></i>
                    </div>
                </div>
                <div class="card">
                    <div>
                        <div class="numbers">RS 16,040</div>
                        <div class="cardName"><a href="#" id="view-btn">View Payment</a></div>
                    </div>
                    <div class="iconBox">
                        <i class="fa-solid fa-credit-card"></i>
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

    
    @endsection

    @section('scripts')
    @endsection