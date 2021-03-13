<?php 
session_start();
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
        $requete = "INSERT INTO articles (titre,descrption,imageUrl,concerner)
                VALUES ('$titre','$description','$img','$concerne')";
        model::addRequest($requete);

        echo "article added";

    }

    public static function getAllArticles(){
        model::connexion();
        $requeste="SELECT * FROM articles";
        return model::request($requeste);
    }

    public function afficherArticle(){

    }
    public static function deleteById($id){
        model::connexion();
        $requeste="DELETE FROM articles WHERE idArticle='$id'";
        model::delete($requeste);

    }
    public static function getArticleById($id){
        model::connexion();
        $requeste="SELECT * FROM articles WHERE idArticle='$id'";
        return model::request($requeste);
    }

    public static function getIdLastArticle(){
        model::connexion();
        $requeste="SELECT MAX(idArticle) AS max_id  FROM articles";
        return  model::getField($requeste);
    }
}
?>