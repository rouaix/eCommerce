<?php
    if(!isset($_SESSION)){session_start();}

    if(count($_GET)){
        while (list($key, $val) = each($_GET)){
        	$_SESSION[$key]= $val;
		}
        unset($_GET);
    }

    if(count($_POST)){
        while (list($key, $val) = each($_POST)){
           	$_SESSION[$key]= $val;
		}
        unset($_POST);
    }

    require_once("function.php");

    // $_SERVER['REQUEST_METHOD']

    if(!isset($_SESSION["page"])){
        $_SESSION["page"] = 'accueil';
    }

    if(!isset($_SESSION["action"])){
        $_SESSION["action"] = 'visite';
    }

    if(!isset($_SESSION["erreur"])){
        $_SESSION["erreur"] = "";
    }
    if(!isset($_SESSION["alerte"])){
        $_SESSION["alerte"] = "";
    }
    if(!isset($_SESSION["message"])){
        $_SESSION["message"] = "";
    }

    if (!isset($_SERVER['REQUEST_URI'])) {
            $_SERVER['REQUEST_URI'] = '';
    }

    $_SERVER['PATH_INFO'] = substr(urldecode($_SERVER['REQUEST_URI']),-strlen($_SERVER['REQUEST_URI'])+1 );

    $serveur = $_SERVER['SERVER_NAME'];

    // DS alias de DIRECTORY_SEPARATOR (parce que c'est bien trop long à écrire LOL)
    define('DS',DIRECTORY_SEPARATOR);

    // Chemin du dossier parent du WEBROOT)
    $chemin = __DIR__;

    define('WWW', getenv("HTTP_HOST").$_SERVER['REQUEST_URI']);

    define('PATH_WEB',  __DIR__);
    define('PATH_CONTROLLER',   $chemin . DS . 'controllers'. DS);
    define('PATH_VIEW',         $chemin . DS . 'views'. DS);
    define('PATH_MODEL',        $chemin . DS . 'models'. DS);

    /*
    require_once "route.php";
    $route = new Route();

    $route->setController("CUser");
    $route->setAction("UsersListe");

    $route->getController();
    $route->getAction();

    switch ($_SESSION["page"]) {
        case "accueil":
            $cuser = new CUser();
            $cuser->getAllUsers();
            break;
        case "user":
            break;
        case "article":
            break;
        case "inscription":
            break;
        case "article":
            break;
        default:
    }
    require_once PATH_VIEW."layout.php";
    */

    getPage();
?>
