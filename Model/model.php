<?php

class model{
  
    private static $conn;
    private static $isConnected = false;
    public static function connexion(){
        require_once __DIR__.'/dbConfig.php' ;
        if(!model::$isConnected){
        try{
            //self::$conn = new PDO($dns, $user, $password);
            self::$conn = new PDO('mysql:host=localhost;dbname=e-school','root','');

            self::$isConnected = true;
        }
        catch(PDOException $e) {
            echo "Error: " . $e->getMessage();
            exit();
          }
        }
    }

    public function deconnexion(&$conn){
        $this->conn=null;
    }

    public static function request($req){
        $stmt=self::$conn->prepare($req);
        $stmt->execute(array());
        return self::fetchAll($stmt);
    }
    public static function addRequest($req){
        self::$conn->exec($req);
    }
    public static function fetchAll($resultatRequete){
        if($resultatRequete){
            return $resultatRequete->fetchAll();
        }else{
            return false;
        }
    }

    public static function getIdOfInsertElement($req){
        self::$conn->exec($req);
        return self::$conn->lastInsertId();
    }
    public static function getLastId(){
        return self::$conn->lastInsertId();
    }

    public static function delete($request){
        self::$conn->exec($request);
    }

    public static function getField($requeste){
        self::$conn->prepare($requeste);
        $field=self::$conn->exec($requeste);
        return $field;
    }
}
?>