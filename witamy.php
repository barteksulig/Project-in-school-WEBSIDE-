<?php
session_start();



 ?>
<!DOCTYPE html>
<html lang="pl" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Wszystko o procesorach</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css2?family=Dosis:wght@600&display=swap" rel="stylesheet">
     <script src="https://www.google.com/recaptcha/api.js"></script>
     <style>
       .korwin{
         margin-left: auto;
         margin-right: auto;
         width: 500px;
       }
     </style>
  </head>
  <body>
   <div class="container">
    <div class="header">
      <div class="logo">
        <img src="proc.png" style="float: left;"><span style="color: #FF0000;">CPU</span>HELP
      </div>
    </div>
    <div class="nav">
      <ol>
        <li><a href="main.php">Strona główna</a></li>
        <li><a href="#">Promocje CPU</a>
          <ul>
            <li><a href="#">Polecane stony</a></li>
            <li><a href="#">Polecane CPU</a></li>
            <li><a href="#">Polecane Pasty</a></li>
            <li><a href="#">Polecane wentylatory</a></li>
            <li><a href="#">Nasze kody rabatowe</a></li>
          </ul>
        </li>
        <li><a href="#">Porady</a></li>
        <li><a href="#">Problemy CPU</a></li>
        <li><a href="#">O nas</a></li>
        <li><a href="logowanie.php">Dołącz do nas</a></li>
        </ol>
    </div>
    <div class="content">
      <img src="dziekuje.jpg" class="korwin">

         </div>
       </form>
                </div>
       <div class="rejj">
         <h1>Dziękuje za rejestracje  !!</h1>
        <h1><a href="logowanie.php" style="  text-decoration: none"><span style="color: red;">Zaloguj</span>się ! </a> </h1>

       </div>

    </div>
    <div class="footer"><span style="color: #FF0000;">CPU</span>HELP Serwis pomocy !</div>
   </div>

 	<script src="jquery-1.11.3.min.js"></script>

 	<script>

 	$(document).ready(function() {
 	var NavY = $('.nav').offset().top;

 	var stickyNav = function(){
 	var ScrollY = $(window).scrollTop();

 	if (ScrollY > NavY) {
 		$('.nav').addClass('sticky');
 	} else {
 		$('.nav').removeClass('sticky');
 	}
 	};

 	stickyNav();

 	$(window).scroll(function() {
 		stickyNav();
 	});
 	});

 </script>

  </body>
</html>
