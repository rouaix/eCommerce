<link rel="stylesheet" type="text/css" href="./css/inscription.css">

<script type="text/javascript">
$(document).ready(function(){

	$("#toggle").change(function(){

 		// Check l'etat de la checkbox
 		if($(this).is(':checked')){
			// Change le type de la checkbox
			$("#password").attr("type","text");

			// Change le texte
			$("#toggleText").text("Hide");
		}else{
			// Change le type de la checkbox
			$("#password").attr("type","password");

  			// Change le texte
  			$("#toggleText").text("Show");
		}
	});
});
</script>

<div class="logoLogin">
	<img src="./media/logo/logo_1.png">
</div>

	<form method="POST" action="">
			<input class="form-control" id="nom" type="text" name="nom" placeholder="Nom *"/><br>
			<input class="form-control" id="prenom" type="text" name="prenom" placeholder="Prénom *" /><br>

			<input class="form-control" id="email" type="email" name="email" placeholder="Email *" /><br>
			<input class="form-control" id="password" type="password" name="password" placeholder="Mot de passe *" /><br>

			<span><input id="toggle" type="checkbox" name="showPassword">Afficher mot de passe</span> <br>

			<button name="form_connexion"value="Connexion">Connexion</button>

	</form>
