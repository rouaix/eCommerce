<?php
    echo "<h1>Page d'accueil</h1>";
	echo "<h2>Bonjour : ".ucfirts($_SESSION["user"]["user_prenom"])." ".strtoupper($_SESSION["user"]["user_nom"])."</h2>";
?>