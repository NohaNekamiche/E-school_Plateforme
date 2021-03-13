<?php 
session_start();
require_once (__DIR__."/model.php");
class compteADmin{

    private $email;
    private $password;
    private $username;
    private static $auth;
    public function __construct(){
        $auth = false;
    }


    public static function login($username,$password){
        $db =model::connexion();
        $requete = "SELECT * FROM compteadmin WHERE username = '$username' AND password = '$password'";
        $admin= model::request($requete);
        foreach ($admin as $a) {
            if(count($admin)>0){
                self::$auth = true;
            }
        }
        return $admin;

    }
}



?>