<?php

require_once __DIR__."/../Controler/LoginCtrl.php";
class LoginVue{
    private $title='Login';
        private $controller;

        public function __construct(){
            $this->controller = new LoginCtrl();
        }


        function getTitle(){
            echo '<h1>'.$this->title.'</h1>';
        }
        function getForm(){
            echo ' <div class="main-block">
            <h1>Login</h1>
            <form method="post" >
                <hr>
                <label id="icon" for="name"><i class="fas fa-user"></i></label>
                <input type="text" name="username" id="name" placeholder="Username" required/>
                <label id="icon" for="name"><i class="fas fa-unlock-alt"></i></label>
                <input type="password" name="password" id="name" placeholder="Password" required/>
                <hr>
                <div class="btn-block">
                    <button type="submit" name="Login">Login</button>
                    
                  </div>
            </form>
        </div>   ';
        }

        function login($username,$password){
            if(isset($username) && isset($password)){
                echo $username;
                echo  $this->controller->login($username,$password);
                $auth= $this->controller->login($username,$password);
                if($auth)   header("location: ".$_SESSION["ROOT_URL"]."/projet_web/AccueilAdmin/pageAccieulAdmin.php");
                else header("location: ./");
            }
        }
        function loginEleve($username,$password){
            $auth= $this->controller->login($username,$password); 
            if($auth)   header("location: ".$_SESSION["ROOT_URL"]."/projet_web/EspaceEleve/AccueilEleve.php");
                else header("location: ./");
        }
        function loginParent($username,$password){
            $auth= $this->controller->login($username,$password); 
            if($auth)   header("location: ".$_SESSION["ROOT_URL"]."/projet_web/EspaceParent/AccueilParent.php");
                else header("location: ./");
        }
}
?>