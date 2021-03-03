<?php
require_once (__DIR__."/model.php");
class user{

    private $email;
    private $password;
    private $username;
    private static $auth;
    public function __construct(){
        $auth = false;
    }

    public static function login($username,$password){
        $db =model::connexion();
        $requete = "SELECT * FROM users WHERE username = '$username' AND password = '$password'";
        $users= model::request($requete);
        foreach ($users as $user) {
            if(count($users)>0){
                self::$auth = true;
            }
        }
        return $users;
    }

    public static function ajouterUser($email,$password,$username){
        $db=model::connexion();
        $requete= "INSERT INTO users (email,password,username)
        VALUES ('$email','$password','$username')";
        return model::getIdOfInsertElement($requete);
    }

    public function modifierPassword($email,$odlpwd,$newpwd){


    }
    public static function isAuth(){
        return self::$auth;
    }

    public static function deleteUserById($idUser){
        model::connexion();
        $requete="DELETE FROM users WHERE idUser='$idUser'";
        model::delete($requete);
    }
    public static function getUserById($id){
        model::connexion();
        $requete="SELECT * FROM users WHERE idUser='$id'";
        $result=model::getField($requete);
        return $result;
    }
}
?>