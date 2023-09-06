@extends('app')

@section('content')

<style>
  img{
    margin-left: 300px;
  }
  *{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: 'Poppins', sans-serif;
}
</style>

<script>
    var slideIndex = 0;
carousel();

function carousel() {
  var i;
  var x = document.getElementsByClassName("mySlides");
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";
  }
  slideIndex++;
  if (slideIndex > x.length) {slideIndex = 1}
  x[slideIndex-1].style.display = "block";
  setTimeout(carousel, 2000); // Change image every 2 seconds
}
</script>


<img class="mySlides" src="{{asset('images/school.jpg')}}" width="1900px "height="1250px" alt="Hibbing High School in Hibbing, Minnesota">
<img class="mySlides" src="{{asset('images/Hibbing.jpg')}}"width="1900px" height="1250px" alt="Hibbing High School in Hibbing, Minnesota">
<img class="mySlides" src="{{asset('images/HibbingHS.jpg')}}"width="1900px" height="1250px" alt="Hibbing High School in Hibbing, Minnesota">
<img class="mySlides" src="{{asset('images/ad.jpg')}}"width="1900px" height="1250px" alt="Hibbing High School in Hibbing, Minnesota">
  @endsection