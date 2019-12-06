<?php
	if(isset($_POST['inscription']))
	{
		if(!empty($_POST['login']) && !empty($_POST['passe']) && !empty($_POST['passe2']))
		{
			$login = $_POST['login'];
			$passe = $_POST['passe'];
			$passe2 = $_POST['passe2'];

			$connexion = mysqli_connect("localhost", "root", "", "reservationsalles");
			
			if($passe == $passe2)
			{
				$nouveau_login = "SELECT id FROM utilisateurs WHERE login='".$login."'";
				$resultat = mysqli_query ($connexion, $nouveau_login);
				$nombre_login = mysqli_num_rows($resultat);

				if($nombre_login < 1)
				{
					if(isset($_POST['condition']))
					{
						if (preg_match('#^[a-z0-9_]+#', $login))
						{
							$passe = sha1($passe);
							$sql= "INSERT INTO utilisateurs (login, password) VALUES ('$login', '$passe')";
							mysqli_query($connexion, $sql);
							mysqli_close($connexion);
							echo '<meta http-equiv="refresh" content="0;URL=connexion.php">';
						}
						else
						{
							echo "Votre pseudo n'est pas valide";
						}
					}
					else
					{
						echo "Veillez accepter les conditions générales d'utilisation";
					}
				}
				else
				{
					echo "Le pseudo $login est déjà utilisé";
				}
			}
			else
			{
				echo "Les deux mots de passe que <br /> vous avez rentrés ne correspondent pas";
			}
		}
		else
		{
			echo "Veuillez remplir toutes les casses";
		}
	}
?>