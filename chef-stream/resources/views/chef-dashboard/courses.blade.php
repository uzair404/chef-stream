@extends('chef-dashboard.layouts.joiner')
@section('title') Courses @endsection
@section('head')
<link rel="stylesheet" href="{{url('/frontend/css/styleCourses.css')}}">
@endsection

@section('main')

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
                                    {{-- generate 15 options of 1-15 --}}
                                    @for ($i = 1; $i < 16; $i++)
                                    <option value='{{$i}}'>{{$i}}</option>
                                    @endfor
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
                        <label class="inputLabel" for="amount">Amount</label>
                        <input type="text" name="amount" onkeypress="return required>
                    </div>
                    
                        <div class="buttonWrapper">
                            <button type="submit" id="submitButton"class="submitButton pure-button pure-button-primary">
                            <span>Verify Course</span>
                        </button>
                    </div>
                </form>
                </div>
            </div>


@endsection

@section('scripts')
@endsection