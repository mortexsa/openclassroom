
<?php 
// On démarre la session 
session_start();

?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Mini-chat</title>
    </head>
    <style>
    form
    {
        text-align:center;
    }
    </style>
    <body>
    
    <form action="minichat_post.php" method="post">
        <p>
        <label for="pseudo">Pseudo</label> : <input type="text" name="pseudo" id="pseudo" placeholder="Ex : Chabane" maxlength="20" <?php if(isset($_SESSION['pseudo'])){ echo "value=".$_SESSION['pseudo']; }?> ><br />
        <label for="message">Message</label> :  <input type="text" name="message" id="message" maxlength="254" /><br />

        <input type="submit" value="Envoyer" name="submit_envoyer" />
	</p>
    </form>

<?php
// Connexion à la base de données
try
{
	$bdd = new PDO('mysql:host=localhost;dbname=testocr;charset=utf8', 'root', '');
}
catch(Exception $e)
{
        die('Erreur : '.$e->getMessage());
}

// Récupération des 10 derniers messages
$reponse = $bdd->query('SELECT pseudo, message, DATE_FORMAT(date_ajout,\'Le %d/%m/%Y à %Hh%imin%ss\') AS date_ajout_fr FROM minichat ORDER BY ID DESC LIMIT 0, 10');

// Affichage de chaque message (toutes les données sont protégées par htmlspecialchars)
while ($donnees = $reponse->fetch())
{
	echo '<p>'.'['.htmlspecialchars($donnees['date_ajout_fr']).'] '.'<strong>' . htmlspecialchars($donnees['pseudo']) . '</strong> : ' . htmlspecialchars($donnees['message']) . '</p>';
}

$reponse->closeCursor();
?>
    </body>
</html>