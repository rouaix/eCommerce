<?php
//namespace views;

/**
 *
 * @author Daniel ROUAIX
 *
 */

echo "<hr />Views/UsersListe.php<br />";

    if (isset($listeViewUser)){
        echo '<h3>Liste des utilisateurs</h3>';
        echo '<ul>';
        foreach ($listeViewUser as $user) {
            echo '<li>'.ucfirst($user["user_prenom"]).' '.strtoupper($user["user_nom"]).'</li>';
        }
        echo '</ul>';
    }else{
        if(isset($erreur)){
            echo "<p>".$erreur."</p>";
            unset($erreur);
        }
    }

echo "<hr />";
?>
