<?php
require_once '../Controler/repasCtrl.php';
class repasVue{


    private $controller;

    public function __construct(){
        $this->controller = new repasCtrl();
    }


    public function getForm(){
        echo ' <div class="main-block">
        <form method="post" enctype="multipart/form-data">
          <h1>Ajouter Repas</h1>
          <div class="info">
            <input class="fname" type="text" name="nom" placeholder="Nom Repas">
            <label for="jours">Choose le jour:</label>
            <select id="selectype" name="jours" required>
                <option value="Dimanche">Dimanche</option>
                <option value="Lundi">Lundi</option>
                <option value="Mardi">Mardi</option>
                <option value="Mercredi">Mercredi</option>
                <option value="Jeudi">Jeudi</option>
            </select>
            <label class="file">
            <input type="file" id="file" aria-label="File browser example" name="img">
            <span class="file-custom"></span>
          </label>
          </div>
          <p>Description</p>
          <div>
            <textarea rows="4" name="description"></textarea>
          </div>
          <button type="submit"  name="Ajouter">Sauvegarder</button>
        </form>
            
      </div>';
    }

    public function AddUpdateRepas(){
        if(isset($_POST["Ajouter"])){
              $this->controller->ajouterRepas($_POST['nom'],$_POST['description'],$_POST['jours']);
          }
    }
    public function delete(){
        if(isset($_GET['delete']))
        {
          $this->controller->deleteById($_GET['delete']);
        }
      }
}
?>