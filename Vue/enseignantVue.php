<?php
require_once "../Controler/enseignantCtrl.php";
class enseignantVue{
    private $controller;

    public function __construct(){
        $this->controller = new enseignantCtrl();
    }
    public function getForm(){
        echo '<div class="testbox">
        <form method="post">
          <div class="banner">
            <h1>Gestion des Enseignants </h1>
          </div>
          <hr/>
          <fieldset>
            <legend>Creation du compte d\'Enseignant</legend>
            <div class="item">
              <div class="name-item">
                <div>
                    <input type="text" name="nom" placeholder="Nom" required />
                </div>
                <div>
                    <input type="text" name="prenom" placeholder="Prenom" required />
                </div>
                <div >
                        <input id="email" type="text" name="email" placeholder="Email" required/>
                </div>
              </div>
              
            </div>
          </fieldset>
          </br>
          <fieldset>
          <legend>Enseignant Information</legend>
          <div class="item">
              <div class="name-item">
                <div>
                    <input type="text" name="address" placeholder="Adress" required />
                </div>
                <div>
                    <input type="text" name="num1" placeholder="Numero Tel 1" required/>
                </div>
                <div>
                    <input type="text" name="num2" placeholder="Numero Tel 2" required/>
                </div>
                <div>
                    <input type="text" name="num3" placeholder="Numero Tel 3" required/>
                </div>
              </div>
              
            </div>
          <div class="item">
          <label for="bdate">Date de Naissance<span>*</span></label>
          <input id="bdate" type="date" name="date" required/>
          <i class="fas fa-calendar-alt"></i>
          
          <fieldset>
          <div class="btn-block">
          <button type="submit" name="Ajouter">Ajouter Enseignant</button>
          </div>
          </fieldset>
          <hr/>
        </form>
    </div>';
    }
    public function insertEnseignant(){
        if(isset($_POST["Ajouter"])){
             $this->controller->addEnseignant($_POST['email'],$_POST['nom'],$_POST['prenom'],$_POST['date'],
            $_POST['address'],1,$_POST['num1'],$_POST['num2'],$_POST['num3'],$_POST['heure'],$_POST['jour']);
            
    }}

}
?>