<?php
	session_start();
	if(isset($_SESSION['login'])){}
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
		<title>Réservation - Réservation salle</title>
	</head>
	
	<body>
		<header>
			<?php
				include("header.php");
			?>
		</header>
		
		<div class="body">
			<div id="revervation">
				<form name="reservation" method="post">
					<input type="text" name="titre" class="revervation_2" placeholder="TITRE"/>
					<textarea name="description" class="revervation_2" placeholder="DESCRIPTION"></textarea>
					<div class="date">
						<input type="date" name="date_debut" class="revervation_3" onchange="reservation.date_fin.value=reservation.date_debut.value"/>
						<input type="time" name="time_debut" class="revervation_3" onchange="reservation.time_fin.value=reservation.time_debut.value" value="08:00" step="3600" min="08:00" max="19:00"/>
					</div>
					<h3>Crénaux de 1h uniquement</h3>
					<div class="date">
						<input type="date" name="date_fin" class="revervation_3"/>
						<input type="time" name="time_fin" class="revervation_3" value="09:00"/>
					</div>
					<input type="submit" value="RÉSERVER" name="revervation" class="revervation_2 revervation_4"/>
					<?php
					include("verification/verif-reservation.php");
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