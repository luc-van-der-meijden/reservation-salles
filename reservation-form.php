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
			<div id="reservation_form">
				<form name="reservation" method="post">
					<input type="text" name="titre" class="reservation_2" placeholder="TITRE"/>
					<textarea name="description" class="reservation_2" placeholder="DESCRIPTION"></textarea>
					<select name="salles" class="reservation_select reservation_2">
						<option value="">--Choisissez une option--</option>
						<option value="vidéo">Salle Vidéo</option>
						<option value="audio">Salle Audio</option>
					</select>
					<div class="date">
						<input type="date" name="date_debut" class="reservation_3" onchange="reservation.date_fin.value=reservation.date_debut.value"/>
						<input type="time" name="time_debut" class="reservation_3" onchange="reservation.time_fin.value=reservation.time_debut.value" value="08:00" step="3600" min="08:00" max="18:00"/>
					</div>
					<h3>Crénaux de 1h uniquement</h3>
					<div class="date">
						<input type="date" name="date_fin" class="reservation_3"/>
						<input type="time" name="time_fin" class="reservation_3" value="09:00" step="3600" min="09:00" max="19:00"/>
					</div>
					<input type="submit" value="RÉSERVER" name="reservation" class="reservation_2 reservation_4"/>
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