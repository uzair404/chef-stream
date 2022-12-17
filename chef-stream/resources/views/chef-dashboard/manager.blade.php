@extends('chef-dashboard.layouts.joiner')
@section('title') Courses Manager @endsection
@section('head')
<script src="https://cdn.tiny.cloud/1/k5sc85zjrd8oslr0012o0pb44lzxuk3utvhw4kxsz20a9u1e/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>
<script>
  tinymce.init({
    selector: 'textarea#myeditorinstance', 
    plugins: 'code table lists',
    toolbar: 'undo redo | blocks | bold italic | alignleft aligncenter alignright | indent outdent | bullist numlist | code | table'
  });
</script>
<link rel="stylesheet" href="{{url('/frontend/css/styleManager.css')}}">
@endsection

@section('main')

    <div class="cardBox">
        <div class="card">
            <div>
                <div class="numbers">0</div>
                <div class="cardName">Active Courses</div>
            </div>
            <div class="iconBox">
                <i class="fa fa-link" aria-hidden="true"></i>
            </div>
        </div>
        <div class="card">
            <div>
                <div class="numbers">0</div>
                <div class="cardName">Pending Courses</div>
            </div>
            <div class="iconBox">
                <i class="fa fa-chain-broken" aria-hidden="true"></i>
            </div>
        </div>
        <div class="card">
            <div>
                <div class="numbers">0</div>
                <div class="cardName">Free Courses</div>
            </div>
            <div class="iconBox">
                <i class="fa fa-star" aria-hidden="true"></i>
            </div>
        </div>
        <div class="card">
            <div>
                <div class="numbers">0</div>
                <div class="cardName">Paid Courses</div>
            </div>
            <div class="iconBox">
                <i class="fa fa-tags" aria-hidden="true"></i>
            </div>
        </div>
    </div>

    <div class="details">
        <div class="recentStudents">
            <div class="cardHeader">
                <h2>COURSE LIST</h2>
            </div>
            <form>
            </form>
            <table>
                <thead>
                    <tr class="table_hd">
                        <td>Course Level</td>
                        <td>Status</td>
                        <td>Price</td>
                    </tr>
                </thead>
                <tbody id='table_body'>
                    <tr>
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
                            <select class="inputLabel" id="cStatus" name="cStatus">
                                <option>Select</option>
                                <option value="1">All</option>
                                <option value="2">Active</option>
                                <option value="3">Pending</option>
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
                <h2>VIEW COURSES</h2>
            </div>
            <table>
                <thead>
                    <tr>
                        <td>Course Name</td>
                        <td>Course Level</td>
                        <td>Status</td>
                        <td>Price</td>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Food & Beverges</td>
                        <td>Beginner</td>
                        <td>Active</td>
                        <td>Paid</td>
                    </tr>
                    <tr>
                        <td>Principles of Baking Course</td>
                        <td>Beginner</td>
                        <td>Active</td>
                        <td>Free</td>
                    </tr>
                    <tr>
                        <td>Sanitation and Safety Course</td>
                        <td>Beginner</td>
                        <td>Active</td>
                        <td>Paid</td>
                    </tr>
                    <tr>
                        <td>Culinary Arts</td>
                        <td>Intermediate</td>
                        <td>Active</td>
                        <td>Paid</td>
                    </tr>
                    <tr>
                        <td>Cake Decoration and Design Course</td>
                        <td>Intermediate</td>
                        <td>Active</td>
                        <td>Free</td>
                    </tr>
                    <tr>
                        <td>European Cakes and Tortes Course</td>
                        <td>Advanced</td>
                        <td>Pending</td>
                        <td>Paid</td>
                    </tr>
                    <tr>
                        <td>Chocolate Desserts</td>
                        <td>Beginner</td>
                        <td>Active</td>
                        <td>Paid</td>
                    </tr>
                    <tr>
                        <td>Specialty Breads Course</td>
                        <td>Beginner</td>
                        <td>Active</td>
                        <td>Free</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>


@endsection

@section('scripts')
@endsection