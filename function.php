<?php

/* Fonction de gestion des pages */
function getPage(){
    require_once "Route.php";
    $route = new Route();

    // Charge la class controller et la vue définie
    $route->setController("CUser");
    $route->setView("UsersListe");
    $route->getController();
    // Fin ---


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
}

/* Liste de codes erreurs */
function getCodeErreurHTTP($code){
    switch ($code) {
        case "400":
            return "Bad Request - Une syntaxe erronée ou un caractère incorrect provoque un message d'erreur. Nous vous recommandons de vérifier votre connexion Internet et si nécessaire, de mettre à jour votre navigateur.";
            break;
        case "401":
            return "Unauthorized - L'authentification de l'utilisateur a échoué. Cette erreur se produit lorsque des répertoires sont protégés par des mots de passe. Veuillez vérifier la validité des données utilisateur.";
            break;
        case "403":
            return "Forbidden - La requête n'a pas été exécutée faute de droits d'accès. Il peut y avoir plusieurs raisons :
1. Vérifiez si la page consultée possède les droits de lecture nécessaires. Vérifier les droits sur un Hébergement Linux ou un Serveur Clé-en-main ou sur un Hébergement Windows (Fichiers : 644, répertoires : 755).
2. L'erreur peut aussi signifier qu'aucune page d'accueil n'a pu être trouvée. Dans ce cas, veuillez vérifier que la page d'accueil est correctement nommée et téléchargée dans le bon répertoire.
3. Vérifiez si l'affichage de la liste des fichiers et dossiers est activé.";
            break;
        case "404":
            return "Not Found - Le fichier a été supprimé, déplacé ou renommé et ne peut plus être trouvé. Vérifiez et corrigez le lien du fichier fourni en HTML/PHP.";
            break;
        case "410":
            return "Gone - Le site Web n'est pas accessible depuis l'adresse URL saisie. Aucune adresse de redirection n'est connue.";
            break;
        case "500":
            return "Internal Server Error - Ce message d'erreur s'affiche lorsque le serveur n'a pas pu exécuter une action (livraison d'une page HTML, exécution d'un script) car cela a provoqué une erreur interne. Etant donné que ce message d'erreur est très général, il peut y avoir plusieurs raisons : un script incorrect, une erreur logicielle du serveur Web ou l'atteinte des limites du serveur (délai d'exécution d'un script, utilisation de la mémoire...).";
            break;
        case "501":
            return "Not Implemented - La fonctionnalité nécessaire n'est pas supportée par le serveur.";
            break;
        case "502":
            return "Bad Gateway - Une mauvaise réponse a été envoyée à un serveur intermédiaire par un autre serveur.";
            break;
        case "503":
            return "Service unavailable - Le serveur ne peut traiter la requête en raison d'une surcharge temporaire, d'une indisponibilité ou d'une maintenance.";
            break;

        default:
            return null;
    }
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