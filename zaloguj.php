<?php
require_once "connect.php";

session_start();

$polaczenie = @new mysqli($host,$db_user,$db_password,$db_name);

if($polaczenie->connect_errno!=0)
{
  echo "Error ".$polaczenie->connect_errno;
}
else
{
  $imie=$_POST['username'];
  $haslo=$_POST['password'];

  $imie = htmlentities($imie, ENT_QUOTES, "UTF-8");


  if ($git = @$polaczenie->query(
  sprintf("SELECT * FROM users WHERE nick='%s'",
  mysqli_real_escape_string($polaczenie,$imie))))
  {
    $ile = $git->num_rows;

    if($ile>0)
    {
          $wiersz= $git->fetch_assoc();

          if(password_verify($haslo,$wiersz['haslo'])) {

          $_SESSION['zalogowany'] = true;
          $_SESSION ['nick'] = $wiersz['nick'];
          $_SESSION['admin'] = $wiersz['admin'];
          $git->free_result();
          header('Location: main.php');
          }
          else {

             $_SESSION['error'] = "<h3>Nie poprawny login lub haslo</h3>";
             header('Location:logowanie.php');
          }
    }
    else {

         $_SESSION['error'] = "<h3>Nie poprawny login lub haslo</h3>";
         header('Location:logowanie.php');

   }
  $polaczenie->close();
  }
}


 ?>
