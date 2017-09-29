<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr" >
    <head>
        <title>Mon blog</title>
        <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
        <link href="inscription.css" rel="stylesheet" type="text/css" /> 
    </head>
    <body class="merde">
    	<fieldset class="background">
    		<legend><strong>Inscrivez-vous Maintenant !!</strong></legend>
	    	<form class="eloigner" method="post" action="inscription.php">
    		<div>	
    			<label for="pseudo">Pseudo</label>
    			<label for="pass">Mot de passe</label>
    			<label for="same_pass">Retapez votre mot de passe</label>
    			<label for="email">Adresse email</label>
    		</div>
    		<div>	
    			<input type="text" name="pseudo" id="pseudo"
    			 placeholder="Username"  required autofocus><br/>
    			<input type="password" name="pass" id="pass" placeholder="Password"  required><br/>
    			<input type="password" name="same_pass" id="same_pass" placeholder="Password Again" required><br/>
    			<input type="email" name="email" id="email" placeholder="email@exemple.fr" required><br />
	    		<input type="submit" value="Envoyer le formulaire" id="submit" required>
	    	</div>
	    	</form>
	    </fieldset>
    </body>
</html>