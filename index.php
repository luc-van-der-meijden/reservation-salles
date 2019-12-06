<?php
	session_start();
?>
<!doctype html>
<html>
	<head>
		<meta charset="UTF-8">
		<link rel="stylesheet" media="screen and (min-device-width: 480px)" href="style.css"/>
		<title>Accueil - Réservation salle</title>
	</head>
	
	<body>
		
		<header>
			<?php
				include("header.php");
			?>
		</header>
		
		<div class="body">
			<div id="accueil">
				<?php
					if(isset($_SESSION['login']) || isset($_SESSION['password']))
					{
						echo "<h2>Bienvenue ".$_SESSION['login']."</h2>";
					}
					else{
						echo "<h2>Bienvenue</h2>";
					}
				?>
				<h2>Site de réservation <br/> des salles audio et vidéo.</h2>
			</div>
		</div>
		
		<footer>
			<?php
				include("footer.php");
			?>
		</footer>
	</body>	
</html>