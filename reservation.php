<?php
	session_start();
	if(isset($_SESSION['login']) || isset($_SESSION['password'])){}
	else
	{
		header('Location: index.php');
	}
?>	
<!doctype html>
<html>
	<head>
		<meta charset="utf-8">
		<link rel="stylesheet" href="style.css"/>
		<title>Mon Compte - Réservation salle</title>
	</head>
	
	<body>
		<header>
			<?php
				include("header.php");
			?>
		</header>
		
		<div class="body">
			<div id="reservation">
				<?php
					$connexion = mysqli_connect("localhost", "root", "", "reservationsalles");
					$requete = "SELECT * FROM reservations  WHERE id = '".$_GET['id']."'";
					$resultat = mysqli_query($connexion, $requete);
					$donnees = mysqli_fetch_assoc($resultat);
				
					$requete = "SELECT login FROM utilisateurs WHERE id = '".$donnees['id_utilisateur']."'";
					$req = mysqli_query($connexion, $requete);
					$data = mysqli_fetch_assoc($req);
				
					echo $data['login'], '<br/>';
					echo $donnees['titre'], '<br/>';
					echo $donnees['description'], '<br/>';
					echo $donnees['debut'], '<br/>';
					echo $donnees['fin'], '<br/>';
				?>
			</div>
		</div>
		
		<footer>
			<?php
				include("footer.php");
			?>
		</footer>
	</body>	
</html>