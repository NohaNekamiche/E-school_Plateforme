<?php
require_once __DIR__."/../model/user.php";
require_once __DIR__."/../model/compteADmin.php";

class LoginCtrl{
private $user;

public function __construct(){
    $this->user = new user();
}

public function login($username,$password){
    $users= user::login($username,$password);
    $auth = false;

    foreach ($users as $user) {
        //if ($username == $user["username"] && $password == $user["password"]){
            if(count($users)>0){
            $auth = true;
        }
    }

    if($auth){
        $_SESSION['username']   = $username;
        $_SESSION['password']   = $password;
        $_SESSION['userId']   = $users[0]["idUser"];
        $_SESSION['auth'] = true;
    }else {
        $_SESSION['auth'] = false;
    }
    
    
    return $auth;
}
public function loginAdmin($username,$password){
    $admin= compteAdmin::login($username,$password);
    $auth=false;
    foreach($admin as $a){
        if(count($admin)>0){
            $auth=true;
        }
        if($auth){
            $_SESSION['username']   = $username;
            $_SESSION['password']   = $password;
            $_SESSION['idAdmin']   = $admin[0]["id"];
            $_SESSION['auth'] = true;
        }else {
            $_SESSION['auth'] = false;
        }
    
        return $auth;
    
}}
}
?>