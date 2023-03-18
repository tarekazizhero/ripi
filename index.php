<!DOCTYPE html>
<html lang="en">
<meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Ranisankail Ideal Polytechnic Institute</title>


<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

<link rel="stylesheet" href=" headerimage.css">
<script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">


<body>

<div >
    <div class ="row">
        <div class="col-3">
        <img src="image/logo.jpg" style="width:50%">

        </div>
        <div class="col-8">
            
        <h1 > <b> Ranisankail Ideal Polytechnic Institute</b> </h1>
        <h1 > <b>রাণীশংকৈল আইডিয়াল পলিটেকনিক ইনস্টিটিউট</b> </h1>
        <h5 ><b>College Code:12143</b></h5>
        </div>
    </div>

</div>
<br>

<!-- menubar start-->
<nav>
        <input type="checkbox" id="check">
        <label for="check" class="checkbtn">
            <i class="fas fa-bars"></i>
        </label>
        
        <ul>
            <li><a class="active" href="index.php">Home</a></li>
            <li><a href="teacherinfoShow.php">Instructors</a></li>
            <li><a href="login.php">Student Login</a></li>
            <li><a href="user.php">Student Registration</a></li>
            <li><a href="notice.php">Notice</a></li>
            <li><a href="admission.php">Admission</a></li>
            <li><a href="stdinfoShow.php">Students details</a></li>
            <li><a href="admin.php">Admin</a></li>
        </ul>
    </nav>

<!-- menubar stop-->

<br>
<div>
<p><b>Institute Map Location-> </b><a href="https://www.google.com/maps/d/viewer?mid=1Dn05jKVkkFO-1pMcELzTKW1hPWU&hl=en&ll=25.889698452793503%2C88.26781943102223&z=22"><i class="fas fa-location"></i></a></p>
<p><b>Institute Overview</b></p>
</div>


<!--galary photo screen start -->
<div class="container">
  <div class="mySlides">
    <div class="numbertext">1 / 6</div>
    <img src="image/1.jpg" style="width:100%">
  </div>

  <div class="mySlides">
    <div class="numbertext">2 / 6</div>
    <img src="image/2.jpg" style="width:100%">
  </div>

  <div class="mySlides">
    <div class="numbertext">3 / 6</div>
    <img src="image/3.jpg" style="width:100%">
  </div>
    
  <div class="mySlides">
    <div class="numbertext">4 / 6</div>
    <img src="image/4.jpg" style="width:100%">
  </div>

  <div class="mySlides">
    <div class="numbertext">5 / 6</div>
    <img src="image/5.jpg" style="width:100%">
  </div>
    
  <div class="mySlides">
    <div class="numbertext">6 / 6</div>
    <img src="image/6.jpg" style="width:100%">
  </div>
    
  <a class="prev" onclick="plusSlides(-1)">❮</a>
  <a class="next" onclick="plusSlides(1)">❯</a>

  <div class="caption-container">
    <p id="caption"></p>
  </div>

  <div class="row">
    <div class="column">
      <img class="demo cursor" src="image/1.jpg" style="width:100%" onclick="currentSlide(1)" alt="Campus">
    </div>
    <div class="column">
      <img class="demo cursor" src="image/2.jpg" style="width:100%" onclick="currentSlide(2)" alt="Computer Lab">
    </div>
    <div class="column">
      <img class="demo cursor" src="image/3.jpg" style="width:100%" onclick="currentSlide(3)" alt="Electrical Lab 1">
    </div>
    <div class="column">
      <img class="demo cursor" src="image/4.jpg" style="width:100%" onclick="currentSlide(4)" alt="Scholarships">
    </div>
    <div class="column">
      <img class="demo cursor" src="image/5.jpg" style="width:100%" onclick="currentSlide(5)" alt="Campus details">
    </div>    
    <div class="column">
      <img class="demo cursor" src="image/6.jpg" style="width:100%" onclick="currentSlide(6)" alt="Electrical lab 2">
    </div>
  </div>
</div>

<script>
let slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  let i;
  let slides = document.getElementsByClassName("mySlides");
  let dots = document.getElementsByClassName("demo");
  let captionText = document.getElementById("caption");
  if (n > slides.length) {slideIndex = 1}
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";
  }
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";
  dots[slideIndex-1].className += " active";
  captionText.innerHTML = dots[slideIndex-1].alt;
}
</script>

<!--galary photo screen end -->




<?php require 'body/body1.php'; ?>




<!-- footer started -->
<footer>
  <div >
    <h2>Ranisankail Ideal Polytechnic Institute</h2>
  </div>
  <div class="icon">
    <a href="https://www.facebook.com/profile.php?id=100065750499334"><i class="fa-brands fa-facebook"></i></a>
  <a href="https://whatsapp.com/"><i class="fa-brands fa-whatsapp"></i></a>
  <a href="https://www.youtube.com/"><i class="fa-brands fa-youtube"></i></a>
  <a href="https://www.google.com/"><i class="fa-brands fa-google"></i></a>
  
  </div>

  <div class="copy">
    copyright @2023 by-RIPI
  </div>

 
</footer>

<footer>


 <div class="address">
  <p>Institute Address:</p>
  <p>বড় মসজিদের বিপরীত পার্শ্বে,</p>
  <p>(ডাবতলী মোড় থেকে ১০০ গজ দক্ষিণে),</p>
  <p>রাণীশংকৈল, ঠাকুরগাঁও।</p>
  <p>Ranisankail, Thakurgaon-5120</p>
  <p>contact:01737110188,01737032725</p>
  <p>Email:ripipolytechnic@gmail.com</p>

 </div>

  <div class="devloper">
    <p>Devloped By</p>
    <a href="https://www.facebook.com/tarek.aziz.925602"><i class="fa-brands fa-facebook"></i></a>

    <p>Md.Tarek Aziz</p>
    <p>B.Sc.(Engg.) in CSE</p>
    
    
    <p>Contact:01521751029</p>
    
</div>

</footer>
<!-- footer started -->


    
</body>
</html>




