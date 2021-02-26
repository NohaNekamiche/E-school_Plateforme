<?php
require_once "../Model/presentation.php";
class PresentationCtrl{
    private $presentation;

    public function __construct(){
        $this->presentation = new presentation();
    }

    public function ajouterPresentation($paragraph){
        if (($_FILES['img']['name']!="")){
        $directory="../school/paragraphes/";
       // $link=$directory.$imgUrl;
        $file=$_FILES['img']['name'];
        $path = pathinfo($file);
        $filename=$path['filename'];
        $ext=$path['extension'];
        $path_file_ext=$directory.$filename.".".$ext;
        $temp_name = $_FILES['img']['tmp_name'];
        if (file_exists($path_file_ext)) {
            echo "Sorry, file already exists.";
            }else{
            move_uploaded_file($temp_name,$path_file_ext);
            echo "Congratulations! File Uploaded Successfully.";
            }
   //     move_uploaded_file($imgUrl,$directory);
        presentation::ajouterPresentation($paragraph,$path_file_ext);
        }
    }
        
    public function listePresentation(){
        return presentation::ListePresentation();
    }
}
?>