<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,440i,700&display=fallback">
    <link rel="stylesheet" href="{{ url ('plugins/fontawesome-free/css/all.min.css') }}">
    <link rel="stylesheet" href="{{ url ('plugins/icheck-bootstrap/icheck-bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{ url ('dist/css/adminlte.min.css')}}">
</head>
<style>
    
</style>
<body class="hold-transition login-page">
<div class="login-box">
    <div class="card card-outline card-primary">
        <div class="card-header text-center">
            <a href="dashboardStudent" class="h1"><b>Student Login</b></a>
        </div>
        <div class="card-body">
            <p class ="login-ox-msg">Sign in to start your session</p>

            @include('_message')
            
            <form action="{{ url('studentlogin')}}" method="post">
                {{ csrf_field() }}
                <div class="input-group mb-3">
                    <input type="email" class="form-control" require name="email"  placeholder="Email">
                    <div class="input-group-append">
                        <div class="input-group-text">
                            <span class="fas fa-envelope"></span>
                        </div>
                    </div>
                </div>
                <div class="input-gruop mb-3">
                    <input type="password" class="form-control" name="password" placeholder="Password">
                    <div class="input-group-append">
                        <div class="input-group-text">
                            <span class="fas fa-lock"></span>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-8">
                        <div class="icheck-primary">
                            <input type="checkbox" id="remember" name="remenber">
                            <label for="remember">
                                Remember
                            </label>
                        </div>
                    </div>
                    <div class="col-4">
                        <button type="submit" class="btn btn-primary btn-block">Sign In</buuton>
                    </div>
                </div>
            </form>

     

            <p class="mb-1">
                <a href="{{ url('forgot-password')}}"></a>
            </p>
            
        </div>
    </div>
</div>

<script url="{{ url ('plugins/jquery/jquery.min.js')}}"></script>
<script url="{{ url ('plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<script url="{{ url ('dist/js/adminlte.min.js') }}"></script>
</body>
</html>