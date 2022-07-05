<?php
  session_start();
  @$noms=$_POST["noms"];
  @$prenoms=$_POST["prenoms"];
if(isset($_POST["noms"])){
    $_SESSION["noms"]=$noms;
    $_SESSION["prenoms"]=$prenoms;
    header("location:accueil.php");
    
}elseif(isset($_SESSION["noms"])){
    header("location:accueil.php");
}
?>
