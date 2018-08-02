<link rel="stylesheet" type="text/css" href="../views/css/favoris.css">

<?php include('../views/nav.view.php');?>

<div class="container-fluid">
	<div class="row">
		<div class="col-md-12">
			<h3>Favoris</h3>
		</div>
	</div>
	<!--BASE_HTML_pour_AFFICHAGE_des_ARTICLES_dans_les_FAVORIS-->
<!--PHP_EN_COURS-->
	<div class="row articleFavoris">
		<div class="col-md-3 FavArticle">
			<img src="../views/media/2test.webp">
			<p>Titre photo</p>
			<p>Finition :</p>
			<p>Dimension :</p>
			<p>Cadre :</p>
			<p>Ajouter au panier   <a href="./favoris.view.php"><img src="../views/media/icone/panier.png"></a></p>
		</div>

	</div>

</div>
<?php include('../views/footer.view.php'); ?>
