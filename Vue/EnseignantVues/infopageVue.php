<?php
require_once "../Controler/EleveCtrl.php";
require_once "../Controler/userCtrl.php";
require_once "../Controler/enseignantCtrl.php";
require_once "../Controler/niveauCtrl.php";
require_once "../Controler/moduleCtrl.php";
require_once "../Controler/receptionCtrl.php";
class infopageVue{
    private $controller;
    private $user;
    private $prof;
    public function __construct(){
        $this->controller = new enseignantCtrl();
    }
    public function getInfoAccount($id){
        $this->prof=  $this->controller->getProfById($id);
        $this->user=userCtrl::getUserById($this->prof['idUser']);
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

    public function getInfoEn(){
  
        echo '  <hr/>
        <fieldset><legend>Votre Information </legend>
        <div class="item">
            <div class="name-item">
              <div>
              <label>Nom</label>
                  <input onclick="enable_disable()" type="text" name="address" value="'.$this->prof['nom'].
                  '" disabled required />
              </div>
              <div>
              <label>Prenom</label>
                  <input onclick="enable_disable()" type="text" name="address" value="'.$this->prof['prenom'].
                  '" disabled required />
              </div>
              <div>
              <label>Date de Naissance</label>
                  <input onclick="enable_disable()" type="text" name="address" value="'.$this->prof['dateNais'].
                  '" disabled required />
              </div>
              <div>
              <label>N° Tel 1</label>
                  <input onclick="enable_disable()" type="text" name="address" value="'.$this->prof['numTel1'].
                  '" disabled required />
              </div>
              <div>
              <label>N° Tel 2</label>
                  <input onclick="enable_disable()" type="text" name="address" value="'.$this->prof['numTel2'].'" disabled required />
              </div>
              <div>
              <label>N° Tel 3</label>
                  <input onclick="enable_disable()" type="text" name="address" value="'.$this->prof['numTel3'].'" disabled required />
              </div>
        </div>
 <fieldset>
          <div class="btn-block">
          <button type="submit" name="Ajouter">Modifier Info</button>
          </div>
          </fieldset>
          <hr/></form></div>';
    }

    public function getListeModules($id){
        $this->prof=  $this->controller->getProfById($id);
        $idMod=$this->prof['idModule'];
        $moduleCtrl=new moduleCtrl() ;
        $modules=$moduleCtrl->getModuleByIdMod($idMod);

        echo '  <table>
        <tr>
        <th>Nom Module</th>
        </tr>';
        foreach($modules as $module){
            echo '<tr><td>'.$module['nomModule'].'</td></tr>';
        }
        echo '</table>  ';

    }

    public function getReception($id){
        $receptionCtrl=new receptionCtrl();
        echo '    <h3 class="text-center">Heure de Reception</h3><div class="testbox">
        <table >
     
        <tr>
        <th>Dimanche</th>
        <th>Lundi</th>
        <th>Mardi</th>
        <th>Mercredi</th>
        <th>Jeudi</th>
        </tr><tr>';
        $result=$receptionCtrl->getReceptionByidprofJour($id,'Dimanche');
        echo '<td>'.$result['heureReception'].'</td>';
        $result=$receptionCtrl->getReceptionByidprofJour($id,'Lundi');
        echo '<td>'.$result['heureReception'].'</td>';
        $result=$receptionCtrl->getReceptionByidprofJour($id,'Mardi');
        echo '<td>'.$result['heureReception'].'</td>';
        $result=$receptionCtrl->getReceptionByidprofJour($id,'Mercredi');
        echo '<td>'.$result['heureReception'].'</td>';
        $result=$receptionCtrl->getReceptionByidprofJour($id,'Jeudi');
        echo '<td>'.$result['heureReception'].'</td></table> </div> ';

    }
  
}

?>