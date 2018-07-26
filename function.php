<?php

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
