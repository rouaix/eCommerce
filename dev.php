<div style="background-color:#444;color:#fff;" class='pad'>
	<h4>Contrôle développement</h4>
	<hr />
	<?php
	echo "<p>";
	if(is_array($_SESSION)){
		foreach($_SESSION as $key => $val){
			if(is_array($val)){
				foreach($val as $key => $value){
					if($key != "user_motdepasse" and $value!="" and $key !="password"	){
							echo $key." = ".$value."<br />";
					}
				}
			}else{
				if($key != "user_motdepasse" and $val!="" and $key !="password"	){
						echo $key." = ".$val."<br />";
				}
			}

		}
	}
	echo "</p>";
	$route = new Route();
	$route->setController("CUser");
	echo "<hr />";
	//echo "<p>";
	$cuser = new CUser();
 	if($ligne = $cuser->getAllUsers()){
		if(is_array($ligne)){
			foreach($ligne as $key => $val){
				if(is_array($val)){
					foreach($val as $key => $value){
						if($key != "user_motdepasse" and $value!="" and $key !="password"	){
							//echo $key." = ".$value."<br />";
						}
					}
				}else{
					if($key != "user_motdepasse" and $val!="" and $key !="password"	){
						//echo $key." = ".$val."<br />";
					}
				}
			}
		}else{
			//echo $ligne."<br />";
		}
	}
	//echo "</p>";
	//echo "<hr />";
	?>
</div>
