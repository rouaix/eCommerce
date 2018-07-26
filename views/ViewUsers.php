<?php
//namespace views;

/**
 *
 * @author Daniel ROUAIX
 *
 */

echo "<hr />Views/ViewUsers.php<br />";

    if (isset($listeViewUser)){
        foreach ($listeViewUser as $user) {
            echo '<BR />- '.$user["user_nom"];
        }
    }else{
        if(isset($erreur)){
            echo "<p>".$erreur."</p>";
            unset($erreur);
        }
    }

echo "<hr />";
?>
