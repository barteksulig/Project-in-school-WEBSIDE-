<?php
session_start();
if(isset($_SESSION['zalogowany']))
{
	header('Location: main.php');
	exit();
}

if(isset($_POST['email'])){
   $ok=true;

   $nick=$_POST['nik'];
   if((strlen($nick)<3) || (strlen($nick)>8)){
     $ok=false;
     $_SESSION['e_nick']="Nick musi posiadać od 3 do 8 znaków!";
   }
   if(ctype_alnum($nick)==false) {
     $ok=false;
     $_SESSION['e_nick']="Nick może się składać tylko z liter i cyfr(bez polskich znaków)";
   }
   $email=$_POST['email'];
   $emailB=filter_var($email,FILTER_SANITIZE_EMAIL);

   if((filter_var($emailB,FILTER_VALIDATE_EMAIL)==false) || ($email!=$email)) {
     $ok=false;
     $_SESSION['e_email']="Podaj poprawny adres e-mail!";
   }
   $haslo1 = $_POST['password1'];
   $haslo2 = $_POST['password2'];

   if((strlen($haslo1)<5) || (strlen($haslo1)>10)){
     $ok=false;
     $_SESSION['e_haslo']="Hasło musi posiadać od 5 do 10 znaków!";
   }
   if(ctype_alnum($haslo1)==false) {
     $ok=false;
     $_SESSION['e_haslo']="Hasło może się składać tylko z liter i cyfr(bez polskich znaków)";
   }
   if($haslo1!=$haslo2){
     $ok=false;
     $_SESSION['e_haslo']="Hasła nie są identyczne";
   }

   $haslo_hash = password_hash($haslo1,PASSWORD_DEFAULT);

   if(!isset($_POST['regulamin'])) {
     $ok=false;
     $_SESSION['e_reg']="Potwierdź regulamin strony";
   }
   $sekret="6Lf-k_4UAAAAAHPZZtbwiVEqYYRuc-o1fgjBci-W";

   $sprawdz = file_get_contents('https://www.google.com/recaptcha/api/siteverify?secret='.$sekret.'&response='.$_POST['g-recaptcha-response']);

   $odpowiedz = json_decode($sprawdz);

   if($odpowiedz->success==false)
   {
     $ok=false;
     $_SESSION['e_bot']="Potwierdź że nie jesteś botem !";
   }

   require_once "connect.php";
   mysqli_report(MYSQLI_REPORT_STRICT);

   try
   {
    $polaczenie = new mysqli($host,$db_user,$db_password ,$db_name);
    if($polaczenie->connect_errno!=0)
    {
    throw new Exception(mysqli_connect_errno());
    }
    else
    {
      $git= $polaczenie->query("SELECT id FROM users WHERE email='$email'");

      if (!$git) throw new Exception($polaczenie->error);

      $ilemail = $git->num_rows;
      if($ilemail>0){
        $ok=false;
        $_SESSION['e_email']="taki e-mail już istnieje";
      }
      $git= $polaczenie->query("SELECT id FROM users WHERE nick='$nick'");

      if (!$git) throw new Exception($polaczenie->error);

      $ilelogi = $git->num_rows;
      if($ilelogi>0){
        $ok=false;
        $_SESSION['e_nick']="Taki nick już istnieje";
      }
      if($ok==true){
        if($polaczenie->query("INSERT INTO USERS VALUES(NULL,'$nick','$haslo_hash','$email',DEFAULT)"))
        {
          $_SESSION['GITARA']=true;
          header('Location:witamy.php');
        }
      else
      {
        throw new Exception($polaczenie->error);
      }
      $polaczenie->close();
    }
   }
 }
   catch (Exception $e)
   {
     echo "błąd servera ";
     //echo '<br />'.$e;
   }
 }
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
     .error{
       color: blue;
       margin-top: 10px;
       margin-bottom: 10px;
       margin-left: 10px;
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
         <form method="post">
         <label for="username">Nazwa użytkownika:</label>
         <input type="text" id="username" name="nik">
         <?php
           if(isset($_SESSION['e_nick'])) {
             echo '<div class="error">'.$_SESSION['e_nick'].'</div>';
             unset($_SESSION['e_nick']);
           }
           ?>
         <label for="password">Hasło:</label>
         <input type="password" id="password" name="password1">
         <?php
           if(isset($_SESSION['e_haslo'])) {
             echo '<div class="error">'.$_SESSION['e_haslo'].'</div>';
             unset($_SESSION['e_haslo']);
           }
           ?>
         <label for="password">Powtórz Hasło:</label>
         <input type="password" id="password" name="password2">
         <label for="email">Email:</label>
         <input type="text" id="email" name="email">
         <?php
           if(isset($_SESSION['e_email'])) {
             echo '<div class="error">'.$_SESSION['e_email'].'</div>';
             unset($_SESSION['e_email']);
           }
           ?>
         <label style="font-size: 20px;"><input type="checkbox" name="regulamin">Akceptuje <a style="font-size: 20px;" href="#">regulamin</a></label>
         <?php
         if(isset($_SESSION['e_reg'])) {
           echo '<div class="error">'.$_SESSION['e_reg'].'</div>';
           unset($_SESSION['e_reg']);
            }
            ?>
           <div id="lower">
          <div class="g-recaptcha" style="margin-left:auto;margin-right:auto;" data-sitekey="6Lf-k_4UAAAAAOyUjIWmmSHGa6vW0rHgIoOjAClh"></div>
          <?php
            if(isset($_SESSION['e_bot'])) {
              echo '<div class="error">'.$_SESSION['e_bot'].'</div>';
              unset($_SESSION['e_bot']);
            }
            ?>
          <input type="submit" value="Register" style="margin-left:auto;margin-right:auto;" >
         </div>
       </form>
                </div>
       <div class="rejj">
         <h1>Dziękuje !</h1>

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
