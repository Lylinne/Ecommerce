<?php
require_once('tableau/TabJeux.php');
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="style.css">
	<script src="JS/main.js" async></script>
	<title>Actu : Gaming Et Anime</title>
</head>
<body>
	<div>
		<header>
			<h1>Univers OTAKU</h1>
			<a class="home" href="Formulaire.php">Connect/</a>
			<a class="home" href="Formulaire.php">Inscrip</a>
			<div class="entete">
				<div>
					<img src="" alt="">
				</div>
				<nav>
					<ul>
						<a href="index.php"><li class="home">Accueil</li></a>
						<a href="Jeux.php"><li class="home">Jeux</li></a>
						<a href="Anime.php"><li class="home">Animes</li></a>
						<a href="#"><li class="home">A propos</li></a>
						<a href="#"><li class="home">Contact</li></a>
					</ul>
				</nav>
			</div>
		</header>
		<!-- boucle pour récupérer le tableau $tabActu-->
		<?php foreach ($tabJeux as $value) : ?>
		<div class="container">
			<div>
				<!-- $value[0] pour récuérer les titres dans $tabActu -->
	    		<h2><?= $value[0];?></h2>
	    		<div class="item_image">
	    			<!-- $value[1] pour récuérer les images dans $tabActu -->
	    			<img class="jeux" src="<?= $value[1];?>" alt="<?= $value[0];?>">
	    		</div>
			    	<!-- $value[2] pour récuérer les résumés dans $tabActu -->
			    	<p><?= $value[2];?></p>
			    	<!-- $value[3] pour récuérer les prix dans $tabActu -->
			    	<p><?= $value[3];?></p>
  			</div>
		</div>
		<!-- fin de boucle -->
		<?php endforeach; ?>
	</div>
	<footer>
	</footer>
</body>
</html>


