<?php
require_once '../Controler/diaporamaCtrl.php';
class diaporamaElements{

    private $controller;

    public function __construct(){
        $this->controller = new diaporamaCtrl();
    }



    public function getForm(){
        echo ' <div class="main-block">
        <form method="post" enctype="multipart/form-data" >
          <h1>Ajouter Image dans Diaporama</h1>
            <label class="file">
            <input type="file" id="file" name="img">

          </label>
          <button type="submit"  name="Ajouter">Ajouter Image</button>
        </form>   
      </div>';
    }

    public function ajouter(){
        if(isset($_POST["Ajouter"])){
              
        $this->controller->ajouterImg();}
    }

    public function delete(){
      if(isset($_GET['delete']))
      {
        $this->controller->deleteById($_GET['delete']);
      }
    }
}
?>