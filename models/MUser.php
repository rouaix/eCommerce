<?php
//namespace models;
require_once PATH_MODEL."Model.php";

/**
 *
 * @author Daniel ROUAIX
 *
 */
class MUser extends Model
{
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

    /** Efface user */
    public function deleteUser($id){
        $db = parent::connect();
        $ql = ' DELETE * FROM users WHERE user_id = '.$id.'';
        $query = $db->prepare($sql);
        $query->execute();
    }

    public function updateUser($id,$champ,$valeur){
        $db = parent::connect();
        $ql = ' UPDATE user set ('.$champ.' = "'.$valeur.'") WHERE user_id = '.$id.'';
        $query = $db->prepare($sql);
        $query->execute();
    }

    public function readUser($id){
        $db = parent::connect();
        $sql = 'select * from users where user_id = '".$id."' ';
        $query = $db->prepare($sql);
        $query->execute();
        $infoUser = $query->fetchAll();
        return $infoUser;
    }

    public function getAll() {
        $db = parent::connect();
        $sql = 'select * from users';
        $query = $db->prepare($sql);
        $query->execute();
        $listeViewUser = $query->fetchAll();
        return $listeViewUser;
    }
}
