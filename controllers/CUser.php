<?php
require_once PATH_MODEL."MUser.php";

/**
 *
 * @author Daniel ROUAIX
 *
 */

class CUser extends MUser
{
    public function __construct()
    {
        // TODO - Insert your code here
    }

    /**
    Appel du modèle pour vérification de la présence de l'adresse mail pour les nouveaux users et insertion ou message d'erreur si existe'
    */
    public function setUser ($user_nom,$user_prenom,$user_email,$user_motdepasse) {
        if (parent::userExiste($user_email)){
            $erreur = 'Adresse mail existante.';
        }else{
            if (parent::insertUser($user_nom,$user_prenom,$user_email,$user_motdepasse)){
                $message = 'Yeap ! <br /> enregistré ...';
            }else{
                $erreur = 'Inscription impossible. ';
            }
        }
        $content = PATH_VIEW."UserInscription.php";
        require_once PATH_VIEW."layout.php";
    }

    /** Appel du modèle pour liste de tous les users */
    public function getAllUsers () {
        $listeViewUser = parent::getAll();
        if(count($listeViewUser)==0){
            unset($listeViewUser);
            $erreur = "Table vide";
        }
        $content = PATH_VIEW."UsersListe.php";
        require_once PATH_VIEW."layout.php";
    }

    /**
     */
    function __destruct()
    {

        // TODO - Insert your code here
    }
}

/*
$method = $route->getServerMethod();
switch ($method) {
    case "GET":
        $listeViewUser->getUsers();
        break;
    case "POST":
        $listeViewUser->getUsers();
        break;
    default:
        $listeViewUser->getUsers();
        break;
}
*/

$listeViewUser = new CUser();
$listeViewUser->getAllUsers();


?>
