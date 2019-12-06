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
			<section id="agenda">
				<table>
					<thead>
						<tr id="jours">
							<th class="heure"></th>
							<th class="jour2">Lundi</th>
							<th class="jour2">Mardi</th>
							<th class="jour2">Mercredi</th>
							<th class="jour2">Jeudi</th>
							<th class="jour2">Vendredi</th>
							<th class="jour2">Samedi</th>
							<th class="jour2">Dimanche</th>
						</tr>
					</thead>
					<tbody>
						<?php
							$connexion = mysqli_connect("localhost", "root", "", "reservationsalles");
							$requete = "SELECT * FROM reservations  WHERE YEAR(debut) = YEAR(CURDATE()) AND WEEK(debut) = WEEK(CURDATE())";
							$resultat = mysqli_query($connexion, $requete);
						
							for($l = 8; $l < 19; ++$l)
							{
								echo '<tr class="ligne">';
									echo '<td class="heure">', $l, '</td>';
								
									for($i = 1; $i <= 7; ++$i) 
									{
										echo '<td class="evenement">';
										$d = 0;
										
										foreach($resultat as $donnees)
										{
											$date = date_create($donnees['debut'])->format('d/m/Y');
											list($jour, $mois, $annee) = explode('/', $date);
											$timestamp = mktime (0, 0, 0, $mois, $jour, $annee);
											$joursem = date("w",$timestamp);

											$heure = date_create($donnees['debut'])->format('G');
											
											if($joursem == $i && $heure == $l)
											{
												$requete2 = "SELECT login FROM utilisateurs WHERE id = '".$donnees['id_utilisateur']."'";
												$req = mysqli_query($connexion, $requete2);
												$data = mysqli_fetch_assoc($req);
												
												$id = $donnees['id'];
												echo "<a href='reservation.php?id=", $id, "'>";
												echo $data['login'], '<br/>';
												echo $donnees['titre'];
												echo '</a>';
											}
											++$d;
										}
										echo '</td>';
									}
								echo'</tr>';
							}
						
						?>
					</tbody>
				</table>
			</section>
		</div>
		
		<footer>
			<?php
				include("footer.php");
			?>
		</footer>
	</body>
</html>