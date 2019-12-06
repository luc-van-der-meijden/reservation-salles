<?php
	session_start();
	if(isset($_SESSION['login']) || isset($_SESSION['password'])){}
	else
	{
		header('Location: index.php');
	}
	include("verification/verif-modification.php");
	$connexion = mysqli_connect("localhost", "root", "", "reservationsalles");
	$sql = "SELECT * FROM utilisateurs WHERE id='".$_SESSION['id']."'";
	$req = mysqli_query($connexion, $sql);
	$data = mysqli_fetch_assoc($req);
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
			<div id="compte">
				<form method="post">
					<label>LOGIN :</label><input type="text" name="login" value="<?php echo $data['login']; ?>" class="compte_2"/><br /><br />
					<label>MOT DE PASSE :</label><input type="password" name="passe" value="<?php echo $data['password']; ?>" class="compte_2"/><br /><br />
					<input type="submit" value="MODIFIER" name="modifier" class="compte_2 compte_3"/>
					<?php
						include("verification/verif-modification-2.php");
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