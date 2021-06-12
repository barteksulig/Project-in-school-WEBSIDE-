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
      <h1><a href="https://pl.wikipedia.org/wiki/Procesor">Źródło</a> </h1>
      <h1>Procesor</h1>
      <p>Procesor, CPU (ang. central processing unit) – sekwencyjne urządzenie cyfrowe, które pobiera dane z pamięci operacyjnej, interpretuje je i wykonuje jako rozkazy.
         Procesory wykonują ciągi prostych operacji matematyczno-logicznych ze zbioru operacji podstawowych.</p>
      <p>Procesory wykonywane są zwykle jako układy scalone zamknięte w hermetycznej obudowie, często posiadającej złocone wyprowadzenia (stosowane ze względu na odporność
         na utlenianie) i w takiej postaci nazywa się je mikroprocesorami – w mowie potocznej pojęcia procesor i mikroprocesor używane są zamiennie. Sercem procesora jest monokryształ
         krzemu, na który naniesiono techniką fotolitografii szereg warstw półprzewodnikowych, tworzących, w zależności od zastosowania, sieć od kilku tysięcy do kilku miliardów tranzystorów.
         Jego obwody wykonywane są z metali o dobrym przewodnictwie elektrycznym, takich jak aluminium czy miedź.</p>
      <p>Jedną z podstawowych cech procesora jest określona długość (liczba bitów) słowa, na którym wykonuje on podstawowe operacje obliczeniowe. Jeśli przykładowo słowo tworzą 64 bity,
         to taki procesor określany jest jako 64-bitowy. Innym ważnym parametrem określającym procesor jest szybkość, z jaką wykonuje on rozkazy. Przy danej architekturze procesora, szybkość
         ta w znacznym stopniu zależy od czasu trwania pojedynczego taktu[1], a więc głównie od częstotliwości jego taktowania.</p>
      <h1>Nazwa</h1>
      <p>Procesor bywa też nazywany jednostką centralną, centralną jednostką obliczeniową lub centralną jednostką przetwarzającą (poprzez tłumaczenie angielskiego wyrażenia central
         processing unit w sposób niemal dosłowny). Część użytkowników „jednostkę centralną” kojarzy jednak z handlowym terminem określającym jednostkę systemową komputera – złożoną
         z procesora, płyty głównej, kart rozszerzeń, pamięci operacyjnej, dysków twardych i innych elementów zamkniętych we wspólnej obudowie – nieobejmującym urządzeń peryferyjnych
         (monitora, klawiatury, drukarki).</p>
       <h1>Budowa</h1>
       <p>W funkcjonalnej strukturze procesora można wyróżnić:</p>
       <li>zespół rejestrów do przechowywania danych. Rejestry mogą być ogólnego przeznaczenia lub do specjalne przeznaczenie.</li>
       <li>jednostkę arytmetyczną (arytmometr) do wykonywania operacji obliczeniowych na danych</li>
       <li>układ sterujący przebiegiem wykonywania programu</li>
       <li>inne układy, w które producent wyposaża procesor w celu usprawnienia jego pracy.</li>
       <h1>Rozmiary elementów</h1>
       <p>Jednym z parametrów procesora jest rozmiar elementów budujących jego strukturę. Im są one mniejsze, tym niższe jest zużycie energii, napięcie pracy oraz wyższa możliwa do osiągnięcia częstotliwość pracy.
          W roku 2012 firma Intel wprowadziła procesory wykonane w procesie technologicznym (fotolitografii) 22 nm (Ivy Bridge), a w czwartym kwartale 2014 było to 14 nm (Core M). W 2019 roku firma AMD wprowadziła na
          rynek pierwsze procesory o mikroarchitekturze Zen 2 wykonane w litografii 7 nm w fabrykach TSMC.
          Aby ograniczyć straty związane z powstawaniem defektów w tak małych strukturach, fabryki procesorów muszą posiadać pomieszczenia o niezwykłej czystości, co jest bardzo kosztownym przedsięwzięciem.</p>
          <h1>Wielordzeniowość i procesory pomocnicze</h1>
          <p>Współcześnie większość procesorów ma wielordzeniową budowę. Pierwszym procesorem wielordzeniowym ogólnego przeznaczenia był procesor Power 4 firmy IBM wprowadzony na rynek w roku 2001. Pierwszymi procesorami wielordzeniowymi architektury x86 były wersje procesorów Opteron firmy AMD i Pentium Extreme Edition firmy Intel wprowadzone w kwietniu 2005 roku.

            Modelem firmy Intel z niższej półki cenowej, który kontynuował ten trend był Intel Pentium D, chwilę później największy konkurent Intela, czyli AMD, wprowadził do sprzedaży popularny model procesora dwurdzeniowego o nazwie Athlon 64 X2. Dużą popularność zyskał dopiero Intel Core 2 Duo zbudowany na bazie architektury Conroe (65 nm). Niedługo później pojawił się także 4-rdzeniowy układ Intel Core 2 Quad.

            CPU mają rdzenie taktowane zegarem nawet 5 GHz (np. Intel Core i9-9900KS), lecz nie występuje już wyraźny wzrost taktowania w kolejnych generacjach procesorów. Szybkość obliczeń jednak wzrasta dzięki zwiększaniu liczby tranzystorów i rdzeni w procesorach.

            Intel i AMD mają dziś w ofercie także modele czterordzeniowe (Intel Core i3, oraz AMD Ryzen 3), sześciordzeniowe (Intel Core i5, oraz AMD Ryzen 5), oraz ośmiordzeniowe (Intel Core i7, oraz AMD Ryzen 7), oraz szesnastordzeniowe AMD Threadripper i AMD Ryzen 9 klasy desktop. Ponadto są dostępne specjalne procesory do zastosowań profesjonalnych obu firm, które mogą mieć nawet do 64 rdzeni.

            Projektanci procesorów próbują także innych metod zwiększania wydajności procesorów, na przykład hyper-threading, gdzie każdy rdzeń może się zachowywać jak dwa procesory logiczne, dzielące między siebie zasoby pamięci podręcznej i jednostek wykonawczych. Gdy jeden z konkurujących ze sobą procesów pozostawia niewykorzystane zasoby, proces przypisany do drugiego procesora logicznego może ich użyć, co w sprzyjających okolicznościach może prowadzić do sumarycznego wzrostu wydajności od kilku do kilkunastu procent.

            W roku 2007 Intel zaprezentował testy układu scalonego Intel Polaris wyposażonego w 80 rdzeni ogólnego przeznaczenia, który osiągnął wydajność 1,01 TFLOPS.

            Komputer (w szczególności komputer osobisty) oprócz procesora głównego (CPU) ma zwykle procesory pomocnicze: obrazu (GPU, najnowsze konstrukcje pozwalają na integrację CPU z GPU w APU), dźwięku, koprocesory arytmetyczne (od lat 90. na ogół są zintegrowane z CPU).</p>
         <h1>Rozkazy procesora</h1>
         <p>Do typowych rozkazów wykonywanych przez procesor należą:</p>
         <li>kopiowanie danych</li>
         <li>z pamięci do rejestru</li>
         <li>z rejestru do pamięci</li>
         <li>z pamięci do pamięci (niektóre procesory)</li>
         <li>(podział ze względu na sposób adresowania danych)</li>
         <li>działania arytmetyczne</li>
         <li>dodawanie</li>
         <li>odejmowanie</li>
         <li>porównywanie dwóch liczb</li>
         <li>dodawanie i odejmowanie jedności</li>
         <li>zmiana znaku liczby</li>
         <li>działania na bitach</li>
         <li>iloczyn logiczny – AND</li>
         <li>suma logiczna – OR</li>
         <li>suma modulo 2 (różnica symetryczna) – XOR</li>
         <li>negacja – NOT</li>
         <li>przesunięcie lub rotacja bitów w lewo lub w prawo</li>
         <li>skoki</li>
         <li>bezwarunkowe</li>
         <li>warunkowe</li>
         <p>Rozkazy dla procesora identyfikowane są na podstawie binarnego kodu maszynowego, jednak dany kod nie musi oznaczać wykonywania tych samych operacji przez procesor do tego samego (lub innego) zadania. W tym celu, w procesorach niedostępnych masowo, można spotkać możliwość programowania rozkazów CPU, czyli mikroprogramowania. Rozwiązanie takie daje pełniejszą kontrolę nad procesorem oraz możliwość zwiększenia wydajności procesora w pewnych zastosowaniach, w stopniu znacznie większym niż w przypadku powszechnie dostępnych procesorów, w których kody maszynowe są na stałe przypisane do odpowiednich ciągów mikrorozkazów (mikroinstrukcji).</p>
         <h1>Producenci procesorów</h1>
         <p>Głównymi producentami procesorów są: <span style="color:red;">Fujitsu, AMD, Intel, Toshiba, Sony, IBM, Freescale (dawniej jako Motorola), Texas Instruments, VIA Technologies, Qualcomm.</span></p>


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
