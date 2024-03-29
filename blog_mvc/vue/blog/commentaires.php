<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr" >
    <head>
        <title>Mon blog</title>
        <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
        <link href="vue/blog/style.css" rel="stylesheet" type="text/css" /> 
    </head>
        
    <body>
        <h1>Mon super blog !</h1>
        <p><a href="blog.php?section=index">Retour à la liste des billets</a></p>
            <div class="news">
                <h3><?php echo nl2br(htmlspecialchars($billet['titre'])); ?>
                <em>le <?php echo $billet['date_creation_fr']; ?></em>
                </h3>
                <p><?php echo nl2br(htmlspecialchars($billet['contenu'])); ?></p>
            </div>
        <h2>Commentaires</h2>
        <?php
        foreach($commentaires as $commentaire)
        {
        ?>
            <p><strong><?php echo $commentaire['auteur']; ?></strong> le <?php echo $commentaire['date_commentaire_fr']; ?></p>
            <p><?php echo $commentaire['commentaire']; ?></p>
        <?php
        }
        ?>
    </body>
</html>
