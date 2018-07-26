<?php

function getPage(){
    require_once "route.php";
    $route = new Route();

    $route->setController("CUser");
    $route->setAction("UsersListe");

    $route->getController();
    $route->getAction();

    switch ($_SESSION["page"]) {
        case "accueil":
            //$_SESSION["action"]->
                getAllUsers();
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
}

function getErreur(){
    $html = "";
    if($_SESSION["erreur"] != ""){
        $html .= "<hr />";
        $html .= "<p>".$_SESSION["erreur"]."</p>";
        $html .= "<hr />";
        $_SESSION["erreur"] = "";
    }
    return $html;
}
function getAlerte(){
    $html = "";
    if($_SESSION["alerte"] != ""){
        $html .= "<hr />";
        $html .= "<p>".$_SESSION["alerte"]."</p>";
        $html .= "<hr />";
        $_SESSION["alerte"] = "";
    }
    return $html;
}
function getMessage(){
    $html = "";
    if($_SESSION["message"] != ""){
        $html .= "<hr />";
        $html .= "<p>".$_SESSION["message"]."</p>";
        $html .= "<hr />";
        $_SESSION["message"] = "";
    }
    return $html;
}
?>
