<?php
//namespace models;
require_once PATH_MODEL."Model.php";

/**
 *
 * @author Daniel ROUAIX 2018
 *
 */
class MUser extends Model
{
    public function __construct()
    {

        // TODO - Insert your code here
    }

    /* Vérification de la présence de l'adresse mail pour les nouveaux users */
    public function userExiste($user_email){
        $db = parent::connect();
        $sql = "select * from users where user_email = '".$user_email."'";
        $query = $db->prepare($sql);
        $query->execute();
		$count = 0;
		$count = $query->rowCount();
        //$verif = $query->fetchAll();
        if($count > 0){
            return true;
        }else{
            return false;
        }
    }

    /* Ajout d'un nouveau user */
    public function insertUser($user_nom,$user_prenom,$user_email,$user_motdepasse){
		$db = parent::connect();
		$sql = " INSERT
				INTO users (user_id,user_nom,user_prenom,user_email,user_motdepasse) VALUES (?,?,?,?,?)";
		$query = $db->prepare($sql);
		$mdp = password_hash($user_motdepasse, PASSWORD_DEFAULT);
		$query->execute(array(NULL, $user_nom, $user_prenom, $user_email, $mdp ));
    }

    public function deleteUser($id){
        $db = parent::connect();
        $sql = " DELETE * FROM users WHERE user_id = '".$id."'";
        $query = $db->prepare($sql);
        $query->execute();
    }

    public function updateUser($tableau){ /* Utilise un tableau type champ= valeur */
        $db = parent::connect();
        $sql = "UPDATE user set (";
        foreach($tableau as $key => $value){
            if ($key != "user_id") {
                if($value !=""){
                    if($key =="user_motdepasse"){
                        $value = password_hash($value, PASSWORD_DEFAULT);
                    }
                    $sql .= $key . "='" . $value . "',";
                }
            }
            $sql = rtrim($sql, ",");
        }
        $sql .= ") WHERE user_id = '".$tableau["user_id"]."'";
        $query = $db->prepare($sql);
        $query->execute();
    }

    public function updateChampUser($id,$champ,$valeur){ /* MAJ d'un champ unique */
        $db = parent::connect();
        $sql = " UPDATE user set (".$champ." = '".$valeur."') WHERE user_id ='".$id."'";
        $query = $db->prepare($sql);
        $query->execute();
    }

    public function readUser($id){
        $db = parent::connect();
        $sql = "select * from users where user_id ='".$id."'";
        $query = $db->prepare($sql);
        $query->execute();
        $infoUser[0] = $query->fetchAll();
        return $infoUser;
    }

    public function readUserEmail($email){
        $db = parent::connect();
        $sql = "select * from users where user_email ='".$email."'";
        $query = $db->prepare($sql);
        $query->execute();
        $infoUser = $query->fetchAll();
        return $infoUser[0];
    }

    public function verificationMotDePasseUser($email, $motdepasse){
        $db = parent::connect();
        $sql = "select * from users where user_email ='".$email."'";
        $query = $db->prepare($sql);
        $query->execute();
        $infoUser = $query->fetchAll();

		if ($motdepasse = $infoUser[0]["user_motdepasse"]){
        //if (password_verify ($motdepasse , $infoUser["user_motdepasse"])){
            return true;
        }else{
            return false;
        }
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
