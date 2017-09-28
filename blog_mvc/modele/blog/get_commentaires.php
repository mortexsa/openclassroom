<?php

function get_commentaires($id_billet)
{
	global $bdd;
	$id_billet = (int) $id_billet;

	$req = $bdd->prepare('SELECT auteur, commentaire, DATE_FORMAT(date_commentaire, \'%d/%m/%Y à %Hh%imin%ss\') AS date_commentaire_fr FROM commentaires WHERE id_billet = :id_billet ORDER BY date_commentaire');
	
	$req->bindParam(':id_billet', $id_billet, PDO::PARAM_INT);
	$req->execute();
	$commentaires = $req->fetchAll();

	return $commentaires;
}