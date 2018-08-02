<nav id="header" class="navbar navbar-expand-lg navbar-light">
	<div class="container-fluid collapse navbar-collapse" id="navbarSupportedContent">
		<ul class="navbar-nav">
			<li class="nav-item iconNavBar">
				<a class="nav-link" href="?page=accueil&action=accueil"><img src="views/media/icone/home.png"></a>
			</li>
			<li class="nav-item dropdown"><a class="nav-link dropdown-toggle" href="/" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Catégorie</a>
				<div class="dropdown-menu" aria-labelledby="navbarDropdown">
					<a class="dropdown-item" href="?page=accueil">Accueil</a>
					<a class="dropdown-item" href="?page=cherche&categorie=artiste">Artistique</a>
					<a class="dropdown-item" href="?page=&categorie=documentaire">Documentaire</a>
					<a class="dropdown-item" href="?page=&categorie=voyages">Voyages</a>
				</div>
			</li>

			<li class="nav-item iconNavBar">
				<a class="nav-link" href="?action=favoris"><img src="views/media/icone/favoris.png"></a>
			</li>
			<?php if(isset($_SESSION["user"])){ ?>
			<li class="nav-item iconNavBar">
				<a class="nav-link" href="?action=logout" title="Sortir"><img src="views/media/icone/logout.png" alt="logout"></a>
			</li>
			<?php }else{ ?>
			<li class="nav-item iconNavBar">
				<a class="nav-link" href="?action=login" title="Connexion"><img src="views/media/icone/login.png" alt="login"></a>
			</li>
			<?php } ?>
			<li class="nav-item iconNavBar">
				<a class="nav-link" href="?action=panier.php"><img src="views/media/icone/panier.png"></a>
			</li>
		</ul>
	</div>
</nav>
