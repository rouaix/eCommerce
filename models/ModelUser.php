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

    /** Vérification de la présence de l'adresse mail pour les nouveaux users*/
    public function userExiste($user_email){
        $db = parent::connect();
        $ql = 'select * from users where user_email = \'$user_email\' ';
        $query = $db->prepare($sql);
        $query->execute();
        $verif = $query->fetchAll();
        if(count($verif)==0){
            return false;
        }else{
            return true;
        }

    }

    /** Ajout d'un nouveau user */
    public function insertUser($user_nom,$user_prenom,$user_email,$user_motdepasse){
        $db = parent::connect();
        $ql = ' INSERT
                INTO users (user_id,user_nom,user_prenom,user_email,user_motdepasse)
                VALUES (?,?,?,?,?,?)';
        $query = $db->prepare($sql);
        $query->execute(array(
                null,
                '.$user_nom.',
                '.$user_prenom.',
                '.$user_email.',
                '.$user_motdepasse.',
        ));
    }

    public function getAll() {
        $db = parent::connect();
        $sql = 'select * from users';
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
