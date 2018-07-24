<?php
//namespace models;

/**
 *
 * @author Daniel
 *
 */
class Model
{
    private $user = "root";
    private $mdp = "genius371524";
    private $bdd = "ecommerce";
    private $port = "3306";
    private $host = "localhost";

     /**
     * Constructeur avec vérification si usage local ou en ligne
     */
    public function __construct()
    {
        if ($serveur == "localhost" or $serveur == "localhost:8080" or $serveur == "127.0.0.1") {
            $this->$user = "root";
            $this->$mdp = "genius371524";
            $this->$bdd = "ecommerce";
            $this->$host = "localhost";
            $this->$port = "3306";
        }else{
            $this->$user = "db104314";
            $this->$mdp = "371524253246";
            $this->$bdd = "db28663_forum";
            $this->$host = "db28663-forum.sql-pro.online.net";
            $this->$port = "3306";
        }

    }

    public function connect() {
        try {
            $db = new PDO('mysql:host='.$this->host.';dbname='.$this->bdd, $this->user, $this->mdp);
            $db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
            return $db;
        }
        catch (PDOException $e) {
            $error = $e->getCode().' '.$e->getMessage();
            include PATH_VIEW.'500.php';
            die();
        }
        echo "<P>Je me connect à ma base de donnée</P>";
    }

    /**
     */
    function __destruct()
    {}
}

?>
