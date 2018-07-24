<?php
require_once PATH_MODEL."ModelUser.php";

/**
 *
 * @author Daniel ROUAIX
 *
 */

class ControllerUser extends ModelUser
{
    public function __construct()
    {
        // TODO - Insert your code here
    }

    /** Appel du modèle pour vérification de la présence de l'adresse mail pour les nouveaux users et insertion ou message d'erreur si existe' */
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
        $content = PATH_VIEW."ViewUserInscription.php";
        require_once PATH_VIEW."layout.php";
    }

    /** Appel du modèle pour liste de tous les users */
    public function getUsers () {
        $listeViewUser = parent::getAll();
        if(count($listeViewUser)==0){
            unset($listeViewUser);
            $erreur = "Table vide";
        }
        $content = PATH_VIEW."ViewUsers.php";
        require_once PATH_VIEW."layout.php";
    }

    /**
     */
    function __destruct()
    {

        // TODO - Insert your code here
    }
}

$listeViewUser = new ControllerUser();
$method = $route->getMethod();

switch ($method) {
    case "GET":
        $listeViewUser->getUsers();
        break;
    case "POST":
        $listeViewUser->getUsers();
        break;
}
?>
