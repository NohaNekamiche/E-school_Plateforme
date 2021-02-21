<?php
class user{

    private $email;
    private $password;
    private $username;
    public function __construct($email,$password,$username){
        $this->email=$email;
        $this->password=$password;
        $this->username=$username;
    }

    public function ajouterUser($){
        $cf=new model();
        $cf->connexion();
        $sql= "INSERT INTO presentation ( paragraph,imgUrl)
                VALUES ('$request->paragraph','$request->imgUrl')";
    
        $cf->request($sql);
        $cf->deconnexion();
    }

    public function modifierPassword($email,$odlpwd,$newpwd){


    }

}
?>