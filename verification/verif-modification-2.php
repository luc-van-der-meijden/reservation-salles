<?php
	if(isset($_POST['modifier']))
	{
		if($modif_login == 1 && $modif_passe == 1)
		{
			echo "Vos données bien été modifié !";
		}
		elseif($modif_passe == 1)
		{
			echo "Votre mot de passe à bien été modifié !";
		}
		elseif($modif_login == 1)
		{
			echo "Votre login à bien été modifié !";
		}

		if($erreur_login == 1)
		{
			echo "Le pseudo $login est déjà utilisé";
		}

		if($erreur_casse == true)
		{
			echo "Veuillez remplir toutes les casses";
		}
	}
?>