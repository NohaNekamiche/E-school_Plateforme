<?php 

require_once "../Model/diaporama.php";
class diaporamaCtrl{
    private $diaporama;

    public function __construct(){
        $this->diaporama = new diaporama();
    }

    public function getDiaporama(){
        $result= diaporama::getDiaporama();
         return $result;
    }

    public function getAllSlides(){
        return diaporama::getAllSlides();
    }
    public function ajouterImg(){
        if (($_FILES['img']['name']!="")){
            $directory="../school/slides/";
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
            diaporama::ajouterImg($path_file_ext);
    }
}
    public function deleteById($id){
        diaporama::deleteById($id);
    }


}
?>