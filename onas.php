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
     <h1>System pomocy dla dowolnie wybranych produktów informatycznych</h1>
     <p>Cele projektu: <br>

1) stosuje podstawy algorytmiki; <br>

2) stosuje zasady algorytmicznego rozwiązywania problemów; <br>

3) stosuje podstawowe zasady programowania; <br>

4) wykorzystuje środowisko programistyczne: edytor i kompilator; <br>

5) korzysta z wbudowanych typów danych;<br>

6) tworzy własne typy danych;<br>

7) stosuje instrukcje, funkcje, procedury, obiekty, metody wybranych języków programowania;<br>

8) tworzy własne funkcje, procedury, obiekty, metody wybranych języków programowania;<br>

10) stosuje gotowe rozwiązania programistyczne;<br>

11) testuje tworzoną aplikację i modyfikuje jej kod źródłowy;<br>

12) dokumentuje tworzoną aplikację.<br>

13) posługuje się podstawowymi pojęciami dotyczącymi baz danych;<br>

14) projektuje relacyjne bazy danych;<br>

15) stosuje lokalne i sieciowe systemy zarządzania bazami danych;<br>

16) korzysta z podstawowych funkcji strukturalnego języka zapytań;<br>

17) posługuje się strukturalnym językiem zapytań do obsługi baz danych;<br>

18) tworzy strukturę tabel i powiązań między nimi;<br>

19) importuje dane do bazy danych i eksportuje dane z bazy danych;<br>

20) tworzy formularze, zapytania i raporty do przetwarzania danych;<br>

21) modyfikuje i rozbudowuje struktury baz danych;<br>

22) zarządza systemem bazy danych;<br>

23) pobiera dane z aplikacji i przechowuje je w bazach danych;<br>

24) tworzy kopie baz danych i odtwarza bazy danych z kopii;<br>

25) kontroluje spójność baz danych;<br>

26) dokonuje naprawy baz danych.<br>

27) tworzy projekt graficzny i strukturę witryny internetowej;<br>

28) identyfikuje systemy zarządzania treścią;<br>

29) posługuje się hipertekstowymi językami znaczników;<br>

30) posługuje się kaskadowymi arkuszami stylów (CSS);<br>

31) stosuje elementy grafiki komputerowej do tworzenia stron internetowych;<br>

32) stosuje elementy multimedialne na stronach internetowych;<br>

33) stosuje skrypty wykonywane po stronie serwera i klienta przy tworzeniu aplikacji internetowych;<br>

34) stosuje reguły walidacji stron internetowych;<br>

35) testuje i publikuje witryny internetowe;<br>

36) zamieszcza opracowane aplikacje w Internecie<br></p>



<h1>Założenia projektu:</h1>

<p>1. Wykonanie spójnego serwisu internetowego do pomocy i promocji akcesoriów komputerowych. <br>

2. Serwis powinien zawierać:<br>

b. logowanie do serwisu jako administrator oparte na bazie danych (haszowanie hasła)<br>

c. wykorzystanie mechanizmu sesji w serwisie<br>

d. strona główna zawiera:<br>

- nagłówek, menu, kontekst podzielony na jedną kolumnę, stopkę<br>

- promocję najważniejszych produktów<br>

- przegląd wszystkich produktów<br>

- formularz wysyłania wiadomości do administratora serwisu.<br>

e. nagłówek zawiera: logo firmy oraz jej nazwę i podstawowe dane kontaktowe.<br>

f. menu zawiera przynajmniej: produkty, pomoc, kontakt (formularz z możliwością wysyłania do administratora wiadomości)<br>

g. całość strony sformatuj wyłącznie za pomocą zewnętrznych stylów kaskadowych<br>

h. dodaj przegląd grafik produktów (galeria)<br>

i. strona administratora serwisu powinna zawierać:<br>

a. wiadomości,<br>

b. zmiana opisu produktu informatycznego<br>

c. dodawanie nowej pomocy (produktu)<br>

d. usuwanie pomocy (produktu)<br>

</p>
     <h2>Projekt realizowali</h2>
     <h1>Bartosz Suligowski</h1>
     <h1>Łukasz Ungier</h1>
     <h1>Mateusz Bilski</h1>
     <h2>3TIA</h2>
     <p>Telefon 666 928 808</p>
     <p>Email: bartek.sulig@gmail.com</p>
     <p>Po zalogowaniu jest możliwość napisana do nas po przez stronę !</p>
     <p>W panelu użytkowania</p>
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
