<?php
	if(isset($_POST['revervation']))
	{
		if(!empty($_POST['titre']) && !empty($_POST['description']) && !empty($_POST['date_debut']) && !empty($_POST['time_debut']))
		{
			$titre = $_POST['titre'];
			$description = $_POST['description'];
			$date_debut = $_POST['date_debut'];
			$time_debut = $_POST['time_debut'];
			$date_debut_2 = $date_debut . " " . $time_debut;
			$date_fin = $_POST['date_fin'];
			$time_fin = $_POST['time_fin'];
			$date_fin_2 = $date_fin . " " . $time_fin;
			
			$id_utilisateur = $_SESSION['id'];

			$connexion = mysqli_connect("localhost", "root", "", "reservationsalles");
			$sql= "INSERT INTO reservations (titre, description, debut, fin, id_utilisateur) VALUES ('$titre', '$description', '$date_debut_2', '$date_fin_2', '$id_utilisateur')";
			mysqli_query($connexion, $sql);
			mysqli_close($connexion);
		}
		else
		{
			echo "Veuillez remplir toutes les casses";
		}
	}
?>