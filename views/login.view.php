<?php

if(isset($_SESSION["action"])){
	if($_SESSION["action"]=="inscription"){
		require_once PATH_VIEW."inscription.view.php";
	}
	if($_SESSION["action"]=="login"){
		?>
	<div class="logoLogin"><img src="./views/media/logo/logo_1.png"></div>
	<div>
		<form method="POST" action="">
			<input class="form-control" id="email" type="email" name="email" placeholder="Email *" />
			<br>
			<input class="form-control" id="password" type="password" name="password" placeholder="Mot de passe *" />
			<button name="form_connexion" value="Connexion">Connexion</button>
		</form>
	</div>
	<?php
	}
}

?>
