<?php
session_start();
    try{
        $bdd = new PDO('mysql:host=localhost;dbname=Biblio;charset=utf8', 'root', '');
        $bdd->setAttribute(PDO::ATTR_CASE, PDO::CASE_LOWER); // Les noms de champ seront en minuscule
        $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); //Les erreurs lanceront des excetions
}catch(Exception $e){
        die("Une erreur est survenue");
    }
    ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Librairie</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class='container'>
  <h2>Gestion du lecteur</h2> 
  	<p>Le lecteur  n°<?php echo $_SESSION['nom'];  ?> est reconnu</p>
  <h4>Voici la liste des ouvrage disponible à la réservation </h4>           
  <table class='table table-bordered'>
    <thead>
      <tr>
        
        <th>CodeLivre</th>
        <th>NomAuteur</th>
        <th>PrenomAuteur</th>
        <th>Titre</th>
        <th>Catégorie</th>
        <th>ISBN</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
   <?php
   $selec=$bdd->prepare("SELECT * FROM livres");
   $selec->execute(); 
   while ($s=$selec->fetch(PDO::FETCH_OBJ)){
        echo "
      <tr>
        <td>$s->livcode</td>
        <td>$s->nom</td>
        <td>$s->prenom</td>
        <td>$s->titre</td>
        <td>$s->categorie</td>
        <td>$s->numisbn</td>
        <td>";
        ?>
        <a href='emprunte.php?ajout=&amp;code=<?php echo $s->livcode;?>&amp;nom= <?php echo $s->nom;?>&amp;pren=<?php echo $s->prenom;?>&amp;t=<?php echo $s->titre;?>&amp;c=<?php echo $s->categorie;?>&amp;num=<?php echo $s->numisbn;?>'><?php echo "Réserver</a>
         </td>
      </tr>";
       }?>
    </tbody>
  </table>

    </tbody>
  </table>
</div>
</div>
</body>
</html>



