<?php
	$connexion = mysqli_connect("localhost", "root", "", "reservationsalles");
	$sql = "SELECT * FROM utilisateurs WHERE id='".$_SESSION['id']."'";
	$req = mysqli_query($connexion, $sql);
	$data = mysqli_fetch_assoc($req);
	
	if(isset($_POST['modifier']))
	{
		if(!empty($_POST['login']) && !empty($_POST['passe']))
		{
			$login = $_POST['login'];
			$passe = $_POST['passe'];
			$modif_login = false;
			$modif_passe = false;
			$erreur_login = false;
			$erreur_casse = false;
			
			if($login != $data['login'])
			{
				$nouveau_login = "SELECT id FROM utilisateurs WHERE login='".$login."'";
				$resultat = mysqli_query ($connexion, $nouveau_login);
				$nombre_login = mysqli_num_rows($resultat);
				
				if($nombre_login < 1)
				{
					$sql = "UPDATE utilisateurs SET login = '$login' WHERE id = '".$_SESSION['id']."'";
					mysqli_query($connexion, $sql);
					$_SESSION['login'] = $_POST['login'];
					$modif_login = true;
				}
				else
				{
					$erreur_login = true;
				}
			}
			
			if($passe != $data['password'])
			{
				$passe = sha1($passe);
				$sql = "UPDATE utilisateurs SET password = '$passe' WHERE login = '".$_SESSION['login']."'";
				mysqli_query($connexion, $sql);
				$modif_passe = true;
			}
		}
		else
		{
			$erreur_casse = true;
		}
		mysqli_close($connexion);
	}
?>