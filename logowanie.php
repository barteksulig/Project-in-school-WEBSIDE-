<?php
session_start();
if(isset($_SESSION['zalogowany']))
{
	header('Location: main.php');
	exit();
}
?>

<!DOCTYPE html>
<html lang="pl" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Wszystko o procesorach</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css2?family=Dosis:wght@600&display=swap" rel="stylesheet">
		<style>
		#panel {
width: 400px;
margin: 0 auto;
padding: 15px 0 0;
background: #red;
border: 1px solid silver;
font: 16px calibri;
letter-spacing: -1px;
-webkit-box-shadow: 0 0 2px silver;
-moz-box-shadow: 0 0 2px silver;
box-shadow: 0 0 2px silver;

}
form {
margin: 0;
}
label {
display: block;
width: 260px;
padding: 10px 20px;
color: #696969;
font-size: 16px;
text-shadow: 0 0 1px silver;
}

#username, #password, #email{
display: block;
width: 360px;
margin: 0 auto;
padding: 10px 5px;
border: 1px solid black;
outline: 5px solid black;
font-size: 22px;
}
#username:focus, #password:focus {
outline: 5px solid #e5f2f8;
}
#lower {
background: #EA0909;
width: 360px;
padding: 5px 20px;
margin-top: 20px;
}
.check {
display: inline;
color: white;
float: none;
font-size: 11px;
padding: 5px;
}
input[type="submit"] {
width: 70px;
padding: 5px 13px;
border: 1px solid #005f85;
color: white;
text-shadow: 0 0 1px black;
background: black;
position: relative;
left: 180px;
}
#panel, input[type="submit"] {
	-webkit-border-radius: 5px;
	-moz-border-radius: 5px;
	border-radius: 5px;
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
        <div id="panel">
         <form action="zaloguj.php" method="post">
          <label for="username">Nazwa użytkownika:</label>
         <input type="text" id="username" name="username">
         <label for="password">Hasło:</label>
         <input type="password" id="password" name="password">
         <div id="lower">
         <input type="checkbox">
         <label class="check" for="checkbox">Zapamiętaj mnie!</label>
         <input type="submit" value="Login">

       </form>
       <?php
        if(isset($_SESSION['error'])) {
          echo $_SESSION['error'];
        }
        ?>
        </div>
         </div>
         <div class="rej">
           <h3>Nie masz konta jeszcze ? </h3>
            <h2>Zarejestruj się już teraz !</h2>
            <a href="rejestracja.php">Wystarczy że wejdziesz tutaj !!</a>
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
