
<?php


// On vérifie si on l'utilisateur a demander a regarder des commentaires.
include_once('modele/blog/get_commentaires.php');
include_once('modele/blog/get_billet.php');
$billets = get_billet($_GET['billet']);
foreach($billets as $cle => $billet)
{
    $billets[$cle]['titre'] = htmlspecialchars(strip_tags($billet['titre']));
    $billets[$cle]['contenu'] = nl2br(htmlspecialchars(strip_tags($billet['contenu'])));
}
$commentaires = get_commentaires($_GET['billet']);
foreach ($commentaires as $cle => $commentaire) {
	$commentaires[$cle]['auteur'] = htmlspecialchars(strip_tags($commentaire['auteur']));
	$commentaires[$cle]['date_commentaire_fr'] = $commentaire['date_commentaire_fr'];
 	$commentaires[$cle]['commentaire'] = nl2br(htmlspecialchars(strip_tags($commentaire['commentaire'])));
}

// On affiche la page (vue)
include_once('vue/blog/commentaires.php');
