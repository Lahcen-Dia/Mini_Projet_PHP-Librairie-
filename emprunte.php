
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
    <h2>Réserver un livre</h2>
<table class="table table-striped" style="text-align:left;">
  <thead>
    <tr>
      <th scope="col">Code du livre      :</th>
      <td><?php echo $code; ?></td>
    </tr>
    <tr>
      <th scope="col">Nom de l'Auteur    :</th>
      <td><?php echo $pren; ?></td>
    </tr>
    <tr>
      <th scope="col">Prénom de l'Auteur :</th>
      <td><?php echo $nom ; ?></td>
    </tr>
    <tr>
      <th scope="col">Titre              :</th>
      <td><?php echo $t; ?></td>
    </tr>
    <tr>
      <th scope="col">Catégorie          :</th>
      <td><?php echo $c; ?></td>
    </tr>
    <tr>
      <th scope="col">ISBN               :</th>
      <td><?php echo $num; ?></td>
    </tr>
  </thead>
  <tbody>
</table>
<input type="submit" name="confirmer" value="Confirmer">
</center>
</body>
</html>
<?php
}
           ?>