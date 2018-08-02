<?php
    if(!isset($_SESSION)){session_start();}

    if(count($_GET)){
		foreach($_GET as $key => $val){
			if ($key == "user_motdepasse" || $key == "password"){
				$val = password_hash($val, PASSWORD_DEFAULT);
			}
			if($key == "controller" || $key == "action" || $key == "view"){
				if(!is_array($_SESSION[$key])){
					$x = $_SESSION[$key];
					$_SESSION[$key] = array($x);
					array_push($_SESSION[$key], $val);
				}else{
					array_push($_SESSION[$key], $val);
				}
			}else{
        		$_SESSION[$key]= $val;
			}
		}
        unset($_GET);
		echo "<script type='text/javascript'>document.location.replace('index.php');</script>";
    }

    if(count($_POST)){
		foreach($_POST as $key => $val){
			if ($key == "user_motdepasse" || $key == "password"){
				$val = password_hash($val, PASSWORD_DEFAULT);
			}
			if($key == "controller" || $key == "action" || $key == "view"){
				if(!is_array($_SESSION[$key])){
					$x = $_SESSION[$key];
					$_SESSION[$key] = array($x);
					array_push($_SESSION[$key], $val);
				}else{
					array_push($_SESSION[$key], $val);
				}
			}else{
        		$_SESSION[$key]= $val;
			}
		}
        unset($_POST);
		echo "<script type='text/javascript'>document.location.replace('index.php');</script>";
    }

    foreach ($_SESSION as $key => $value) {
      if($value == ""){
        //unset($_SESSION[$key]);
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
	require_once PATH_CONTROLLER."Controller.php";
	require_once PATH_CONTROLLER."CUser.php";

 	global $route;
 	$route = new Route();

	global $action;
	$act = new Controller();



	require_once ("fonction.php");
    getPage();
	$route->getView();

?>
