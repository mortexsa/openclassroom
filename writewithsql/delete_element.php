<?php

try
{
	$bdd = new PDO('mysql:host=localhost;dbname=testocr;charset=utf8','root','');
}
catch(Exception $e)
{
	die('Erreur : '.$e->getMessage());
}

$bdd->exec('DELETE FROM jeux_video WHERE nom=\'Battlefield 1942\'');
	echo "L'élement a bien été suprimer du tableau.";
?>