@extends('chef-dashboard.layouts.joiner')
@section('title') Courses @endsection
@section('head')
<script src="https://cdn.tiny.cloud/1/k5sc85zjrd8oslr0012o0pb44lzxuk3utvhw4kxsz20a9u1e/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>
<script>
  tinymce.init({
    selector: 'textarea#myeditorinstance', 
    plugins: 'code table lists',
    toolbar: 'undo redo | blocks | bold italic | alignleft aligncenter alignright | indent outdent | bullist numlist | code | table'
  });
</script>
<link rel="stylesheet" href="{{url('/frontend/css/styleCourses.css')}}">
@endsection

@section('main')

<div class="mainDiv">
    <div class="cardStyle">
        <form action="" method="post" name="signupForm" id="signupForm">
            <h2 class="formTitle">
                Courses Verification
                        </h2>
                        
                        <div class="inputDiv">
                            <label class="inputLabel" for="cName">Course Name</label>
                            <input type="text" id="cName" name="cName" required>
                        </div>
                        <div class="inputDiv4">
                            <label class="inputLabel" for="cName">Course Curriculum</label>
                            <textarea id="myeditorinstance" class="form-control" rows="7">Formulas and Measurement &#13;&#10;Baker’s Percentages &#13;&#10;Mixing and Gluten Development &#13;&#10;The Baking Process &#13;&#10;Staling &#13;&#10;Fats &#13;&#10;Sugars &#13;&#10;Liquids &#13;&#10; Eggs&#13;&#10; Leavening Agents&#13;&#10; Salt, Flavorings, and Spices&#13;&#10; Types of Dough&#13;&#10; Gluten Development in Quick&#13;&#10; Breads&#13;&#10; Biscuit Method&#13;&#10; Make up of Biscuits&#13;&#10; The Muffin Method</textarea>
                        </div>
                        <div class="inputDiv4">
                            <label class="inputLabel" for="cName">Course Description</label>
                            <textarea class="form-control" rows="7">The optimal Certificate Course which spans through a duration of 6 months, covering not only basics but also some mid-level units. Each individual unit is refined to match the requirement of anyone seeking a professional training course in the baking division. Each unit is carefully adjusted to meet the minimum requirements.</textarea>
                        </div>
                        <div class="inputDiv4">
                            <label class="inputLabel" for="cName">Learning Outcomes</label>
                            <textarea id="myeditorinstance" class="form-control" rows="7">Surface level knowledge of the Hospitality Industry, including hotels, their types, their various departments and basics the basic operating procedures. &#13;&#10;Management of operations, services and safety in a professional Kitchen. &#13;&#10;Fundamentals of basic accounting and how to utilize them in the food industry (costing, culinary mathematics etc). &#13;&#10;Practical culinary basics such as Knife Handling, Cutting, Seasoning, Plating, Garnishing etc. &#13;&#10;Learning the basics of baking and the ingredients and equipment revolving it. &#13;&#10;Following these units are a series of practical units which will include all base-level baking and a significant amount of mid-level recipes. &#13;&#10;It consists of an outline similar to that of SBP-03 with the exception of some of the mid-level units. &#13;&#10;This program covers practical units including biscuits, cookies, cakes, dough products etc.</textarea>
                        </div>
                        <div class="inputDiv4">
                            <label class="inputLabel" for="cDuration">Course Level</label>
                            <select name="students" id="cDuration" name="cDuration">
                                <option>Select</option>
                                <option value="1">Beginner</option>
                                <option value="2">Intermediate</option>
                                <option value="3">Advanced</option>
                            </select>
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
                    <div class="inputDiv4">
                        <label class="inputLabel" for="cDuration">Language Mode</label>
                        <select name="students" id="cDuration" name="cDuration">
                            <option>Select</option>
                            <option value="1">English</option>
                            <option value="2">Urdu</option>
                            <option value="3">Sindhi</option>
                            <option value="4">Arabic</option>
                        </select>
                    </div>
                    <div class="inputDiv3">
                        <label class="inputLabel" for="amount">Course Price <strong>(Rs)</strong></label>
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