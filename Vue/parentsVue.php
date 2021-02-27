<?php
require_once "../Controler/parentCtrl.php";
require_once "../Controler/EleveCtrl.php";
class parentsVue{
    private $controller1;
    private $controller2;

    public function __construct(){
        $this->controller1 = new parentCtrl();
        $this->controller2=new  EleveCtrl();
    }

    public function getFormParent(){
        echo '<div class="testbox">
        <form method="post">
          <div class="banner">
            <h1>Gestion des Parents d\'éleve Tuteur</h1>
          </div>
          <hr/>
          <fieldset>
            <legend>Creation du compte Parent</legend>
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
          <legend>Parent Information</legend>
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
          </div>
          <fieldset>
          <div class="btn-block">
          <button type="submit" name="Ajouter">Ajouter Parent</button>
          </div>
          </fieldset>
          <hr/>
        </form>
    </div>';
    }

    public function insertParent(){
        if(isset($_POST["Ajouter"])){
            
            $id=  $this->controller1->ajouterParent($_POST['email'],$_POST['nom'],$_POST['prenom'],$_POST['date'],
            $_POST['address'],$_POST['num1'],$_POST['num2'],$_POST['num3']);
            return $id;
    }}
    public function insertEnfant(){
      $idNiv=1;
      $id=$_SESSION['idParent'];
      $this->controller2->addEvele($_POST['emailE'],$_POST['nomE'],$_POST['prenomE'],$_POST['dateE'],$id,$idNiv,
      $_POST['num1E'],$_POST['num2E'],$_POST['num3E']);
    }

    public function getFormEnfant(){
      echo '
      <div class="testbox">
            <form method="post">
            <fieldset>
            <legend>Creer compte de chaque Enfant</legend>
            <div class="item">
                <div class="name-item">
                  <div>
                      <input type="text" name="nomE" placeholder="Nom" required />
                  </div>
                  <div>
                      <input type="text" name="prenomE" placeholder="Prenom" required />
                  </div>
                  <div >
                          <input id="email" type="text" name="emailE" placeholder="Email" required/>
                  </div>
                </div>
                
              </div>
            </fieldset>
            <hr/>
            <fieldset>
            <legend>Information de chaque Enfant</legend>
            <div class="item">
                <div class="name-item">
                  <div>
                      <input type="text" name="num1E" placeholder="Numero Tel 1" required/>
                  </div>
                  <div>
                      <input type="text" name="num2E" placeholder="Numero Tel 2" required/>
                  </div>
                  <div>
                      <input type="text" name="num3E" placeholder="Numero Tel 3" required/>
                  </div>
                </div>
                
              </div>
            <div class="item">
            <label for="bdate">Date de Naissance<span>*</span></label>
            <input id="bdate" type="date" name="dateE" required/>
            <i class="fas fa-calendar-alt"></i>
            </div>
            </fieldset>
            <hr/>
            <fieldset>
            <div class="btn-block">
            <button type="submit" name="AjouterEnfant">Ajouter Enfant</button>
            </div>
            </fieldset>
          </form>
          </div>';
    }
}

?>