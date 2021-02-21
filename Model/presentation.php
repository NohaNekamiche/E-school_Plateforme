<?php
class presentation{
    private $paragraph;
    private $imgUrl;
    public function __construct(){

    }

    public function ajouterPresentation($request){
        $cf=new model();
        $cf->connexion();
        $sql= "INSERT INTO presentation ( paragraph,imgUrl)
                VALUES ('$request->paragraph','$request->imgUrl')";
    
        $cf->request($sql);
        $cf->deconnexion();
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