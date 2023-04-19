<!DOCTYPE html>
<html>
<head>
	<title>Formulaire de connexion</title>
</head>
<body>
	<h1>Formulaire de connexion</h1>
	<form action="traitement.php" method="post">
		<label for="email">Adresse e-mail :</label>
		<input type="email" name="email" required><br><br>
		<label for="password">Mot de passe :</label>
		<input type="password" name="password" required><br><br>
		<input type="submit" value="Se connecter">
	</form>
</body>
</html>