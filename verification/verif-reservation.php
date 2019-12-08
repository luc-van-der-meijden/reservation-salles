<?php
	if(isset($_POST['reservation']))
	{
		if(!empty($_POST['titre']) && !empty($_POST['description']) && !empty($_POST['date_debut']) && !empty($_POST['time_debut']))
		{
			$titre = $_POST['titre'];
			$description = $_POST['description'];
			$salles = $_POST['salles'];
			$date_debut = $_POST['date_debut'];
			$time_debut = $_POST['time_debut'];
			$date_debut_2 = $date_debut . " " . $time_debut;
			$date_fin = $_POST['date_fin'];
			$time_fin = $_POST['time_fin'];
			$date_fin_2 = $date_fin . " " . $time_fin;
			$id_utilisateur = $_SESSION['id'];
			
			$connexion = mysqli_connect("localhost", "root", "", "reservationsalles");
			$verif_date = "SELECT id FROM reservations WHERE debut='".$date_debut_2."'";
			$resultat = mysqli_query ($connexion, $verif_date);
			$nombre_date = mysqli_num_rows($resultat);
			
			if($nombre_date == 0)
			{
				if($date_debut == $date_fin)
				{
					if($salles != "")
					{
						$sql= "INSERT INTO reservations (titre, description, salles, debut, fin, id_utilisateur) VALUES ('$titre', '$description', '$salles', '$date_debut_2', '$date_fin_2', '$id_utilisateur')";
						mysqli_query($connexion, $sql);
						mysqli_close($connexion);
					}
					else
					{
						echo "Veuillez selectionner une salle";
					}
				}
				else
				{
					echo "Les dates ne sont pas les mêmes";
				}
			}
			else
			{
				echo "Ce crénaux n'est pas disponible";
				echo $nombre_date;
			}
		}
		else
		{
			echo "Veuillez remplir toutes les casses";
		}
	}
?>