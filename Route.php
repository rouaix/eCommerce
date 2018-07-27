<?php

/**
 * @author Daniel
 *
 */
class Route
{

    public function __construct()
    {}

    private function formatUrl () {
        /* Modification du traitement des actions pour utilisation des sessions */
    }

    public function getServerMethod () {
        return $_SERVER['REQUEST_METHOD'];
        /* Identification de la methode Get ou POST su serveur*/
    }

    public function setView ($action) {
        $_SESSION["view"]=$action;
    }

    public function getView () {
        if (isset($_SESSION["view"])) {
            $_SESSION["message"] .='<p>View : '.$_SESSION["view"].'</p>';
        }else{
            $_SESSION["erreur"] .= '<p>Aucune vue !</p>';
        }
    }

    public function setController ($controller) {
        $_SESSION["controller"]=$controller;
    }

    public function getController () {
        $path="";

        if (isset($_SESSION["controller"])) {
           $path = PATH_CONTROLLER.$_SESSION["controller"].'.php';
        }

        if ( is_file($path) ) {
            require_once $path;
        }else{
            return $content = PATH_VIEW."404.php";
            //require_once PATH_VIEW."layout.php";
        }
    }
}

?>
