<?php
// Connexion à la base de données
if(!empty($_POST['pseudo']) && !empty($_POST['message']))
{
	try
	{
		$bdd = new PDO('mysql:host=localhost;dbname=testocr;charset=utf8', 'root', '');
	}
	catch(Exception $e)
	{
	        die('Erreur : '.$e->getMessage());
	}
	$_POST['pseudo'] = htmlspecialchars(trim(strip_tags($_POST['pseudo'])));
	$_POST['message'] = htmlspecialchars(trim(strip_tags($_POST['message'])));

	// Insertion du message à l'aide d'une requête préparée
	$req = $bdd->prepare('INSERT INTO minichat (pseudo, message, date_ajout) VALUES(?, ?, NOW())');
	$req->execute(array($_POST['pseudo'], $_POST['message']));
	
}
header('Location: minichat.php');

?>