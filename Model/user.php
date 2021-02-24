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

    public function login($username,$password){
        $db =model::connect();

        $requete = "SELECT * FROM users WHERE username = '$username' AND password = '$password'";
        $users= model::request($requete);
        foreach ($users as $user) {
            if(count($users)>0){
                self::$auth = true;
            }
        }
        return $users;
    }

    public function ajouterUser($request){
        $cf=new model();
        $cf->connexion();
        $sql= "INSERT INTO presentation ( paragraph,imgUrl)
                VALUES ('$request->paragraph','$request->imgUrl')";
    
        $cf->request($sql);
        $cf->deconnexion();
    }

    public function modifierPassword($email,$odlpwd,$newpwd){


    }
    public static function isAuth(){
        return self::$auth;
    }
}
?>