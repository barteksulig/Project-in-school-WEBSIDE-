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
   <h1>Ustalanie przyczyn awarii sprzętowych</h1>
   <h3>Procesor - uszkodzenia fizyczne</h3>
   <p>Kłopoty z poprawnym działaniem procesora można wykryć stosunkowo łatwo, korzystając z takich wskazówek jak wspomniane sygnały dźwiękowe BIOS-u czy wyświetlacze numeryczne LED. Poszczególni producenci płyt głównych stosują odmienne kody POST, jednak wszyscy zamieszczają odpowiedni opis w instrukcji obsługi. Przy okazji warto sprawdzić zamocowanie procesora w podstawce. Zdejmij w tym celu radiator, usuń pastę termoprzewodzącą za pomocą niestrzępiącej się szmatki, po czym zwolnij mocowanie uchwytów i ostrożnie wyjmij procesor. Przebarwienia na wierzchniej lub spodniej ściance są oznaką fizycznego uszkodzenia spowodowanego chociażby niewłaściwym chłodzeniem, krótkim spięciem lub usterką elementów regulujących napięcie.</p>

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
