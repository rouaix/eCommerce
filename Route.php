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
        $url = $_SERVER['PATH_INFO'];
        //$url = $_SERVER['REQUEST_URI'];
        $urlTrim = trim($url, '/');
        return explode('/', $urlTrim);
    }

    public function getMethod () {
        return $_SERVER['REQUEST_METHOD'];
    }

    public function getAction () {
        $urlTab = $this->formatUrl();
        $action = $urlTab[1];
        if ($action !='') {
            echo '<p>Action : '.$action.'</p>';
        }else{
            echo '<p>Aucune action : ('.$_SERVER['REQUEST_URI'].')'.'</p>';
        }
    }

    public function getController () {

        $urlTab = $this->formatUrl();
        $controller = $urlTab[0];

        global $app;
        $path = PATH_CONTROLLER.$controller.'.php';

        if ( is_file($path) ) {
            require_once $path;
        }
        else {
            require_once PATH_VIEW."404.php";
            //require_once PATH_VIEW."accueil.php";
        }
    }

    public function setController ($action) {
        global $app;
        $path = PATH_CONTROLLER.$action.'.php';

        if ( is_file($path) ) {
            require_once $path;
        }
        else {
            //require_once PATH_VIEW."404.php";
            require_once PATH_VIEW."accueil.php";
        }
    }

    /**
     */
    function __destruct()
    {}
}

?>
