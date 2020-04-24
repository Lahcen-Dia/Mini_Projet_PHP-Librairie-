
  <?php

    if (isset($_GET['ajout'])) {
           $code=  (isset($_GET['code'])? $_GET['code']:null ) ;
           $pren=  (isset($_GET['pren'])? $_GET['pren']:null ) ;
           $nom=  (isset($_GET['nom'])? $_GET['nom']:null ) ;
           $t=  (isset($_GET['t'])? $_GET['t']:null ) ;
           $c=  (isset($_GET['c'])? $_GET['c']:null ) ;
           $num=  (isset($_GET['num'])? $_GET['num']:null ) ;
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
      <td><?php $code; ?></td>
    </tr>
    <tr>
      <th scope="col">Prenom      :</th>
      <td><?php $pren;?></td>
    </tr>
    <tr>
      <th scope="col">Adresse     :</th>
      <td><?php echo $nom ;?></td>
    </tr>
    <tr>
      <th scope="col">Ville       :</th>
      <td><?php echo $t; ?></td>
    </tr>
    <tr>
      <th scope="col">Code Postal :</th>
      <td><?php echo c; ?></td>
    </tr>
  </thead>
  <tbody>
</table>
<p>Vous etes enregistré dans la base de la bibliothéque,</p>
<p>vous avez maintenant la possibilité de réserver des livres ou vous <a href="Login.php"> identifier ici</a></p>
</center>
</body>
</html>