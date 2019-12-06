<nav>
	<img id="img_menu" src="Images/laplateforme-long2.png">
	<ul>
		<li><a href="index.php">Accueil</a></li>
		<li><a href="planning.php">Planning</a></li>
		<?php
			if(!isset($_SESSION['login']) || !isset($_SESSION['password']))
			{
				echo '
					<li><a href="connexion.php">Connexion</a></li>
					<li><a href="inscription.php">Inscription</a></li>
				';
			}
			else
			{
				echo '<li><a href="reservation-form.php">Réserver</a></li>';
				echo '<li><a href="profil.php">Mon compte</a></li>';
				echo '<li><a href="deconnection.php">Déconnexion</a></li>';
			}
		?>
	</ul>
</nav>