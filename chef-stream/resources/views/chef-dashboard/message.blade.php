@extends('chef-dashboard.layouts.joiner')
@section('title') Messenger @endsection
@section('head')
<script src="https://cdn.tiny.cloud/1/k5sc85zjrd8oslr0012o0pb44lzxuk3utvhw4kxsz20a9u1e/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>
<script>
  tinymce.init({
    selector: 'textarea#myeditorinstance', 
    plugins: 'code table lists',
    toolbar: 'undo redo | blocks | bold italic | alignleft aligncenter alignright | indent outdent | bullist numlist | code | table'
  });
</script>
<style type="text/css">
    *{
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }:root {
        --clip: polygon(52% 65%, 100% 38%, 100% 0, 0 0, 0% 38%);
        --shadow:rgba(50, 50, 93, 0.25) 0px 30px 60px -12px, rgba(0, 0, 0, 0.3) 0px 18px 36px -18px;
        --c:#eaeaea;
        --g:#102132;
    }
</style>
<link rel="stylesheet" href="{{url('/frontend/css/styleMessage.css')}}">
@endsection

@section('main')

    <div class="box">
        <div class="left">
            <div class="top">
                <h2>CHATBOX</h2>
            </div>
            <div class="search_name">
                <input class="input_name" type="text" placeholder="Search or start new chat">
                <div class="search_icon">
                    <i class="fa fa-search" aria-hidden="true"></i>   
                </div> 
            </div>
            <ul class="ul">
                <li>
                    <div class="users">
                        <div class="user_image">
                            <img src="{{url('/frontend/images/dashboard.jpg')}}" class="ava">
                            <div>
                                <h3>Sana Khan</h3>
                                <p>Hi Alex!</p>
                            </div>
                            <div class="time"><p class="p">Today</p></div>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="users">
                        <div class="user_image">
                            <img src="{{url('/frontend/images/dashboard.jpg')}}" class="ava">
                            <div>
                                <h3>Sana Khan</h3>
                                <p>Hi Alex!</p>
                            </div>
                            <div class="time"><p class="p">Today</p></div>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="users">
                        <div class="user_image">
                            <img src="{{url('/frontend/images/dashboard.jpg')}}" class="ava">
                            <div>
                                <h3>Sana Khan</h3>
                                <p>Hi Alex!</p>
                            </div>
                            <div class="time"><p class="p">Today</p></div>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="users">
                        <div class="user_image">
                            <img src="{{url('/frontend/images/dashboard.jpg')}}" class="ava">
                            <div>
                                <h3>Sana Khan</h3>
                                <p>Hi Alex!</p>
                            </div>
                            <div class="time"><p class="p">Today</p></div>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="users">
                        <div class="user_image">
                            <img src="{{url('/frontend/images/dashboard.jpg')}}" class="ava">
                            <div>
                                <h3>Sana Khan</h3>
                                <p>Hi Alex!</p>
                            </div>
                            <div class="time"><p class="p">Today</p></div>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="users">
                        <div class="user_image">
                            <img src="{{url('/frontend/images/dashboard.jpg')}}" class="ava">
                            <div>
                                <h3>Sana Khan</h3>
                                <p>Hi Alex!</p>
                            </div>
                            <div class="time"><p class="p">Today</p></div>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="users">
                        <div class="user_image">
                            <img src="{{url('/frontend/images/dashboard.jpg')}}" class="ava">
                            <div>
                                <h3>Sana Khan</h3>
                                <p>Hi Alex!</p>
                            </div>
                            <div class="time"><p class="p">Today</p></div>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="users">
                        <div class="user_image">
                            <img src="{{url('/frontend/images/dashboard.jpg')}}" class="ava">
                            <div>
                                <h3>Sana Khan</h3>
                                <p>Hi Alex!</p>
                            </div>
                            <div class="time"><p class="p">Today</p></div>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="users">
                        <div class="user_image">
                            <img src="{{url('/frontend/images/dashboard.jpg')}}" class="ava">
                            <div>
                                <h3>Sana Khan</h3>
                                <p>Hi Alex!</p>
                            </div>
                            <div class="time"><p class="p">Today</p></div>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
        <div class="right">
            <div class="right_top">
                <div class="user_image">
                    <img src="{{url('/frontend/images/dashboard.jpg')}}" class="ava">
                    <div>
                        <h3>Sana Khan</h3>
                        <p>active 30 seconds ago..</p>
                    </div>
                </div>
            </div>
            <div class="mid">
                <div class="me">
                    <p>Hi! How are you?</p>
                </div>
                <div class="u">
                    <p>Hey! I am not dude. I am rude.</p>
                </div>
                <div class="me">
                    <p>Hi! How are you?</p>
                </div>
                <div class="u">
                    <p>Hey! I am not dude. I am rude.</p>
                </div>
                <div class="me">
                    <p>Hi! How are you?</p>
                </div>
                <div class="u">
                    <p>Hey! I am not dude. I am rude.</p>
                </div>
                <div class="me">
                    <p>Hi! How are you?</p>
                </div>
                <div class="u">
                    <p>Hey! I am not dude. I am rude.</p>
                </div>
                <div class="me">
                    <p>Hi! How are you?</p>
                </div>
                <div class="u">
                    <p>Hey! I am not dude. I am rude.</p>
                </div>
                <div class="me">
                    <p>Hi! How are you?</p>
                </div>
                <div class="u">
                    <p>Hey! I am not dude. I am rude.</p>
                </div>
                <div class="me">
                    <p>Hi! How are you?</p>
                </div>
                <div class="u">
                    <p>Hey! I am not dude. I am rude.</p>
                </div>
                <div class="me">
                    <p>Hi! How are you?</p>
                </div>
                <div class="u">
                    <p>Hey! I am not dude. I am rude.</p>
                </div>
                <div class="me">
                    <p>Hi! How are you?</p>
                </div>
                <div class="u">
                    <p>Hey! I am not dude. I am rude.</p>
                </div>
                <div class="me">
                    <p>Hi! How are you?</p>
                </div>
                <div class="u">
                    <p>Hey! I am not dude. I am rude.</p>
                </div>
                <div class="me">
                    <p>Hi! How are you?</p>
                </div>
                <div class="u">
                    <p>Hey! I am not dude. I am rude.</p>
                </div>
                <div class="me">
                    <p>Hi! How are you?</p>
                </div>
                <div class="u">
                    <p>Hey! I am not dude. I am rude.</p>
                </div>
                <div class="me">
                    <p>Hi! How are you?</p>
                </div>
                <div class="u">
                    <p>Hey! I am not dude. I am rude.</p>
                </div>
                <div class="me">
                    <p>Hi! How are you?</p>
                </div>
                <div class="u">
                    <p>Hey! I am not dude. I am rude.</p>
                </div>
            </div>
            <div class="bottom">
                <form>
                    <input class="in2" type="text" name="" placeholder="Type a message">
                </form>
                <div class="ico3"><i class="fa fa-paper-plane" aria-hidden="true"></i></div>
            </div>
        </div>
    </div>
    @endsection


