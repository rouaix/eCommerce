<?php
//namespace controllers;
//use models\ModelUser;
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
