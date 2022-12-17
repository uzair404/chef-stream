@extends('chef-dashboard.layouts.joiner')
@section('title') View Students @endsection
@section('head')
<link rel="stylesheet" href="{{url('/frontend/css/styleStudent.css')}}">
@endsection

@section('main')

    <div class="details">
        <div class="recentStudents">
            <div class="cardHeader">
                <h2>STUDENT LIST</h2>
            </div>
            <form>
            </form>
            <table>
                <thead>
                    <tr class="table_hd">
                        <td>Course Name</td>
                        <td>Course Level</td>
                        <td>Price</td>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>
                            <div class="input-fields">
                                <input type="text" class="input">
                            </div>
                        </td>
                        <td>
                            <select class="inputLabel" id="cLevel" name="cLevel">
                                <option>Select</option>
                                <option value="1">All</option>
                                <option value="2">Beginner</option>
                                <option value="3">Intermediate</option>
                                <option value="4">Advanced</option>
                            </select>
                        </td>
                        <td>
                            <select class="inputLabel" id="cPrice" name="cPrice">
                                <option>Select</option>
                                <option value="1">All</option>
                                <option value="2">Free</option>
                                <option value="3">Paid</option>
                            </select>
                        </td>
                        <td><a href="#" class="btn">Search</a></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

    <div class="details">
        <div class="recentStudents">
            <div class="cardHeader">
                <h2>VIEW STUDENTS</h2>
            </div>
            <table>
                <thead>
                    <tr>
                        <td>Student Name</td>
                        <td>Course Name</td>
                        <td>Course Level</td>
                        <td>Status</td>
                        <td>Price</td>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Ali Murtaza</td>
                        <td>Food & Beverges</td>
                        <td>Beginner</td>
                        <td>Active</td>
                        <td>Paid</td>
                    </tr>
                    <tr>
                        <td>Ali Zaidi</td>
                        <td>Food & Beverges</td>
                        <td>Beginner</td>
                        <td>Active</td>
                        <td>Paid</td>
                    </tr>
                    <tr>
                        <td>Hifza Khan</td>
                        <td>Food & Beverges</td>
                        <td>Beginner</td>
                        <td>Active</td>
                        <td>Paid</td>
                    </tr>
                    <tr>
                        <td>Quaisar Shakeel</td>
                        <td>Food & Beverges</td>
                        <td>Beginner</td>
                        <td>Active</td>
                        <td>Paid</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

@endsection