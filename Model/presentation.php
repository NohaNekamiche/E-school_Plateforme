<?php

require_once (__DIR__."/model.php");
class presentation{
   

    public STATIC function ajouterPresentation($paragraph,$imgUrl){
        $db =model::connexion();
        $sql= "INSERT INTO presentation (paragraph,imgUrl)
                VALUES ('$paragraph','$imgUrl')";
        model::addRequest($sql);
    }

    public function ListePresentation(){
        $cf=new model();
        $cf->connexion();
        $sql= "SELECT * FROM  presentation ";
        $cf->request($sql);
        $cf->deconnexion();
    }

}
?>