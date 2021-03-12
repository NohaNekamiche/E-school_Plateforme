<?php
require_once "../Model/user.php";
session_start();
class userCtrl{
    private $user;
    public function __construct(){
        $this->user = new user();
    }


    public static function getUserById($id){
        return user::getUserById($id);
    }
}



?>