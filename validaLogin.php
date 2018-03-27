<?php
session_start();

$login = $_POST['usuario'];
$pass = $_POST['senha'];

if(($login == "admin") && ($pass == 123)){

   $_SESSION['logado']= true; 
   $_SESSION['erro'] = 0;
   $_SESSION['nome']  = "Joaozinho";
   header("location:perfil.php");

}
else{

   $_SESSION['logado']= false;
   $_SESSION['erro'] = 1;
   header("location:index.php");

}

?>