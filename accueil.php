<?php
session_start();
if(!isset($_SESSION["noms"])){
  header("location:index.php");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap 5 Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"> -->
  <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
<div class="container-fluid p-5 bg-primary text-white text-center">
  
    <?php
  echo "<h1>BONJOUR BIENVENUE A LA CUISINE </h1> ".$_SESSION["noms"]. ' '.$_SESSION["prenoms"];
   
  ?>

  <a href="deconnexion.php" style='color:white; float:right;'>DECONNEXION </a>
  <p>Bien maintenir sa forme</p> 
</div>
<div class="container mt-3">
  <!-- <h2>Nav</h2> -->

  <ul class="nav">
    <li class="nav-item">
      <a class="nav-link" href="accueil.php">Accueil</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="accueil.php?page=1">Nos recettes</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="accueil.php?page=2">P2</a>
    </li>
   
  </ul>
</div>
<br><br>
   
    <!-- <a href='index.php'>accueil</a>-<a href='index.php?page=1'>Index</a>-<a href='index.php?page=2'>loisir</a> -->
</body>
</html>

<?php
if(isset($_GET["page"])) {// s'il y a des éléments 
    $page=$_GET["page"]; //$_GET permet d'envoyer des infos mais ce n'est pas sécurisé
if($page == 1){
  ?>
  <?php
 //recettes
  ?>
  <?php
  include("recettes.php");
  ?>
    <!-- echo"<h1 style='color:green'>les favoris de Ciela</h1> <br> <h1>Les codes</h1>"; -->
  <?php 
}

else if($page == 2){
  ?>
  <?php
 //recettes 
 include("gateau.php");

  ?>
 
  <?php
    
} elseif($page == 3){
  echo'
  <img src="image/Du_bon_Alloko.jpg" alt="" style="width:50%; display:block; margin-left:auto; margin-right:auto">';

  echo"
  <br><br>
  <p style='text-align:center'>
  L'alloco, aloco, aloko, ou encore loco est une appellation ivoirienne d'un plat traditionnel à base de banane plantain originaire d'Afrique
  </p>

  <h3 style='color:red; text-align:center; text-decoration:underline'> Les bienfaits de la banane plantain </h3>
  <p style='text-align:center'>
  Il faut savoir que la banane plantain est une excellente source d’énergie puisqu’elle contient beaucoup de glucides complexes. Tout comme la banane elle a aussi une forte teneur en potassium – bon pour le système nerveux, la fonction musculaire et la pression sanguine. Cependant attention, la banane plantain se consomme exclusivement cuite, elle n’est pas digeste cru à cause de sa forte teneur en amidon et en fibre. Laissez-nous vous présentez la recette des bananes plantains frites.

  Attention, la banane plantain se consomme exclusivement cuites, contrairement à sa cousine la banane jaune qui se mange cru.
  </p>
  ";
}

elseif($page == 4){
  echo'
  <img src="image/garba.jpg" alt="" style="width:50%; display:block; margin-left:auto; margin-right:auto">';

  echo"
  <br><br>
  <p style='text-align:center'>
  Le garba est un plat populaire ivoirien à base de semoule de manioc, appelée attiéké, accompagnée de thon, essentiellement vendu dans de petites échoppes de rue généralement tenues par des hommes haoussa .
  </p>

  <h3 style='color:red; text-align:center; text-decoration:underline'> Composition </h3>
  <p style='text-align:center'>
  Il se compose d'attiéké (semoule de manioc) et de morceaux de thon frits accompagnés de piments frais hachés et, selon les variantes, de tomate et d'oignon, le tout relevé par un cube d'assaisonnement (essentiellement le cube Maggi). On l'appelle aussi attiéké-poisson, zéguen, foin, guéro, ganguatte, béton, dur ou zeh.Il constitue par excellence le repas rapide et bon marché des jeunes Abidjanais .
  </p>
  ";
}
elseif($page == 5){
  echo'
  <img src="image/frite.jpg" alt="" style="width:50%; display:block; margin-left:auto; margin-right:auto">';

  echo"
  <br><br>
  <p style='text-align:center'>
  La frite est un bâtonnet de pomme de terre cuit par friture dans une graisse animale ou une huile végétale. Les appellations « pomme frite » et « patate frite » sont utilisées indifféremment pour ce bâtonnet, pour une tranche ou pour une rondelle du même végétal cuit de cette façon.
  </p>

  <h3 style='color:red; text-align:center; text-decoration:underline'> Préparation </h3>
  <p style='text-align:center'>
  - Pelez les pommes de terre, lavez-les une première fois. Détaillez-les ensuite en tranches puis en frites. Ensuite, lavez-les une seconde fois et épongez-les bien dans un torchon propre pour les sécher.
  <br>
  - Plongez les frites dans un premier bain de friture une fois l'huile portée entre 140°c et 160°c. Les frites doivent alors commencer à cuire, mais pas à dorer. Ne remplissez pas trop le panier à frites pour éviter qu'elles ne collent entre elles. Mieux vaut faire en plusieurs fois si besoin. Pour savoir si l'huile est à bonne température, mettez une frite dans l'huile chaude. Il doit se former de petites bulles autour.
  <br>
  - Egouttez bien les frites une fois cuites. Ensuite, vous pouvez soit laisser vos convives saler à leur guise, soit choisir de saler deux fois. Salez une première fois au sel fin, puis à la fleur de sel, pour donner du croquant sous la dent.
  </p>
  ";
}
elseif($page == 6){
  echo'
  <img src="image/frite.jpg" alt="" style="width:50%; display:block; margin-left:auto; margin-right:auto">';

  echo"
  <br><br>
  <p style='text-align:center'>
  La frite est un bâtonnet de pomme de terre cuit par friture dans une graisse animale ou une huile végétale. Les appellations « pomme frite » et « patate frite » sont utilisées indifféremment pour ce bâtonnet, pour une tranche ou pour une rondelle du même végétal cuit de cette façon.
  </p>

  <h3 style='color:red; text-align:center; text-decoration:underline'> Préparation </h3>
  <p style='text-align:center'>
  - Pelez les pommes de terre, lavez-les une première fois. Détaillez-les ensuite en tranches puis en frites. Ensuite, lavez-les une seconde fois et épongez-les bien dans un torchon propre pour les sécher.
  <br>
  - Plongez les frites dans un premier bain de friture une fois l'huile portée entre 140°c et 160°c. Les frites doivent alors commencer à cuire, mais pas à dorer. Ne remplissez pas trop le panier à frites pour éviter qu'elles ne collent entre elles. Mieux vaut faire en plusieurs fois si besoin. Pour savoir si l'huile est à bonne température, mettez une frite dans l'huile chaude. Il doit se former de petites bulles autour.
  <br>
  - Egouttez bien les frites une fois cuites. Ensuite, vous pouvez soit laisser vos convives saler à leur guise, soit choisir de saler deux fois. Salez une première fois au sel fin, puis à la fleur de sel, pour donner du croquant sous la dent.
  </p>
  ";
}

}

else{
?>
<?php
//page d'accueil

?>
<div class="container mt-5">
  <div class="row">
    
    <div class="col-sm-4">
      <h3>Alloco</h3>
      <img src="image/Du_bon_Alloko.jpg" class="img-thumbnail" alt="Responsive image"> <br><br>
      <a href="index.php?page=3"> <button type="button" class="btn btn-dark">Voir la recette</button></a>
     
 
    </div>
    <div class="col-sm-4">
      <h3>Garba</h3>
      <img src="image/garba.jpg" class="img-thumbnail" alt="Responsive image" style="height:200px; width:500px"> <br><br>
      <a href="index.php?page=4"> <button type="button" class="btn btn-dark">Voir la recette</button></a>
     
    </div>
    <div class="col-sm-4">
      <h3>Frites</h3>        
      <img src="image/frite.jpg" class="img-thumbnail" alt="Responsive image" style="height:200px; width:500px"> <br><br>
      <a href="index.php?page=5"> <button type="button" class="btn btn-dark">Voir la recette</button></a>
    </div>
  
    <div class="col-sm-4">
      <h3>Tchep</h3>        
      <img src="image/tchep.jpg" class="img-thumbnail" alt="Responsive image" style="height:200px; width:500px"> <br><br>
      <a href="index.php?page=6"> <button type="button" class="btn btn-dark">Voir la recette</button></a>
    </div>
  </div>
</div>


<?php
}
?>


