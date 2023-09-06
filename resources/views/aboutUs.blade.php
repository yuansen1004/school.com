@extends('app')
@section('content')
<style>
    body{
        background-color: grey;
    }

    .page-title{
        margin-left: 1000px;
        margin-bottom: -15px;
    }

    .subtitle{
        margin-left: 400px;
        margin-bottom: 5px;
        font-size: 30px;

    }
    .main-image{
        width:900px;
        height:550px;
        margin-left: 400px;
        margin-bottom: 5px;
    }
</style>




<html>
  <head>
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700&display=swap" rel="stylesheet">
    
    <script src="https://kit.fontawesome.com/8fe048c345.js" crossorigin="anonymous"></script>
  </head>
  <body>

    <main class="main-grid" class="content-wrapper">
      
            <div class="head">
            <h1 class="page-title">About us</h1><br>
            <p class="subtitle"> A student attendance system is a technology-based solution used by educational institutions to track and manage the attendance of students. The primary purpose of such a system is to ensure accurate and efficient attendance recording, which can help institutions maintain records, monitor student participation, and address issues related to absenteeism.</p>
            </div>
            <img class="main-image" src="https://images.unsplash.com/photo-1523908511403-7fc7b25592f4?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=600&q=60" alt="two men in a coworking space">
            
            
      
    </main>
  
    
    <footer class="footer main-grid">
      <div class="footer-text">
        
        <p class="copyright">© EZ </p>
      </div>
      <div class="social">
        <a href="#" class="facebook icon" ><i class="fab fa-facebook-f" fill="currentColor"></i></a>
        <a href="#" class="twitter icon" ><i class="fab fa-twitter" fill="currentColor"></i></a>
        <a href="#" class="instagram icon"><i class="fab fa-instagram" fill="currentColor"></i></a>
      </div>
    </footer>
  </body>
</html>







@endsection