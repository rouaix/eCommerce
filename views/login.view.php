<?php

if(isset($_SESSION["action"])){
	if($_SESSION["action"]=="inscription"){
		require_once PATH_VIEW."inscription.view.php";
	}
	if($_SESSION["action"]=="login"){
		?>
	<!--LINK_CSS-->
	<div class="logoLogin"><img src="views/media/logo/logo_1.png"></div>
	<form method="POST" action="?action=loginuser">
		<input class="form-control" id="email" type="email" name="user_email" placeholder="Email *" />
		<br>
		<input class="form-control" id="password" type="password" name="user_motdepasse" placeholder="Mot de passe *" />
		<button name="form_connexion" value="Connexion">Connexion</button>
	</form>
	<div class="centre"><a href="?action=inscription" title="Inscription">Pour vous inscrire cliquez ici !</a></div>
	<?php
	}
}

?>
