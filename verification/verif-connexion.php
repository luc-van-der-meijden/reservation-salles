<?php 
	if(isset($_POST['Connexion']))
	{
		if(!empty($_POST['login']) && !empty($_POST['passe'])) 
		{
			$connexion = mysqli_connect("localhost", "root", "", "reservationsalles");
			$_POST['passe'] = hash("sha1", $_POST['passe']);
			extract($_POST);
			$sql = "SELECT * FROM utilisateurs WHERE login='".$login."'";
			$req = mysqli_query($connexion, $sql);
			$data = mysqli_fetch_assoc($req);

			if($data['password'] != $passe)
			{
				echo "Mauvais login / mot de passe. Merci de recommencer <br />";
			}
			else 
			{
				$_SESSION['login'] = $_POST['login'];
				$_SESSION['password'] = $_POST['passe'];
				$_SESSION['id'] = $data['id'];
				echo '<meta http-equiv="refresh" content="0;URL=index.php">';
			}
		}
		else 
		{
			echo "Remplissez tous les champs pour vous connectez !";
		}
		mysqli_close($connexion);
	}	
?>