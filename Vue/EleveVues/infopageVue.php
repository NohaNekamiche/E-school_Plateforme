<?php
require_once "../Controler/EleveCtrl.php";
require_once "../Controler/userCtrl.php";
require_once "../Controler/parentCtrl.php";
require_once "../Controler/niveauCtrl.php";
class infopageVue{
    private $controller;
    private $user;
    private $eleve;
    public function __construct(){
        $this->controller = new EleveCtrl();
    }
    public function getInfoAccount($id){
        $this->eleve=  $this->controller->getEleveById($id);
        $this->user=userCtrl::getUserById($this->eleve[0]['idUser']);
        $val='vjh';
        echo ' <div class="testbox">
        <form method="post" id="idForm">
        <fieldset><legend>Information de Votre Compte </legend>
       
        <div class="item">
            <div class="name-item">
              <div>
              <label>Email</label>
                  <input onclick="enable_disable()" type="text" name="address" value="'.$this->user['email'].'" disabled required />
              </div>
              <div>
              <label>Mot de Passe </label>
                  <input onclick="enable_disable()" type="text" name="num1" value="'.$this->user['password'].'"  disabled required/>
              </div>
              <div>
              <label>Nom utilisateur </label>
                  <input onclick="enable_disable()" type="text" name="num1" value="'.$this->user['username'].'"  disabled required/>
              </div>
              </div>
              
              </div>
        </fieldset>
      ';
    }

    public function getInfoEleve(){
        $parentCtrl=new parentCtrl();
        $parent=$parentCtrl->getParentById($this->eleve[0]['idParent']);
        $nivCtrl=new niveauCtrl();
        $niv=$nivCtrl->getNiveauById($this->eleve[0]['idNiv']);
        echo '  <hr/>
        <fieldset><legend>Votre Information </legend>
        <div class="item">
            <div class="name-item">
              <div>
              <label>Nom</label>
                  <input onclick="enable_disable()" type="text" name="address" value="'.$this->eleve[0]['nom'].
                  '" disabled required />
              </div>
              <div>
              <label>Prenom</label>
                  <input onclick="enable_disable()" type="text" name="address" value="'.$this->eleve[0]['prenom'].
                  '" disabled required />
              </div>
              <div>
              <label>Date de Naissance</label>
                  <input onclick="enable_disable()" type="text" name="address" value="'.$this->eleve[0]['dateNais'].
                  '" disabled required />
              </div>
              <div>
              <label>N° Tel 1</label>
                  <input onclick="enable_disable()" type="text" name="address" value="'.$this->eleve[0]['NumTel1'].
                  '" disabled required />
              </div>
              <div>
              <label>N° Tel 2</label>
                  <input onclick="enable_disable()" type="text" name="address" value="'.$this->eleve[0]['NumTel2'].'" disabled required />
              </div>
              <div>
              <label>N° Tel 3</label>
                  <input onclick="enable_disable()" type="text" name="address" value="'.$this->eleve[0]['NumTel3'].'" disabled required />
              </div>
        </div>
        <div class="name-item">
        <div>
        <label>Votre Parent Tuteur</label>
            <input onclick="enable_disable()" type="text" name="address" value="'.$parent['nom'].'  '.$parent['prenom'].'" disabled required />
        </div>
        <div>
        <label>Votre Cycle</label>
        <input onclick="enable_disable()" type="text" name="address" value="'.$niv[0]['cycle'].'" disabled required />
        </div>
        <div>
        <label>Votre Annee courants</label>
        <input onclick="enable_disable()" type="text" name="address" value=" '.$niv[0]['annee'].'" disabled required />
    </div>
    <div>
    <label>Votre Groupe</label>
    <input onclick="enable_disable()" type="text" name="address" value="'.$niv[0]['grp'].'" disabled required />
    </div>
        </div><fieldset>
          <div class="btn-block">
          <button type="submit" name="Ajouter">Modifier Info</button>
          </div>
          </fieldset>
          <hr/></form></div>';
    }

  
}

?>