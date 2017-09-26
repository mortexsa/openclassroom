<?php

session_start();

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
	$pseudo = htmlspecialchars(strip_tags($_POST['pseudo']));
	$message = htmlspecialchars(strip_tags($_POST['message']));
	// Insertion du message à l'aide d'une requête préparée
	$req = $bdd->prepare('INSERT INTO minichat (pseudo, message, date_ajout) VALUES(?, ?, NOW())');
	$req->execute(array($pseudo, $message));
	$_SESSION['pseudo'] = $pseudo;
	
}

header('Location: minichat.php');

?>