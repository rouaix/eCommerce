<?php

/**
 * @author Daniel
 *
 */
class Route
{

    /**
     */
    public function __construct()
    {}

    private function formatUrl () {
        /* Modification du traitement des actions pour utilisation des sessions */
    }

    public function getServerMethod () {
        return $_SERVER['REQUEST_METHOD'];
        /* Identification de la methode Get ou POST su serveur*/
    }

    public function setAction ($action) {
        $_SESSION["action"]=$action;
    }

    public function getAction () {
        if (isset($_SESSION["action"])) {
            echo '<p>Action : '.$_SESSION["action"].'</p>';
        }else{
            $_SESSION["erreur"] .= '<p>Aucune action !</p>';
        }
    }

    public function setController ($controller) {
        $_SESSION["class"]=$controller;
    }

    public function getController () {
        $path="";

        if (isset($_SESSION["class"])) {
           $path = PATH_CONTROLLER.$_SESSION["class"].'.php';
        }

        if ( is_file($path) ) {
            require_once $path;
        }else{
            $content = PATH_VIEW."404.php";
            require_once PATH_VIEW."layout.php";
        }
    }
}

?>
