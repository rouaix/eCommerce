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
