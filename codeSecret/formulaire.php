<!DOCTYPE html>
<html>
<head>
	<title>Formulaire de connexion</title>
</head>
	<body>
		<?php 
		if(!isset($_POST['username']) && !isset($_POST['password']))
		{
		?>
			<p>Veuillez vous connecter pour acceder au code secret de la NASA.</p>
			<form action="formulaire.php" method="post" >
				<fieldset>
					<legend>Vos identifiants</legend>
					<p>
						<p>
							<label>Username : <input type="text" name="username" size="15" maxlength="15" placeholder="Ex : Patrick" id="pseudo" required ></label>
						</p>
						<p>
							<label>Password : <input type="password" name="password" id="password" maxlength="20" required></label>
						</p>
						<p>
							<input type="submit" value="Se Connecter">
						</p>
					</p>
				</fieldset>
			</form>
		<?php	
		}
		elseif (isset($_POST['username']) && isset($_POST['password']) && !($_POST['password'] == 'kangourou')) 
		{
		?>
			<p>Veuillez vous connecter pour acceder au code secret de la NASA.</p>
			<form action="formulaire.php" method="post" >
				<fieldset>
					<legend>Vos identifiants</legend>
					<p>
						<p>
							<label>Username : <input type="text" name="username" size="15" maxlength="15" placeholder="Ex : Patrick" id="pseudo" required ></label>
						</p>
						<p>
							<label>Password : <input type="password" name="password" id="password" maxlength="20" required></label>
						</p>
							<p>Veuillez entrez un mot de passe valide!.</p>
						<p>
							<input type="submit" value="Se Connecter">
						</p>
					</p>
				</fieldset>
			</form>
		<?php
		}
		else
		{
			echo '<p>username : ' . strip_tags($_POST['username']) . '</p>';
			echo '<p>password : ' . $_POST['password'] . '</p>';
			?>
			<p>voici les codes<p>
			<?php	
		}
		?>

	</body>
</html>