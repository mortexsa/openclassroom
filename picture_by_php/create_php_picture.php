<?php

header('content-type: image/png');


$image = imagecreate(200,50);

$orange = imagecolorallocate($image, 255, 128, 0);
$bleu = imagecolorallocate($image, 0, 0, 255);
$bleuclair = imagecolorallocate($image, 156, 227, 254);
$noir = imagecolorallocate($image, 0, 0, 0);
$blanc = imagecolorallocate($image, 255, 255, 255);

imagestring($image, 4, 35, 15, "Salut les Zéros !", $blanc);

imagepng($image);

/* 
	Enregistrer sur le disque:
		imagepng($image, "image/monimage.png"); on enregistre l'image dans le dossier "images".
*/
?>

