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

    /*
    Appel du modèle pour vérification de la présence de l'adresse mail pour les nouveaux users et insertion ou message d'erreur si existe'
    */
    public function setUser ($user_nom,$user_prenom,$user_email,$user_motdepasse) {
        if (parent::userExiste($user_email)){
            $erreur = 'Adresse mail existante.';
        }else{
            parent::insertUser($user_nom,$user_prenom,$user_email,$user_motdepasse);
			unset($_SESSION["user_nom"]);
            unset($_SESSION["user_prenom"]);
            unset($_SESSION["user_email"]);
            unset($_SESSION["user_motdepasse"]);
        }
    }

    /*
    Appel du modèle pour liste de tous les users
    */
    public function getAllUsers () {
        $listeViewUser = parent::getAll();
        if(count($listeViewUser)==0){
            unset($listeViewUser);
            $_SESSION["erreur"] = "Table vide";
			return false;
        }else{
			return $listeViewUser;
		}
        //$content = PATH_VIEW.$_SESSION["view"].".php";
        //require_once PATH_VIEW."layout.php";
    }

	public function loginUsers ($email,$motdepasse) {
		if (parent::verificationMotDePasseUser($email, $motdepasse)){
			$_SESSION["user"] = parent::readUserEmail($email);
			$_SESSION["alerte"] .= "Connecté";
			return true;
		}else{
			$_SESSION["alerte"] .= "Non connecté";
			return false;

		}
	}
}

?>
