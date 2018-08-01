<?php
//namespace models;

/**
 *
 * @author Daniel
 *
 */
class Model
{
	/* Donn�es de connexion priv�es */
	private $user = "db104609";
    private $mdp = "371524253246";
    private $bdd = "db28663_ecommerce";
    private $port = "3306";
    private $host = "db28663-ecommerce.sql-pro.online.net";

    public function __construct()
    {
         /*
         	Constructeur avec v�rification si usage local ou en ligne
		 	A impl�menter d�s que possible.
         */
    }

	/* Connection � la BDD avec PDO (extension d�finissant l'interface) */
    public function connect() {
        try {
            $db = new PDO('mysql:host='.$this->host.';dbname='.$this->bdd, $this->user, $this->mdp);
            $db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
            return $db;
        }
        catch (PDOException $e) {
            $_SESSION["erreur"] = $e->getCode().' '.$e->getMessage();
            include PATH_VIEW.'500.php';
            die();
        }
    }
}

?>
