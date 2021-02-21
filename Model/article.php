<?php 
class article{
    private $titre;
    private $img;
    private $description; 
    private $concerne;


    public function __construct($titre,$img,$description,$concerne){
        $this->titre=$titre;
        $this->img=$img;
        $this->description=$description;
        $this->concerne=$concerne;
    }
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