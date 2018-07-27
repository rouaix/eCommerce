<?php
//namespace models;

/**
 *
 * @author Daniel
 *
 */
class Model
{
    private $user = "";
    private $mdp = "";
    private $bdd = "";
    private $port = "";
    private $host = "127.0.0.1";

    public function __construct()
    {
         /**
         * Constructeur avec vérification si usage local ou en ligne
         */
    }

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

    /**
     */
    function __destruct()
    {}
}

?>
