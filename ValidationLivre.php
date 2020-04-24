<?php
session_start();
//kanconnectio m3a lbase dd
    try{
        $bdd = new PDO('mysql:host=localhost;dbname=Biblio;charset=utf8', 'root', '');
        $bdd->setAttribute(PDO::ATTR_CASE, PDO::CASE_LOWER); // Les noms de champ seront en minuscule
        $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); //Les erreurs lanceront des excetions
}catch(Exception $e){
        die("Une erreur est survenue");
    }
    ?>
<!DOCTYPE html>
<html>
<head>
    <title></title>
</head>
<body>
<center>
    <h2>Validation d'un livre</h2>
<table class="table table-striped" style="text-align:left;">
  <thead>
    <tr>
      <th scope="col">Nom de l'auter     :</th>
      <td><?php echo $_POST['nom']; ?></td>
    </tr>
    <tr>
      <th scope="col">Prénom de l'auteur :</th>
      <td><?php echo $_POST['prenom']; ?></td>
    </tr>
    <tr>
      <th scope="col">Titre              :</th>
      <td><?php echo $_POST['titre']; ?></td>
    </tr>
    <tr>
      <th scope="col">Catégorie          :</th>
      <td><?php echo $_POST['cat']; ?></td>
    </tr>
    <tr>
      <th scope="col">Numéro ISBN        :</th>
      <td><?php echo $_POST['numISBN']; ?></td>
    </tr>
  </thead>
  <tbody>

  </tbody>
</table>
</center>
</body>
</html>

<?php   
    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $titre = $_POST['titre'];
    $cat= $_POST['cat'];
    $numISBN= $_POST['numISBN'];

     if ( $nom && $prenom && $titre && $cat && $numISBN ){
       $selec=$bdd->prepare("INSERT INTO livres(Nom,Prenom,Titre,Categorie,NumISBN) VALUES('$nom','$prenom','$titre','$cat','$numISBN')");
        $selec->execute();
  } else{
        echo "<script>alert('Erreur...')</script>";
    }
  

?>