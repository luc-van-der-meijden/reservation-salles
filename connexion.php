<?php
	session_start();
	if(!isset($_SESSION['login']) || !isset($_SESSION['password'])){}
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
		<title>Connexion - Réservation salle</title>
	</head>
	
	<body>
		<header>
			<?php
				include("header.php");
			?>
		</header>
		
		<div class="body">
			<div id="connexion">
				<form method="post">
					<input type="text" name="login" class="connexion_2" placeholder="LOGIN"/>
					<input type="password" name="passe" class="connexion_2" placeholder="MOT DE PASSE"/>
					<input type="submit" value="CONNEXION" name="Connexion" class="connexion_2 connexion_3"/>
					<?php
					include("verification/verif-connexion.php");
					?>
				</form>
			</div>
		</div>
		
		<footer>
			<?php
				include("footer.php");
			?>
		</footer>
	</body>
</html>