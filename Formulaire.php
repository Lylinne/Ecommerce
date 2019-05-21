<?php 
require('Donnee.php');
require('configuration.php');?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="Css/styleForm.css">
	<title>inscription/connexion</title>
</head>
<body>
	<section>
		<article class="inscription">
			<form class="inscription" action="InscCon.php" method="POST">
				<h1>Inscription</h1>
				<label>E-mail</label>
				<input type="text" name="Email" placeholder="Email" required="required">
				<label>password</label>
				<input type="password" name="MDP" placeholder="MDP" required="required">
				<label>vérif-password</label>
				<input type="password" name="ConfiMDP" placeholder="ConfiMDP" required="required">
				<button type="submit" value="Inscription">Inscription</button>
			</form>
		</article>
		<article class="connxion">
			<form class="connxion" action="connexion.php" method="POST">
				<h1>Connexion</h1>
				<label>E-mail</label>
				<input type="text" name="Email" placeholder="Email" required="required">
				<label>password</label>
				<input type="password" name="MDP" placeholder="MDP" required="required">
				<button type="submit" value="connexion">Connexion</button>
			</form>
		</article>
	</section>

</body>
</html>