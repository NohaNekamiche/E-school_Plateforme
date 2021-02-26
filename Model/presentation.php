<?php

require_once (__DIR__."/model.php");
class presentation{
   

    public STATIC function ajouterPresentation($paragraph,$imgUrl){
        $db =model::connexion();
        $sql= "INSERT INTO presentation (paragraph,imgUrl)
                VALUES ('$paragraph','$imgUrl')";
        model::addRequest($sql);
    }

    public static function ListePresentation(){
        $db =model::connexion();
        $sql= "SELECT * FROM  presentation ";
        $result=model::request($sql);
        return $result;
    }

}
?>