<?php

    if (!isset($_SERVER['REQUEST_URI'])) {
            $_SERVER['REQUEST_URI'] = '';
    }
    $_SERVER['PATH_INFO'] = substr(urldecode($_SERVER['REQUEST_URI']),-strlen($_SERVER['REQUEST_URI'])+1 );
    /*
    echo '<p>REQUEST_URI = '.$_SERVER['REQUEST_URI'].'</p>';
    echo '<p>PATH_INFO = '.$_SERVER['PATH_INFO'].'</p>';
    echo '<p>SERVER_NAME = '.$_SERVER['HTTP_HOST'].'</p>';
    */
    $serveur = $_SERVER['SERVER_NAME'];

    // DS alias de DIRECTORY_SEPARATOR (parce que c'est bien trop long à écrire)
    define('DS',DIRECTORY_SEPARATOR);

    //Chemin du dossier parent du WEBROOT)
    $chemin = __DIR__;

    define('WWW', getenv("HTTP_HOST").$_SERVER['REQUEST_URI']);
    /*
    echo '<p>__DIR__ = '.__DIR__.'</p>';
    echo '<p>__WWW__ = '.WWW.'</p>';
    */
    define('PATH_WEB',  __DIR__);

    define('PATH_CONTROLLER',   $chemin . DS . 'controllers'. DS);
    define('PATH_VIEW',         $chemin . DS . 'views'. DS);
    define('PATH_MODEL',        $chemin . DS . 'models'. DS);


    require_once "Route.php";
    $route = new Route();
    $route->getController();
    $route->getAction();

    require_once PATH_CONTROLLER."ControllerUser.php";

?>
