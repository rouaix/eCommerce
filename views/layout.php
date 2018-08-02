<?php
	if(!isset($_SESSION)){session_start();}
    //------------------------------
?>
	<!DOCTYPE html>
	<!-- Daniel ROUAIX 2018 -->
	<html>

	<head>
		<?php require_once PATH_VIEW."header.view.php"; ?>
	</head>

	<body>
		<?php require_once PATH_VIEW."nav.view.php"; ?>
			<?php
        echo getErreur();
        echo getMessage();
        echo getAlerte();
    ?>
				<hr />
				<?php require_once $content ?>
					<hr />
					<?php require_once PATH_VIEW."footer.view.php"; ?>
						<?php require_once PATH_VIEW."body.end.script.view.php"; ?>
							<?php require_once "dev.php"; ?>
	</body>

	</html>
