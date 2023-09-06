<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forget Password</title>

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
            <a href="" class="h1"><b>Forget Password</b></a>
        </div>
        <div class="card-body">    

            @include('_message')
            
            <form action="" method="post">
                {{ csrf_field() }}
                <div class="input-group mb-3">
                    <input type="email" class="form-control" require name="email"  placeholder="Email">
                    <div class="input-group-append">
                        <div class="input-group-text">
                            <span class="fas fa-envelope"></span>
                        </div>
                    </div>
                </div>
                
                <div class="row">
                    
                    <div class="col-4">
                        <button type="submit" class="btn btn-primary btn-block">Forget</buuton>
                    </div>
                </div>
            </form>

     

            <p class="mb-1">
                <br>
                <a href="{{ url('')}}">Login</a>
            </p>
            
        </div>
    </div>
</div>

<script url="{{ url ('plugins/jquery/jquery.min.js')}}"></script>
<script url="{{ url ('plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<script url="{{ url ('dist/js/adminlte.min.js') }}"></script>
</body>
</html>