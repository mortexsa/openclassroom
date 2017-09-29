<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr" >
    <head>
        <title>Mon blog</title>
        <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
        <link href="vue/blog/style.css" rel="stylesheet" type="text/css" /> 
    </head>
        
    <body>
        <header>
            <div class="news">
                <a href="vue/blog/inscription.php">S'inscrire</a>
                <a href="blog.php?section=connexion">Se connecter</a> 
            </div>
            <h1>Mon super blog !</h1>
        </header>
        <p>Derniers billets du blog :</p>
        <?php
        foreach($billets as $billet)
        {
        ?>
            <div class="news">
                <h3>
                    <?php echo $billet['titre']; ?>
                    <em>le <?php echo $billet['date_creation_fr']; ?></em>
                </h3>
                <p>
                    <?php echo $billet['contenu']; ?><br /><em><a href="blog.php?section=commentaires&billet=<?php echo $billet['id']; ?>">Commentaires</a></em>
                </p>
            </div>
        <?php
        }
        ?>
    </body>
</html>
