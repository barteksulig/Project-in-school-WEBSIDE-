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
      <h1>Jaki procesor wybrać? Poradnik zakupowy</h1>
      <p>Zakup komputera często zaczynamy od wyboru procesora. Zadanie nie jest łatwe,
         zwłaszcza dla mniej doświadczonych klientów, którzy nie orientują się w branży.
          Czym kierować się przy wyborze odpowiedniego modelu i na co zwracać uwagę przy zakupie procesora?</p>
          <p>Jaki procesor wybrać do danego zastosowania – począwszy od niedrogiego komputera do codziennego użytku,
             a skończywszy na wydajniejszej konfiguracji z procesorem do podkręcania.</p>
        <h2>Procesor w komputerze i laptopie – różnice</h2>
        <p>Procesory w komputerach i laptopach zbudowane są podobne, jednak wciąż występują w nich istotne różnice.</p>
        <li> <span style="color:red;">Procesor do komputera</span> – zwykle są dużo wydajniejsze, a w celu łatwej modernizacji montuje się je w specjalnym gnieździe – podstawce.
           Co prawda w zestawie z procesorem zazwyczaj już znajduje się chłodzenie, ale użytkownik ma możliwość jego wymiany na wydajniejszą i/lub cichszą konstrukcję.</li>
        <li> <span style="color:red;">Procesor do laptopa</span> – ma już pewne ograniczenia (głównie jeżeli chodzi o zasilanie i chłodzenie). Zazwyczaj oferuje więc niższe osiągi
           kosztem mniejszego zapotrzebowania na energię elektryczną. Dodatkowo nie przewidziano opcji modernizacji – układ jest zamontowany na stałe, a chłodzenie zostało zaprojektowane z myślą o konkretnym laptopie.</li>
           <h1>Rdzenie, wątki i taktowanie</h1>
           <p>Wydajność procesora w głównej mierze zależy od ilości rdzeni. Dla użytkownika oznacza to, że komputer z większą liczbą rdzeni będzie lepiej radził sobie z pracą na kilku programach jednocześnie.</p>
           <h5>Im więcej dany układ ma rdzeni, tym więcej zadań w danym momencie jest w stanie realizować.</h3>
          <p>Ponadto część modeli oferuje technologię wielowątkowości (Hyper Threading) i umożliwia równoczesne przetwarzanie dwóch wątków (obliczeń) za pomocą jednego rdzenia. Wątki zwiększają wydajność komputera, niejako podwajając liczbę zadań, które może jednocześnie wykonywać.</p>
           <p>Podstawowe modele oferują 2 rdzenie, średnio wydajne 4 lub 6 rdzeni. Topowe jednostki obecnie dostępne na rynku dysponują 8 i więcej (nawet 24) rdzeniami.</p>
           <h1>Jak rozumieć częstotliwość taktowania?</h1>
           <p>Bardzo ważnym parametrem jest również częstotliwość taktowania (wyrażana w MHz lub GHz).</p>
           <h5>Mówiąc w uproszczeniu – im wyższe taktowanie tym wydajniejszy jest procesor.</h5>
           <p>W specyfikacji podawane są dwie wartości: taktowanie bazowe i taktowanie w trybie Turbo. Ten drugi jest uruchamiany jeśli potrzebna jest dodatkowa moc obliczeniowa (np. w trakcie grania), ale nie jest możliwe utrzymanie jej przez cały czas. Dlatego taktowanie bazowe jest bardziej wiarygodnym wskaźnikiem wydajności procesora.</p>
           <p> <span style="color: black">Tryb Turbo Boost (Intel) lub Turbo Core (AMD)</span> zostały tak zaprojektowane, aby nie przekraczać dopuszczalnego poboru energii elektrycznej i temperatury, więc zwiększenie taktowania zależy od aktualnego trybu obciążenia układu. Przy obciążeniu większej liczby rdzeni jest ono mniejsze, a przy obciążeniu mniejszej liczby odpowiednio większe.</p>
           <h1>Jaki procesor do podkręcania?</h1>
           <p>Entuzjaści i bardziej zaawansowani użytkownicy powinni zwrócić uwagę na modele z funkcją dodatkowego podkręcania taktowania.</p>
           <h5>Podkręcanie, z języka angielskiego OC (Overclocking), to możliwość zwiększenia mocy procesora przez podniesienie częstotliwości taktowania.</h5>
           <p>Podkręcanie procesora pozwoli uzyskać jeszcze wyższą wydajność komputera, ale wymaga zastosowania wydajniejszego chłodzenia, mocniejszego zasilacza i nierzadko specjalnej płyty głównej. Potencjał na podkręcanie nie jest jednak w żaden sposób gwarantowany przez producenta.</p>
           <h3>Procesory Intel do podkręcania – Intel i AMD</h3>
           <p>W przypadku modeli Intela procesory do podkręcania oznaczono dopiskiem K lub X np. Intel Core i5-9600K lub Intel Core i7-9700K. Natomiast w ofercie AMD prawie wszystkie jednostki mogą być przetaktowane (przed zakupem dobrze jeszcze zerknąć do specyfikacji i się upewnić w tej kwestii).</p>
           <p>Warto również pamiętać, że takie modele zwykle są też droższe od standardowych odpowiedników. Dobrze więc przemyśleć temat czy funkcja ta na pewno będzie nam potrzebna. Podkręcony procesor będzie pobierał większą ilość energii, a przede wszystkim wydzielał większe ilości ciepła, dlatego do podkręcania niezbędne jest zastosowanie wydajnego systemu chłodzącego.</p>
           <h1>Zintegrowany układ graficzny</h1>
           <p>Część procesorów ze średniego segmentu jest wyposażona w zintegrowany układ graficzny. Zwykle jest to podstawowa jednostka, która sprawdzi się w codziennych, mniej wymagających zastosowaniach typu przeglądanie Internetu lub odtwarzanie multimediów. O graniu raczej możemy zapomnieć (no chyba, że mówimy o starszych, kilku lub kilkunastoletnich tytułach).</p>
           <p>W procesorach Intel obecnie znajdziemy układ graficzny z serii HD lub UHD Graphics. Natomiast w specjalnych modelach producent zastosował wydajniejszy układ Iris lub Iris Pro Graphics.</p>
           <p>Jeżeli chodzi o procesory AMD, tutaj znajdziemy już całkiem dobrej klasy (jak na zintegrowaną grafikę) układ z serii Radeon Vega stosowane w procesorach AMD Ryzen.</p>
           <h1>Kontroler pamięci RAM i pamięć podręczna</h1>
           <p>Kolejnym ważnym elementem procesora jest kontroler pamięci operacyjnej. Jeszcze do niedawna obsługujący moduły DDR3, ale obecnie wykorzystywanym standardem jest DDR4. Podstawowe modele dysponują 2-kanałowym kontrolerem, natomiast topowe jednostki dla najpotężniejszych komputerów i stacji roboczych dysponują 4-kanałowym kontrolerem.</p>
           <p>W specyfikacji danej jednostki znajdziemy również informacje o pojemności pamięci podręcznych – zwykle pierwszego, drugiego i trzeciego poziomu – L1, L2 i L3. Parametr ten jest związany z liczbą rdzeni – w uproszczeniu, im więcej jest dostępnej pamięci podręcznej, tym dany procesor jest wydajniejszy.</p>
           <h1>Pobór energii, współczynnik DTP i energooszczędność</h1>
           <p>Jednym z głównych parametrów procesora jest współczynnik TDP. Informacja ta w uproszczeniu mówi nam o zapotrzebowaniu na energię elektryczną i koniecznym chłodzeniu.</p>
           <h5>Standardowe wersje procesorów zwykle charakteryzują się współczynnikiem TDP na poziomie 65 lub 95 W, natomiast w przypadku tych topowych często jest to 140, 165 lub nawet 180 W. Konieczne jest wtedy zastosowanie odpowiedniego chłodzenia – najlepiej rozbudowanego powietrznego lub wodnego.</h5>
           <p>W ofercie AMD i Intela znajdziemy również procesory w wersji o obniżonym zapotrzebowaniu na energię elektryczną. W przypadku modeli dla komputerów stacjonarnych są one oznaczone dopiskiem E lub T, a modele dla laptopów dopiskiem U. Warto jednak pamiętać, że modele te charakteryzują się również niższym taktowaniem, więc też oferują gorszą wydajność.</p>
           <h1>Zastosowanie komputera – jaki procesor wybrać?</h1>
           <h4>Procesor do komputera multimedialnego lub biurowego</h4>
           <p>Wszystkie porady odnośnie zakupu procesora sprowadzają się do zastosowania komputera multimedialnego lub laptopa. Jaki procesor do mniej wymagających zadań wybrać?</p>
           <p>W przypadku przeglądania Internetu czy odtwarzania multimediów w zupełności wystarczy podstawowy, 2-rdzeniowy lub 4-rdzeniowy model np. Intel Core i3 lub AMD Ryzen 3. Można tutaj wybrać jednostkę ze zintegrowaną grafiką – konstrukcja ta wystarczy do podstawowych zadań, a przy okazji nie będzie niepotrzebnie zawyżać ceny komputera.</p>
           <h4>Procesor do gier</h4>
<p>Większe wymagania dotyczą konfiguracji do grania. Procesor gamingowy powinien cechować się 4 lub 6 wydajnymi rdzeniami więc jaki procesor wybrać? Najlepiej tutaj wybrać modele Intel Core i5 lub AMD Ryzen 5, a w przypadku wydajniejszych maszyn można sięgnąć po jeszcze mocniejsze jednostki Intel Core i7 lub AMD Ryzen 7.</p>
<p>Zintegrowany układ graficzny w tym przypadku jest zbędny, bo komputer do grania i tak będzie korzystać z zewnętrznej karty graficznej Nvidia GeForce lub AMD Radeon.</p>
<h4>Procesor dla profesjonalistów</h4>
<p>Profesjonaliści korzystają ze specjalistycznego oprogramowania, które potrafi wykorzystać potencjał najbardziej rozbudowanych i najwydajniejszych procesorów. W tym przypadku najlepszym wyborem będą więc kilkunasto-rdzeniowe układy Intel Core i9 lub AMD Ryzen Threadripper.</p>
<p>Jednostki te oferują wprost bezkonkurencyjne osiągi, co znacznie przyspieszy wykonywanie zadań. Niestety, przy okazji są też to najdroższe procesory – za topowe modele przyjdzie nam zapłacić kilka tysięcy złotych.</p>
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
