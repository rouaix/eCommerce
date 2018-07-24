<?php
//namespace models;
require_once PATH_MODEL."Model.php";

/**
 *
 * @author Daniel ROUAIX
 *
 */
class ModelUser extends Model
{
    // TODO - Insert your code here

    /**
     */
    public function __construct()
    {

        // TODO - Insert your code here
    }

    public function getAll() {
        $db = parent::connect();
        $sql = 'select * from user';
        $query = $db->prepare($sql);
        $query->execute();

        $listeViewUser = $query->fetchAll();
        return $listeViewUser;
    }

    /**
     */
    function __destruct()
    {

        // TODO - Insert your code here
    }
}

