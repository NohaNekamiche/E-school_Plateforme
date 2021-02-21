<?php

class model{
    private $db='e-school';
    private $host='127.0.0.1';
    private $user='root';
    private $password='';
    private $conn=null;
    private function connexion(){
        $dns="mysql:host=$host;dbname=$db";
        try{
            $conn=new PDO($dns, $user, $password);
        }
        catch(PDOException $e) {
            echo "Error: " . $e->getMessage();
            exit();
          }
    }

    private function deconnexion(&$conn){
        $conn=null;
    }

    private function request($req){
        $conn->query($req);

    }
}
?>