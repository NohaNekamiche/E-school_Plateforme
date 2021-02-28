<?php
require_once "../Model/article.php";
class ArticleCtrl{
    private $article;

public function __construct(){
    $this->article = new article();
}

public function ajouterArticle($titre,$description){
    //recuperer les utilisateur concerne 
    $concerne="";
    if(!empty($_POST['choix'])) {

        foreach($_POST['choix'] as $value){
            $concerne=$concerne.$value;
         //   echo "value : ".$value.'<br/>';
        }
    }
    if (($_FILES['img']['name']!="")){
        $directory="../school/articles/";
       // $link=$directory.$imgUrl;
        $file=$_FILES['img']['name'];
        $path = pathinfo($file);
        $filename=$path['filename'];
        $ext=$path['extension'];
        $path_file_ext=$directory.$filename.".".$ext;
        $temp_name = $_FILES['img']['tmp_name'];
        if (file_exists($path_file_ext)) {
            echo "Sorry, file already exists.";
            }
        else{
            move_uploaded_file($temp_name,$path_file_ext);
            echo "Congratulations! File Uploaded Successfully.";
            }
             article::ajouterArticle($titre,$path_file_ext,$description,$concerne);
}}
    public function getAllArticles(){
        return article::getAllArticles();
    }

}
?>