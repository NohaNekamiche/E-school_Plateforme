<?php 

require_once (__DIR__."/model.php");
class article{
   

   /* public function __construct($titre,$img,$description,$concerne){
        $this->titre=$titre;
        $this->img=$img;
        $this->description=$description;
        $this->concerne=$concerne;
    }*/
    public static function ajouterArticle($titre,$img,$description,$concerne){
        $db =model::connexion();
        $requete = "INSERT INTO articles ( titre,descrption,imageUrl,concerner)
                VALUES ('$titre','$description','$img','$concerne')";
        model::addRequest($requete);

    }

    public function listeArticles(){

    }

    public function afficherArticle(){

    }
}
?>