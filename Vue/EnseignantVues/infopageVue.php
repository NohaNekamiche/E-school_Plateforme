<?php
require_once "../Controler/EleveCtrl.php";
require_once "../Controler/userCtrl.php";
require_once "../Controler/enseignantCtrl.php";
require_once "../Controler/niveauCtrl.php";
require_once "../Controler/moduleCtrl.php";
require_once "../Controler/receptionCtrl.php";
require_once "../Controler/pageContactCtrl.php";
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
          <a class="dropbtn" href="../EspaceEnseignant/AccueilEnseignant.php">Accueil
           <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item ">
              
          <a class="dropbtn" href="../EspaceEnseignant/infopage.php">Profil</a>
          </li>
         
         
          
          <li class="nav-item">
          <a class="dropbtn" href="../EspaceEnseignant/contactPage.php">Contact</a>
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
    public function getPageContact(){
        echo '  <div class="main-block">
        <div class="left-part">
          <i class="fas fa-envelope"></i>
          <i class="fas fa-at"></i>
          <i class="fas fa-mail-bulk"></i>
        </div>
        <form action="/">
          <h3>Contacter Nous</h3>
          <div class="info">
            <input class="fname" type="text" name="name" placeholder="Full name">
            <input type="text" name="name" placeholder="Email">
            <input type="text" name="name" placeholder="Object">
          </div>
          <p>Message</p>
          <div>
            <textarea rows="4"></textarea>
          </div>
          <button type="submit" href="/">Envoyer</button>
        </form>
        
      </div>';
    }

}

?>