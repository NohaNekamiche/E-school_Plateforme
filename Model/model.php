<?php

class model{
    private $db='e-school';
    private $host='127.0.0.1';
    private $user='root';
    private $password='';
    private $conn=null;
    private function connexion(){
        $dns="mysql:host=$this->host;dbname=$this->db";
        try{
            $this->conn=new PDO($dns, $this->user, $this->password);
        }
        catch(PDOException $e) {
            echo "Error: " . $e->getMessage();
            exit();
          }
    }

    private function deconnexion(&$conn){
        $this->conn=null;
    }

    private function request($req){
        $this->conn->query($req);

    }
}
?>