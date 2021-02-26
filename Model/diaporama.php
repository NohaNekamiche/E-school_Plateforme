<?php 
require_once (__DIR__."/model.php");
class diaporama{


    public static function getDiaporama(){
        $db =model::connexion();
        $requete = "SELECT * FROM diaporama ORDER BY id ASC "; 
        $result=model::request($requete);
        return $result;
    }

    public static function ajouterImg($img){
        $db=model::connexion();
        $requeste="INSERT INTO diaporama (imgUrl)
        VALUES ('$img')";
        model::addRequest($requeste);
    }

}


?>