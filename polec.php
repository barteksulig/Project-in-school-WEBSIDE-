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
    <style media="screen">
    .content a{
      text-decoration: none;
      padding-left: 300px;
      float: left;
      color: red;
    }
    .content img{
      float: left;
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
        <li><a href="CPU.php">CPU</a>
          <ul>
            <li><a href="polec.php">Polecane CPU</a></li>
            <li><a href="pasty.php">Polecane Pasty</a></li>
              <li><a href="wpisy.php">Wypisy</a></li>
          </ul>
        </li>
        <li><a href="porady.php">Porady</a></li>
        <li><a href="problemy.php">Problemy CPU</a></li>
        <li><a href="onas.php">O nas</a></li>
        <?php
        if((isset($_SESSION['zalogowany'])) && ($_SESSION['zalogowany']==true)) {
          echo '<li><a href="panel.php">'.$_SESSION['nick'].'</a></li>';
          echo '<li><a href="logout.php">Wyloguj się</a></li>';
        }
        else {
          echo '<li><a href="logowanie.php">Dołącz do nas</a></li>';
        }
         ?>
     </ol>
    </div>
    <div class="content">
     <h1>AMD Ryzen 5</h1>
     <p>Linia procesorów AMD Ryzen 5 obejmuje jednostki ze średniej półki cenowej, które są dość uniwersalne i odpowiednie do większości zastosowań.
        Ich dopracowane parametry techniczne i rozsądna cena to czynniki, które powodują, że procesory Ryzen 5 są chętnie wybierane do komputerów domowych
         i dla graczy. Jednostki te mogą dysponować 4 lub 6 rdzeniami, co przekłada się na wysoką sprawność podczas bardziej skomplikowanych działań.</p>
         <img src="d1.png" class="d1" alt=""> <h1> <a href="https://www.morele.net/procesor-amd-ryzen-5-3600-3-6ghz-32-mb-box-100-100000031box-5938599/">Link do strony</a> </h1> <br><br><br>
    <h1>Procesor Intel Core i5-9400F</h1>
    <p>Linia procesorów Intel Core i5 obejmuje jednostki ze średniej półki cenowej. Są to procesory o dość uniwersalnych parametrach – odpowiednie do pracy biurowej, projektowania,
       gier i wielu innych zastosowań. Procesory Intel Core i5 mają do dyspozycji cztery lub nawet sześć rdzeni, co wpływa korzystnie na komfort ich codziennego użytkowania.
       Jednostki te są chętnie wybierane do komputerów domowych, biurowych, multimedialnych i gamingowych.</p>
       <img src="d2.png" alt=""> <h1> <a href="https://www.morele.net/procesor-intel-core-i5-9400f-2-9ghz-9-mb-box-bx80684i59400f-5668892/">Link do strony</a> </h1> <br><br><br>
       <h1>Procesor Intel Pentium Gold G5400</h1>
       <p>Linia procesorów Intel Pentium obejmuje jednostki budżetowe, które jednak mogą być bardzo dobrym wyborem do komputerów domowych i biurowych.
       Współczesne procesory Intel Pentium oferują najczęściej 2 rdzenie i 4 wątki, co pozwala ich na komfortowe użytkowanie podczas pracy i przeglądania stron internetowych.
       Wybrane modele procesorów Intel Pentium mogą zaoferować nawet 4 rdzenie, co przekłada się na ich jeszcze lepszą wydajność.</p>
       <img src="d3.png" alt=""> <h1> <a href="https://www.morele.net/procesor-intel-pentium-gold-g5400-3-7ghz-4-mb-box-bx80684g5400-980259/">Link do strony</a> </h1> <br><br><br>
       <h1>Procesor Intel Celeron G1840T</h1>
       <p>Procesory należące do linii Intel Celeron to jednostki odpowiednie do budżetowych konfiguracji i podstawowych zastosowań. Sprawdzą się doskonale w komputerach biurowych i domowych,
       a szczególnie w obsłudze prostych programów. Ich niewątpliwą zaletą jest atrakcyjna cena. Większość procesorów Intel Celeron dysponuje dwoma rdzeniami, a wybrane modele posiadają nawet cztery rdzenie,
       co przekłada się na wyższą wydajność.</p>
       <img src="d4.jpg" alt=""> <h1> <a href="https://www.morele.net/procesor-intel-celeron-g1840t-2-5ghz-2-mb-oem-cm8064601482618-645620/">Link do strony</a> </h1> <br><br><br>
       <h1>Procesor Intel Core i9-9900K</h1>
       <p>Linia procesorów Intel Core i9 obejmuje wyłącznie jednostki o wysokiej wydajności. Są one dedykowane do najbardziej wymagających zastosowań. Procesory Intel Core i9 mogą być
       wyposażone w osiem, dziesięć, a nawet dwanaście rdzeni, dzięki czemu doskonale radzą sobie w zaawansowanych pracach. Mają również do dyspozycji co najmniej kilkanaście MB pamięci
       podręcznej L3 i oferują bardzo wysokie poziomy taktowania. Jednostki Intel Core i9 są dedykowane do topowych konfiguracji dla profesjonalistów oraz graczy.</p>
       <img src="d5.png" alt=""> <h1> <a href="https://www.morele.net/procesor-intel-core-i9-9900k-3-6ghz-16-mb-box-bx80684i99900k-4142641/">Link do strony</a> </h1> <br><br><br>
       <h1>Procesor AMD Athlon 200GE</h1>
       <p>Procesor jest kompatybilny z płytami głównymi, które wyposażono w podstawkę AM4. To parametr pozwalający zweryfikować kompatybilność procesora z płytą główną.
          Socket AM4 to gniazdo procesora zaprojektowane dla licznych jednostek marki AMD. Podstawka AM4 obsługuje pamięć DDR4 i dysponuje 1331 pinami</p>
       <img src="d6.png" alt=""> <h1> <a href="https://www.morele.net/procesor-amd-athlon-200ge-3-2ghz-4-mb-box-yd200gc6fbbox-4972740/">Link do strony</a> </h1> <br><br><br>

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
