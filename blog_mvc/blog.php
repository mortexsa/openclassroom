<?php

include_once('modele/connexion_sql.php');

if (preg_match("#^/openclassroom/blog_mvc/blog\.php$#", $_SERVER['REQUEST_URI']) OR 
	preg_match("#^/openclassroom/blog_mvc/blog\.php\?section=index$#", $_SERVER['REQUEST_URI']))
{
    include_once('controleur/blog/index.php');
}

//else if($_GET['section'] == 'commentaires' && isset($_GET['billet']))
else if(preg_match("#^/openclassroom/blog_mvc/blog\.php\?section=commentaires&billet=[0-9]{1,}$#", $_SERVER['REQUEST_URI']))
{
	$get_billet = (int) $_GET['billet'];
	$length = $bdd->query('SELECT COUNT(*) AS length_table FROM billets');
	$longueur = $length->fetch();
	if($_GET['billet'] >0 && $_GET['billet'] <= $longueur['length_table']){
    	include_once('controleur/blog/commentaires.php');
	}
	else
	{
		echo "ERROR 002: Billet inexistant."."<br />";
	}
}
else
{
	echo "ERROR 001: Page non existante.";
}