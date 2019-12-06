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
		<title>Inscription - Réservation salle</title>
	</head>
	
	<body>
		<header>
			<?php
				include("header.php");
			?>
		</header>
		
		<div class="body">
			<div id="inscription">
				<form method="post">
					<input type="text" name="login" class="inscription_2" placeholder="LOGIN"/>
					<input type="password" name="passe" class="inscription_2" placeholder="MOT DE PASSE"/>
					<input type="password" name="passe2" class="inscription_2" placeholder="CONFIRMATION MOT DE PASSE"/>
					<label class="inscription_2"><input type="checkbox" name="condition"/> J'accepte les conditions générales d'utilisation.</a></label>
					<input type="submit" value="INSCRIPTION" name="inscription" class="inscription_2 inscription_3"/>
					<?php
					include("verification/verif-inscription.php");
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