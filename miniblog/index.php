<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<link rel="stylesheet" href="blogstyle.css">
		<title>Billets_du_blog</title>
	</head>
	<body>
		<h1>Mon super blog !</h1>
		<p>Derniers billets du blog:</p>
	</body>
</html>

<?php
try
{
	$bdd = new PDO('mysql:host=localhost;dbname=testocr;charset=utf8','root','');
}
catch(Exception $e)
{
	die('Erreur : '.$e->getMessage());
}

$reponse = $bdd->query('SELECT * FROM billets ORDER BY date_creation DESC LIMIT 0,5');

	while($donnees = $reponse->fetch())
	{
		echo "<h3>".$donnees['titre']."le ".$donnees['date_creation']."</h3>";
		echo "string";
	}

$reponse->closeCursor();
?>