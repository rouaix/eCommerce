<?php
require_once "Route.php";
/**
 *
 * @author Daniel ROUAIX
 *
 */

class Controller extends Route
{
    public function __construct()
    {
        // TODO - Insert your code here
    }

    public function setAction($action){
      if($action!=""){
          $_SESSION["action"]=$action;
		  $this->setView($action.".view");
      }
    }

    public function getAction($action){
        return $_SESSION["action"];
    }

    public function getPage () {
        $path="";

        if (isset($_SESSION["controller"])) {
           $path = PATH_CONTROLLER.$_SESSION["controller"].'.php';
        }
        if ( is_file($path) ) {
            require_once $path;
        }else{
            return $content = PATH_VIEW."404.php";
            require_once PATH_VIEW."layout.php";
        }
    }
}

?>
