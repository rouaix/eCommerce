<?php

/**
 * @author Daniel ROUAIX
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

    public function setController ($controller) {
		if(isset($_SESSION["controller"])){
			if(is_array($_SESSION["controller"])){
				if(!in_array($controller,$_SESSION["controller"])){
					array_push($_SESSION["controller"], $controller);
				}
			}else{
				$x = $_SESSION["controller"];
				$_SESSION["controller"] = array($x);
				array_push($_SESSION["controller"], $controller);
			}

		}else{
			$_SESSION["controller"] = array();
			array_push($_SESSION["controller"], $controller);
		}
    }

    public function getController () {
        $path="";
        if (isset($_SESSION["controller"])){
			foreach($_SESSION["controller"] as $val){
           		$path = PATH_CONTROLLER.$val.'.php';
				if ( is_file($path) ) {
					require_once $path;
				}
				unset($_SESSION["controller"]);
        	}
		}
    }

    public function setView ($view) {
		if(isset($_SESSION["view"])){
			if(is_array($_SESSION["view"])){
				if(!in_array($view,$_SESSION["view"])){
					array_push($_SESSION["view"], $view);
				}
			}else{
				$_SESSION["view"]=$view;
			}


		}else{
			$_SESSION["view"] = array();
			array_push($_SESSION["view"], $view);
		}
    }

    public function getView () {
        $path = "";
		$content = array();
        if (isset($_SESSION["view"])){
			if(is_array($_SESSION["view"])){
				foreach($_SESSION["view"] as $val){
					$path = PATH_VIEW.$val.'.php';
					if (is_file($path) ) {
						//require_once $path;
						array_push($content, $path);
					}else{
						require_once PATH_VIEW."404.php";
					}
				}
			}else{
				$path = PATH_VIEW.$_SESSION["view"].'.php';
				if ( is_file($path) ) {
					//require_once $path;
					array_push($content, $path);
				}else{
					require_once PATH_VIEW."404.php";
				}
			}
			unset($_SESSION["view"]);
    	}
		require_once PATH_VIEW."layout.php";
	}

}

?>
