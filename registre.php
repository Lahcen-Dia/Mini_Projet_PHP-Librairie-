<?php
session_start();
include_once("substr.php");
    try{
        $bdd = new PDO('mysql:host=localhost;dbname=Biblio;charset=utf8', 'root', '');
        $bdd->setAttribute(PDO::ATTR_CASE, PDO::CASE_LOWER); // Les noms de champ seront en minuscule
        $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); //Les erreurs lanceront des excetions
}catch(Exception $e){
        die("Une erreur est survenue");
     
    }
$msg = ""; 
$username = $password = "";
if(isset($_POST['submit'])) {
  $username = trim($_POST['nom']);
  $password = trim($_POST['mdp']);
  if($username != "" && $password != "") {
   $selec=$bdd->prepare("SELECT * FROM lecteurs where nom= '$username' and motdepasse = '$password'");
    $selec->execute(); 
   if($selec->rowCount() > 0){
    header("Location: biblio.php");
   }else{
    header("Location: GestionLecteur.php");
   }
    
    }
}
  
   while ($s=$selec->fetch(PDO::FETCH_OBJ)){
    $_SESSION['nom']=trim($s->lecnum);
   }
?>