<?php
// 1 : on ouvre le fichier
$monfichier = fopen('fichier.txt', 'r+');
 
// 2 : on lit la première ligne du fichier

while ($ligne = fgets($monfichier)) 
{
	# code...
	echo '<p>' . $ligne . '</p>';
}
	
 
// 3 : quand on a fini de l'utiliser, on ferme le fichier
fclose($monfichier);
?>