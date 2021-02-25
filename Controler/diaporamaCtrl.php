<?php 

require_once "../Model/diaporama.php";
class diaporamaCtrl{
    private $diaporama;
    public function __construct(){
        $this->diaporama = new diaporama();
    }

    public function getDiaporama(){
        $result= diaporama::getDiaporama();
        while($row=$result){
            extract($row);
            
        }

    }
}
?>