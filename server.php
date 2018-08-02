<?php
    if(!isset($_SESSION)){session_start();}

    if(count($_GET)){
		foreach($_GET as $key => $val){
        	$_SESSION[$key]= $val;
		}
        unset($_GET);
    }

    if(count($_POST)){
		foreach($_POST as $key => $val){
           	$_SESSION[$key]= $val;
		}
        unset($_POST);
    }

    foreach ($_SESSION as $key => $value) {
      if($value == ""){
        unset($_SESSION[$key]);
      }
    }

    // DS alias de DIRECTORY_SEPARATOR (parce que c'est bien trop long à écrire LOL)
    define('DS',DIRECTORY_SEPARATOR);

    // Chemin du dossier parent du WEBROOT)
    $chemin = __DIR__;

    //define('WWW', getenv("HTTP_HOST").$_SERVER['REQUEST_URI']);
	define('WWW', "");

    define('PATH_WEB',  __DIR__);
    define('PATH_CONTROLLER',   $chemin . DS . 'controllers'. DS);
    define('PATH_VIEW',         $chemin . DS . 'views'. DS);
    define('PATH_MODEL',        $chemin . DS . 'models'. DS);

    $_SERVER['PATH_INFO'] = substr(urldecode($_SERVER['REQUEST_URI']),-strlen($_SERVER['REQUEST_URI'])+1 );

    $serveur = $_SERVER['SERVER_NAME'];

    // $_SERVER['REQUEST_METHOD']

    if(!isset($_SESSION["page"])){
        $_SESSION["page"] = 'accueil';
    }
    if(!isset($_SESSION["action"])){
        $_SESSION["action"] = 'login';
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

    require_once("Route.php");
	$route = new Route();

    getPage();

?>
