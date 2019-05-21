<?php
require_once('tableau/TabActu.php');
require_once('tableau/ActuJeux.php');
?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="Css/style.css">
	<script src="JS/main.js" async></script>
	<title>Actu : Gaming Et Anime</title>
</head>
<body>
	<div>
		<header>
			<div class="titre">
				<h1>Univers OTAKU</h1>
				<a class="home" href="Formulaire.php">Connect/</a>
				<a class="home" href="Formulaire.php">Inscrip</a>
			</div>
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
		<div class="container">
			<div class="carousel">
				<!-- boucle pour récupérer le tableau $tabActu-->
				<?php foreach ($actuJeux as $key => $value) : ?>
						<!-- $value[0] pour récuérer les titres dans $tabActu -->
						<div class="carouselItem" style="display: <?= $key == 0 ? 'block' : 'none' ?>">
		    				<h2><?= $value[0];?></h2>	    				

		    				<div class="item_image">
		    					<!-- $value[1] pour récuérer les images dans $tabActu -->
		    					<img class="jeux" src="<?= $value[1];?>" alt="<?= $value[0];?>">
		    				</div>
				    			<!-- $value[2] pour récuérer les résumés dans $tabActu -->
				    			<p class="paraJeux"><?= $value[2];?></p>
				    			<!-- $value[3] pour récuérer les prix dans $tabActu -->
				    			<p class="paraJeux"><?= $value[3];?></p>
				    	</div>
				<!-- fin de boucle -->
				<?php endforeach; ?>
			</div>
				<div>
	  				<a href="#myCarousel" role="button">
    					<span></span>
    					<span>Previous</span>
  					</a>
  					<a href="#myCarousel" role="button">
    					<span></span>
    					<span>Next</span>
  					</a>
				</div>
			</div>
		</div>
		<!-- boucle pour récupérer le tableau $actuJeux-->
		<?php foreach ($tabActu  as $value) : ?>
			<article>
				<!-- $value[0] pour récuérer les titres dans $tabActu -->
				<h3><?= $value[0];?></h3>
				<div>
					<!-- $value[1] pour récuérer les images dans $tabActu -->
					<img src="<?= $value[1];?>" alt="<?= $value[0];?>">
				</div>
				<!-- $value[2] pour récuérer les résumés dans $tabActu -->
				<p><?= $value[2];?></p>
				<!-- $value[3] pour récuérer les prix dans $tabActu -->
				<p><?= $value[3];?></p>
			</article>
			<!-- fin de boucle -->
		<?php endforeach; ?>

		<script type="text/javascript">

			function getCarousel() {
				var carouselItem = document.getElementsByClassName('carouselItem');

				for(i = 0; i < carouselItem.length; i++) {
					if(carouselItem[i].style.display == 'block') {
						//mettre en none si 1 en block
						carouselItem[i].style.display = 'none';
						// si i est plus Grand ou = retourne au départ
						if(i+1 >= carouselItem.length) {
							i = 0;
						}
						else {
							i+=1;
						}
						carouselItem[i].style.display = 'block';
						break;
					} 
				}
			}
				//le nombre de second affiché
			var a = setInterval(getCarousel, 5000);
		</script>
	</div>
	<footer>
		
	</footer>

</body>
</html>