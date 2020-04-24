<?php 

?>
<DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<h2>Confirmation de votre réservation</h2>
Votre date de réservation :<?php  echo date("Y-m-j").'<br>';?>
Date de retour   :<?php $date = new DateTime(); // date du jour
$date->modify('+10 day');
echo $date->format('Y-m-d');;?>
<p>Vous pouvez revenir à la liste des livres disponible à la réservation en cliquant <a href="biblio.php">ici</a></p>
</body>
</html>
<?php ?>