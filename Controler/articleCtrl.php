<?php

class articleCtrl{

    require_once('model.php');
    
    public function ajouterArticle($request){
        $cf=new model();
        $cf->connexion();
        $sql= "INSERT INTO articles ( title,descrption,imageUrl,concerner)
                VALUES ('$request->title','$request->descrption','$request->imageUrl','$request->concerner')";
    
        $cf->request($sql);
        $cf->deconnexion();

    }

    public function listeArticles(){

    }

    public function afficherArticle(){

    }

}
?>