<?php
//ob_start();
?>
<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
    <link rel="stylesheet" type="text/css" href="{{'admin/css/bootstrap.min.css'}}">
    <link rel="stylesheet" type="text/css" href="{{'admin/css/style.css'}}">
    <link rel="stylesheet" type="text/css" href="{{'admin/css/custom.css'}}">
    <link href="https://fonts.googleapis.com/css?family=Poppins:600&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/a81368914c.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
<img class="wave" src="{{url('/admin/img/login_img/wave.png')}}">
<div class="container">
    <div class="img">
        <img src="{{url('/admin/img/login_img/bg.svg')}}">
    </div>
    <div class="login-content">
        <form action="{{route('admin.login')}}" method="POST">
            @csrf
            <img src="{{url('/admin/img/login_img/avatar.svg')}}">
           @include('errors.error_success')

            <div class="input-div one">
                <div class="i">
                    <i class="fas fa-user"></i>
                </div>
                <div class="div">
                    <h5>Email</h5>
                    <input type="text" class="input" name="email" value="{{old('email')}}" autocomplete="false">
                </div>
            </div>
            <div class="input-div pass">
                <div class="i">
                    <i class="fas fa-lock"></i>
                </div>
                <div class="div">
                    <h5>Password</h5>
                    <input type="password" class="input" name="pass" value="{{old('pass')}}">
                </div>
            </div>
           <!-- <a href="#">Forgot Password?</a>    -->
            <input type="submit" class="btn" value="Login">
        </form>
    </div>
</div>
<script type="text/javascript" src="{{url('/admin/js/jquery-3.2.1.min.js')}}"></script>
<script type="text/javascript" src="{{url('/admin/js/popper.min.js')}}"></script>

<script type="text/javascript" src="{{url('/admin/js/bootstrap.min.js')}}"></script>
<script type="text/javascript" src="{{url('/admin/js/main.js')}}"></script>
</body>
</html>
<?php
//ob_end_flush();
//header( "refresh:5;url=wherever.php" );
?>
