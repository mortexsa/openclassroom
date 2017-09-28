
<?php


// On vérifie si on l'utilisateur a demander a regarder des commentaires.
include_once('modele/blog/get_commentaires.php');
include_once('modele/blog/get_billets.php');
$billets = get_billets($_GET['billet']-1,$_GET['billet']);
$commentaires = get_commentaires($_GET['billet']);
foreach ($commentaires as $cle => $commentaire) {
	$commentaires[$cle]['auteur'] = htmlspecialchars(strip_tags($commentaire['auteur']));
	$commentaires[$cle]['date_commentaire_fr'] = $commentaire['date_commentaire_fr'];
 	$commentaires[$cle]['commentaire'] = nl2br(htmlspecialchars($commentaire['commentaire']));
}

// On affiche la page (vue)
include_once('vue/blog/commentaires.php');
