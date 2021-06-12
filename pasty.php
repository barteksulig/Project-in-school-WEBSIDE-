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
      <h1>Jak wybrać pastę termoprzewodzącą? Jaka pasta najlepsza?</h1>
      <p>Zastosowanie pasty termoprzewodzącej może okazać się bardzo pomocnym rozwiązaniem. Którą warto wybrać?</p>
      <h3>Pasta termoprzewodząca – jak działa?</h3>
      <p>Ta plastyczna masa charakteryzuje się wysokim przewodnictwem cieplnym. Dobre pasty termoprzewodzące znalazły szerokie zastosowanie w elektronice. Wystarczy nałożyć cienką warstwę na układ CPU, GPU lub pamięć RAM, aby wypełnić niewielkie nierówności na powierzchni styku z radiatorem i zwiększyć efektywność chłodzenia układu. W szerokiej ofercie znajduje się wiele rodzajów past. Mogą być wyprodukowane na bazie silikonu, miedzi, srebra, ceramiki czy syntetycznych diamentów. Pasta chłodząca to doskonałe rozwiązanie szczególnie dla graczy oraz użytkowników profesjonalnych, którzy korzystają z zaawansowanych podzespołów komputerowych.</p>
      <h3>Pasta do procesora – jak wybrać?</h3>
      <p>Jaka pasta termoprzewodząca będzie najlepsza? Przed zakupem warto zwrócić uwagę na kilka bardzo istotnych czynników. Kluczowe parametry to przewodność cieplna, temperatura pracy oraz rezystancja termiczna. Istotną rolę odgrywa oczywiście rodzaj pasty. Nie bez znaczenia będzie również renoma producenta. Pasta termoprzewodząca na procesor, GPU czy pamięć RAM powinna nie tylko zapewnić przewodnictwo cieplne, ale również wydłużyć czas pracy układu. Oto pasty, które można kupić w sklepie Morele.net.</p>
      <li>Silikonowa pasta termoprzewodząca – to najtańsze rozwiązanie, które umożliwia bardzo łatwą aplikację. Należy jednak zwrócić uwagę, że tego typu pasta przewodząca jest mniej trwała i pod kątem parametrów ustępuje pozostałym wariantom.</li>
      <li>Ceramiczna pasta termoprzewodząca – ich niekwestionowaną zaletą jest bardzo korzystny stosunek ceny do jakości. Przed zakupem warto zapoznać się z opisem produktów, gdyż ich parametry mogą być bardzo zróżnicowane.</li>
      <li>Pasty z zawartością metali np. pasta ceramiczna srebrna, czy pasta miedziana – zastosowanie tych produktów jest bardzo szerokie. Stanowią doskonałą propozycję dla osób, które chcą zadbać o jak najwyższy stopień przewodnictwa cieplnego. Wiele takich past oferuje szeroki zakres temperatury pracy. Właściciele wydajnych urządzeń o zaawansowanych podzespołach powinni rozważyć tę propozycję.</li>
      <li>Pasty diamentowe – doskonałe rozwiązanie dla właścicieli komputerów gamingowych oraz pozostałych sprzętów, które wykorzystują wysoką moc obliczeniową. Taka pasta termoizolacyjna nie należy do najtańszych, jednak stanowi najlepszą opcję dla wymagających.</li>
      <p>Pasta przewodząca ciepło to doskonały wybór, jeżeli tylko sięgniemy po sprawdzone produkty o dobrych parametrach. W tym celu powinniśmy dokładnie zapoznać się z ich specyfikacją, a także przeczytać opinie użytkowników.</p>
      <h3>Czy pasta przewodząca do procesora ma termin ważności?</h3>Producent każdej z past deklaruje datę ważności, która gwarantuje okres bezpiecznego użytkowania przy właściwym przechowywaniu. Pasta termiczna do procesora, karty graficznej, czy pamięci RAM powinna przede wszystkim zapewnić bezpieczną pracę układu. Dlatego po jej nałożeniu powinniśmy kontrolować termin ważności. W tym miejscu warto podkreślić, że pasta na procesor pochodząca od sprawdzonych producentów może nawet przez kilka lat spełniać swoje funkcje. Dlatego zakup uznanej na rynku pasty to doskonała inwestycja.
      <h3>Jak wybrać pastę termoprzewodzącą?</h3>
      <p>W ofercie znajdziemy wiele past o przeróżnych parametrach. Na każdy z nich należy zwrócić uwagę, aby wybrać produkt dostosowany do osobistych preferencji. Oto elementy kluczowe, które zadecydują o tym, czy dokonamy satysfakcjonującego zakupu.</p>

<li>Rodzaj pasty – każda z past wyróżnia się charakterystycznymi właściwościami. Najtańszym rozwiązaniem będzie pasta termoprzewodząca silikonowa, którą możemy zakupić już za kilka złotych. Jednak uwagę wymagających użytkowników z pewnością skupi pasta termoprzewodząca srebrna, miedziana czy diamentowa.</li>
    <li>Zastosowanie – wielu producentów umieszcza informacje o zastosowaniu pasty dla konkretnego układu. Na rynku pojawiła się więc pasta przewodząca do procesora, czy pasta, która ma na celu powstrzymać nadmierne wygrzewanie karty graficznej.</li>
    <li>Przewodność termiczna – parametr, który określa zdolność substancji do przewodzenia ciepła. Wielkość ta podawana jest w [W/mK]. Jej odpowiedni poziom zapewni optymalny przebieg procesu przekazywania ciepła do układu chłodzenia.</li>
    <li>Zakres temperatur – w opisach produktów znajdziemy skalę temperatur, dla których może zostać zastosowana termalna pasta na procesorze. Oczywiście im jest szerszy, tym lepiej.
Gęstość – parametr ten wpływa na trwałość pasty. Jednak warto zwrócić uwagę, że aplikacja gęstszych past może stanowić trudne zadanie dla początkujących</li>
    <li>Producent – zdecydowanie warto sięgać po wysokiej klasy produkty zaufanych marek. Dzięki temu zawsze możemy spodziewać się wysokiej jakości.</li>
    <li>Rankingi – na stronie Morele.net zamieszczono ranking past termoprzewodzących, który został przygotowany na podstawie najchętniej wybieranych produktów. Warto się z nim zapoznać i sprawdzić, jaka pasta termoprzewodząca najlepsza okazała się wśród klientów i zyskała świetne oceny.</li>
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
