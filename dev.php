<div style="background-color:#4444;color:#fff;">
	<h3>Contrôle développement</h3>
	<?php
	echo "<p class='pad'>";
	foreach($_SESSION as $key => $val){
		if($key != "user_motdepasse" and $val!="" and $key !="password"	){
			echo $key." = ".$val."<br />";
		}
	}
	echo "</p>";
	$route = new Route();
	$route->setController("CUser");

	$cuser = new CUser();
	$ligne = $cuser->getAllUsers();
 	//if($ligne){
		//foreach($ligne as $key => $val){
			//echo $key." = ".$val."<br />"; } }

?>
</div>
