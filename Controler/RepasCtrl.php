<?php
require_once "../Model/repas.php";
class RepasCtrl{
    private $repas;
    public function __construct(){
        $this->repas = new repas();
    }
    
    public function ajouterRepas($nom,$description,$jour){
        if (($_FILES['img']['name']!="")){
            $directory="../school/repas/";
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
                repas::ajouterRepas($nom,$path_file_ext,$description,$jour);
        }
    }
    public function getAllRepas(){
        return repas::getAllRepas();
    }
    public function deleteById($id){
        repas::deleteById($id);
    }
}


?>