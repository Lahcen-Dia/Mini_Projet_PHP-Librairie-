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
    <h2>Validation d'un lecteur</h2>
<table class="table table-striped" style="text-align:left;">
  <thead>
    <tr>
      <th scope="col">Nom         :</th>
      <td><?php echo $_POST['nom']; ?></td>
    </tr>
    <tr>
      <th scope="col">Prenom      :</th>
      <td><?php echo $_POST['prenom']; ?></td>
    </tr>
    <tr>
      <th scope="col">Adresse     :</th>
      <td><?php echo $_POST['adresse']; ?></td>
    </tr>
    <tr>
      <th scope="col">Ville       :</th>
      <td><?php echo $_POST['ville']; ?></td>
    </tr>
    <tr>
      <th scope="col">Code Postal :</th>
      <td><?php echo $_POST['codepostal']; ?></td>
    </tr>
  </thead>
  <tbody>
</table>
<p>Vous etes enregistré dans la base de la bibliothéque,</p>
<p>vous avez maintenant la possibilité de réserver des livres ou vous <a href="Login.php"> identifier ici</a></p>
</center>
</body>
</html>
<?php   
    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $adresse = $_POST['adresse'];
    $ville= $_POST['ville'];
    $codepostal= $_POST['codepostal'];
    $passe = $_POST['mdp'];
   

     if ( $nom && $prenom && $adresse && $ville && $codepostal && $passe){
       $selec=$bdd->prepare("INSERT INTO lecteurs(Nom,Prenom,Adresse,Ville,CodePostal,MotDePasse) VALUES('$nom','$prenom','$adresse','$ville','$codepostal','$passe')");
        $selec->execute();
   }else{
        echo "<script>alert('Erreur...')</script>";
    }
  

?>