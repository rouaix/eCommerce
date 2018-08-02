<?php
if(!isset($_SESSION)){session_start();}


    if(isset($_SESSION["action"])){
		switch ($_SESSION["action"] ) {
          case "newuser":

            $cuser = new CUser();
     		$cuser->setUser($_SESSION["user_nom"], $_SESSION["user_prenom"], $_SESSION["user_email"], $_SESSION["user_motdepasse"]);

              $act->setAction("login");
              break;
          case "inscription":
              $act->setAction("inscription");
              break;
          case "login":
			  $act->setAction("login");
              break;
          case "loginuser":
			  $cuser = new CUser();

			if($cuser->loginUsers ($_SESSION["user_email"],$_SESSION["user_motdepasse"])){
              	unset($_SESSION["user_email"]);
              	unset($_SESSION["user_motdepasse"]);
				$act->setAction("accueil");
			  }else{
				$act->setAction("login");
			  }
              break;
          case "accueil":
				$act->setAction("accueil");
              break;
		  case "logout":
				session_destroy();
				echo "<script type='text/javascript'>document.location.replace('/');</script>";
				break;
          case "panier":
			  $act->setAction("panier");
              break;
          case "favoris":
			  $act->setAction("favoris");
              break;
			case "shop":
				$act->setAction("shop");
			break;
          default:
			//$route->setAction("shop");
      	}
    }

/* Fonction de gestion des pages */
function getPage(){
	$route = new Route();
	$act = new Controller();

    switch ($_SESSION["page"]) {
        case "accueil":
            // Charge la class controller et la vue définie
            if (!isset($_SESSION["user"])){
          		if (!isset($_SESSION["action"])){
          			 $act->setAction("login");
          		}else{
                  	$act->setAction($_SESSION["action"]);
                }
            }else{
				$act->setAction("accueil");
            }
            break;
        case "shop":
			$act->setAction("shop");
            break;
        case "cherche":
			$act->setAction("cherche");
            break;
        default:
			$act->setAction("accueil");
    }
	$route->getView();
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
        $html .= "<p>";
		if(is_array($_SESSION["erreur"])){
			foreach($_SESSION["erreur"] as $key => $val){
				$html .= $key." => ".$val."<br />";
			}
		}else{
			$html .= $_SESSION["erreur"];
		}
		$html .= "</p>";
        $html .= "<hr />";
        $_SESSION["erreur"] = "";
    }
    return $html;
}

function getAlerte(){
    $html = "";
    if($_SESSION["alerte"] != ""){
        $html .= "<hr />";
        $html .= "<p>";
		if(is_array($_SESSION["alerte"])){
			foreach($_SESSION["alerte"] as $key => $val){
				$html .= $key." => ".$val."<br />";
			}
		}else{
			$html .= $_SESSION["alerte"];
		}
		$html .= "</p>";
        $html .= "<hr />";
        $_SESSION["alerte"] = "";
    }
    return $html;
}

function getMessage(){
    $html = "";
    if($_SESSION["message"] != ""){
        $html .= "<hr />";
        $html .= "<p>";
		if(is_array($_SESSION["message"])){
			foreach($_SESSION["message"] as $key => $val){
				$html .= $key." => ".$val."<br />";
			}
		}else{
			$html .= $_SESSION["message"];
		}
		$html .= "</p>";
        $html .= "<hr />";
        $_SESSION["message"] = "";
    }
    return $html;
}
?>
