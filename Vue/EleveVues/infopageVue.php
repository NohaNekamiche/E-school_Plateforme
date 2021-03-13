<?php
require_once "../Controler/EleveCtrl.php";
require_once "../Controler/userCtrl.php";
require_once "../Controler/parentCtrl.php";
require_once "../Controler/niveauCtrl.php";
require_once "../Controler/pageContactCtrl.php";
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
    public function getMenu(){
        echo '
        <nav class="navbar navbar-expand-md navbar-light bg-light">
            
            <a href="#" >
                <img src="../school/logo/logoBleu.png"  width="70%" height="100px" alt="ESchool">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <ul class="navbar-nav">
          <li class="nav-item active">
          <a class="dropbtn" href="../EspaceEleve/AccueilEleve.php">Accueil
           <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item ">
              
          <a class="dropbtn" href="../EspaceEleve/infopage.php">Profil</a>
          </li>
         
         
          
          <li class="nav-item">
          <a class="dropbtn" href="">Contact</a>
          </div>
         
         
        </ul>
        <ul class="navbar-right">
        <div id="topbar">
                      <div class="container ">
                        <div class="social-links">
                          <a href="#" class="twitter"><i class="fa fa-twitter"></i></a>
                          <a href="#" class="facebook"><i class="fa fa-facebook"></i></a>
                          <a href="#" class="linkedin"><i class="fa fa-linkedin"></i></a>
                          <a href="#" class="instagram"><i class="fa fa-instagram"></i></a>
                        </div>
                      </div>
                  </div>
    </ul>
      </div>
        </nav>';
    }

    public function getContact(){
        $pageCtrl=new pageContactCtrl();
        $info=$pageCtrl->getInfoPage();
        if(count($info)>0){
            echo '
            <br/>
            <footer class="footer">
            <div class="container bottom_border">
            <div class="row">
            <div class=" col-sm-4 col-md col-sm-4  col-12 col">
            <h5 class="headin5_amrc col_white_amrc pt2">Trouver Nous</h5>
            <p><i class="fa fa-location-arrow"></i>   '.$info['address'].'</p>
            <p><i class="fa fa-phone"></i>    '.$info['numTel1'].' / '.$info['numTel2'].'  </p>
            <p><i class="fa fa-phone"></i>    '.$info['fax'].'  </p>
            <p><i class="fa fa fa-envelope"></i>   '.$info['email'].'  </p>
            
            
            </div>
            
            
            <div class=" col-sm-4 col-md  col-6 col">
            <h5 class="headin5_amrc col_white_amrc pt2">E-school</h5>
            <!--headin5_amrc-->
                                    <p>'.$info['descpt'].'</p>
             
            <!--footer_ul_amrc ends here-->
            </div>
            </div>
            </div>
            <div class="container">    
            <!--foote_bottom_ul_amrc ends here-->
            <p class="text-center">Copyright @2021 | Creer Par <a href="'.$info['website'].'">E-school</a></p>
            <ul class="social_footer_ul">
            <li><a href="'.$info['facebook'].'"><i class="fa fa-facebook-f"></i></a></li>
            <li><a href="'.$info['insta'].'"><i class="fa fa-instagram"></i></a></li>
            <li><a href="'.$info['linkedin'].'"><i class="fa fa-linkedin"></i></a></li>
            </ul>
            <!--social_footer_ul ends here-->
            </div>
            
            </footer>';
        }
    }

  
}

?>