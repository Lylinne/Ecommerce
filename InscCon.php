<?php
require ('Donnee.php');


if(!empty($_POST)){
	if (isset($_POST['Email'])		&& !empty($_POST['Email']) &&
		isset($_POST['MDP'])		&& !empty($_POST['MDP']) &&
		isset($_POST['ConfiMDP'])	&& !empty($_POST['ConfiMDP'])
	){
		if (
			($_POST['MDP'] == $_POST['ConfiMDP'])
		){
			//selection tout les élément qui se trouve dans la table 'users'
			$sql = 'SELECT * FROM users WHERE Email = ?';
			//preparation de la requête
			$statement = $pdo ->prepare($sql);
			$statement-> execute(['Email']);
			$result = $statement->fetch();

			if(!$result){
				if(strlen($_POST['MDP']) <= 10 && strlen($_POST['MDP']) >= 5){
					if($_POST['MDP'] === $_POST['ConfiMDP']){
						$MDP = password_hash($_POST['MDP'], PASSWORD_BCRYPT);
						require_once('Donnee.php');
						$sql1 ='INSERT INTO users (`Email`,`MDP`) VALUES(:Email, :MDP)';

						$statement1 = $pdo->prepare($sql1);
						$resultat = $statement1->execute([
										':Email' 	=>$_POST['Email'],
										':MDP'	 	=>$_POST['MDP']
									]);

		

						if($resultat){
							$_SESSION["connect"] = true;
							$_SESSION["username"] = $username;
							header("location: page.php");

					}else{
						var_dump($_POST); die('ici');
						die("erreur d'inscription");
					}

				}else{
					die("mot de passe différent");
				}
			}else{
				die("mot de passe non conforme");
			}
		}else{
			die("utilisateur existe déjà");
		}	

	}else{

	}	}
}