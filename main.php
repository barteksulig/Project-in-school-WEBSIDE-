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
    .proc{
      width: 150px;
      height: 150px;
      padding-right: 500px;
    }
    .proc2{
      width: 200px;
      height: 150px;
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
      <h1>Witamy cię na naszej stronie !</h1>
      <p> <span style="font-size: 20px;">CPU<span style="color: red;" >HELP</span> </span>to stronka na temat procesorów, na tej stronie będziemy starać się pomóc wam zrozumieć zasady działania, polecić dobry CPU w dobrej cenie !
      Można zatem uznać to za odpowiednik Wikipedii z tą rożnicą że my się w pełni poświęcamy tematowi związanemu z sercem komputera ! Posiadamy szczegółowe informacje na ten temat. Mamy duży wybór znanych CPU. Listę dobrych past
      termoprzewodzących, mało tego można się z nami skontaktować w celu współpracy z nami lub w celu rozwiązanu twojego problemu !</p>
      <h3>Prosta definicja</h3>
      <p>Procesor czyli tak zwane <span style="color:red;">CPU</span> czyli z Agnielskiego języka central processing unit to  sekwencyjne urządzenie cyfrowe, które pobiera dane z pamięci operacyjnej, interpretuje je i wykonuje jako
      rozkazy. Procesory wykonują ciągi prostych operacji matematyczno-logicznych ze zbioru operacji podstawowych.</p>
      <h3>Tutaj proste zdjecie oraz ikona przez które nie da się go pomyslić z niczym innym !</h3>
      <img src="jeden.png" class="proc" alt="error"><img src="dwa.png" class="proc2" alt="error">
      <h3>Będziemy wdzięczni za twoją rejesrację !</h3>
      <p>Oczywiście możesz korzstać z całej zawartości strony bez rejestracji jednakże nie możesz wysyłać do nas wiadomości. Chyba że emailem ! Aby to zrobić wejdź do zakładki <span style="color: black;">O nas</span> </p>
      <h3>Po co ta strona jeszcze jest?</h3>
      <p>Strona <span style="color: #FF0000;">CPU</span>HELP powstała w ramach projektu szkolnego ale o tym wiecej w zakładce O nas ! </p>

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
