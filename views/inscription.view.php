<link rel="stylesheet" type="text/css" href="../views/css/inscription.css">
<script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
<script type="text/javascript">
	$(document).ready(function () {
		$("#toggle").change(function () {
			// Check l'etat de la checkbox
			if ($(this).is(':checked')) {
				// Change le type de la checkbox
				$("#password").attr("type", "text");
				// Change le texte
				$("#toggleText").text("Hide");
			}
			else {
				// Change le type de la checkbox
				$("#password").attr("type", "password");
				// Change le texte
				$("#toggleText").text("Show");
			}
		});
	});
</script>
<div class="logoLogin">
	<a href="../index.php"> <img src="../views/media/logo/logo_1.png"></a>
</div>
<form method="POST" action="">
	<input class="form-control" id="nom" type="text" name="user_nom" placeholder="Nom *" />
	<br>
	<input class="form-control" id="prenom" type="text" name="user_prenom" placeholder="Prénom *" />
	<br>
	<input class="form-control" id="email" type="email" name="user_email" placeholder="Email *" />
	<br>
	<input class="form-control" id="password" type="password" name="user_motdepasse" placeholder="Mot de passe *" />
	<br>
	<input type="hidden" name="action" value="newuser"> <span><input id="toggle" type="checkbox" name="showPassword">Afficher mot de passe</span>
	<br>
	<button name="form_connexion" value="Connexion">Connexion</button>
</form>
