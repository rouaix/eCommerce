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

    public function setAction($action){
        $_SESSION["action"]=$action;
		$this->setView($action.".view");
    }

    public function getAction($action){
        return $_SESSION["action"];
    }

    public function setView ($view) {
        $_SESSION["view"]=$view;
    }

    public function getView () {
        if (isset($_SESSION["view"])) {
			$path = PATH_VIEW.$_SESSION["view"].'.php';
			if ( is_file($path) ) {
				$content = $path;
				require_once PATH_VIEW."layout.php";
			}else{
				return $content = PATH_VIEW."404.php";
				require_once PATH_VIEW."layout.php";
			}

        }else{
            $_SESSION["erreur"] .= '<p>Aucune vue !</p>';
        }
    }

    public function setController ($controller) {
        $_SESSION["controller"]=$controller;
		$this->getController();
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
