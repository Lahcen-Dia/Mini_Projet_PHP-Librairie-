<?php
include_once("substr.php");
    try{
        $bdd = new PDO('mysql:host=localhost;dbname=Biblio;charset=utf8', 'root', '');
        $bdd->setAttribute(PDO::ATTR_CASE, PDO::CASE_LOWER); // Les noms de champ seront en minuscule
        $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); //Les erreurs lanceront des excetions
}catch(Exception $e){
        die("Une erreur est survenue");
    }
    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $titre = $_POST['titre'];
    $cat= $_POST['cat'];
    $numISBN= $_POST['numISBN'];
    ?>
<!DOCTYPE html>
<html>
<head>
    <title></title>
</head>
<body>
    </div>
<center>
    <h2>Validation d'un livre</h2>
<table class="table table-striped" style="text-align:left;">
  <thead>
    <tr>
      <th scope="col">Nom de l'auter     :</th>
      <td><?php echo $nom; ?></td>
    </tr>
    <tr>
      <th scope="col">Prénom de l'auteur :</th>
      <td><?php echo $prenom; ?></td>
    </tr>
    <tr>
      <th scope="col">Titre              :</th>
      <td><?php echo $titre; ?></td>
    </tr>
    <tr>
      <th scope="col">Catégorie         :</th>
      <td><?php $cat; ?></td>
    </tr>
    <tr>
      <th scope="col">Numéro ISBN        :</th>
      <td><?php echo $numISBN; ?></td>
    </tr>
  </thead>
  <tbody>

  </tbody>
</table>
</center>
</body>
</html>

<?php   
      $ch1 = deux_dernier_lettre($nom);
      $ch2 = deux_dernier_lettre($prenom);
      $ch3 = deux_dernier_lettre($cat);
      $ch4=deux_Dernier_nbr_ISBN($numISBN);
            $code= $ch1.$ch2.$ch3.$ch4;   //concaténation des chaines
     
     if ( $nom && $prenom && $titre && $cat && $numISBN && $code ){
       $selec=$bdd->prepare("INSERT INTO livres(livcode,nom,prenom,titre,categorie,numisbn) VALUES('$code','$nom','$prenom','$titre','$cat','$numISBN')");
        $selec->execute();
  } else{
        echo "<script>alert('Erreur...')</script>";
    }
  

?>