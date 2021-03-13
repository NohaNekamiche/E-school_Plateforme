<?php
require_once "../Controler/EleveCtrl.php";
require_once "../Controler/userCtrl.php";
require_once "../Controler/parentCtrl.php";
require_once "../Controler/niveauCtrl.php";
require_once "../Controler/moduleCtrl.php";
require_once "../Controler/noteCtrl.php";
require_once ("../Controler/seanceCtrl.php");
require_once "../Controler/activiteCtrl.php";
require_once "../Controler/pageContactCtrl.php";
class infopageVue{
    private $controller;
    private $user;
    private $eleve;
    private $parent;
    public function __construct(){
        $this->controller = new parentCtrl();
    }
    public function getInfoAccount($id){
        $this->parent=$this->controller->getParentById($id);
        $this->user=userCtrl::getUserById($this->parent['idUser']);
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

    public function getInfoParent(){

       // $nivCtrl=new niveauCtrl();
       // $niv=$nivCtrl->getNiveauById($this->eleve[0]['idNiv']);
    
        echo '  <hr/>
        <fieldset><legend>Votre Information </legend>
        <div class="item">
            <div class="name-item">
              <div>
              <label>Nom</label>
                  <input onclick="enable_disable()" type="text" name="address" value="'.$this->parent['nom'].
                  '" disabled required />
              </div>
              <div>
              <label>Prenom</label>
                  <input onclick="enable_disable()" type="text" name="address" value="'.$this->parent['prenom'].
                  '" disabled required />
              </div>
              <div>
              <label>Date de Naissance</label>
                  <input onclick="enable_disable()" type="text" name="address" value="'.$this->parent['dateNais'].
                  '" disabled required />
              </div>
              <div>
              <label>N° Tel 1</label>
                  <input onclick="enable_disable()" type="text" name="address" value="'.$this->parent['numTel1'].
                  '" disabled required />
              </div>
              <div>
              <label>N° Tel 2</label>
                  <input onclick="enable_disable()" type="text" name="address" value="'.$this->eleve[0]['numTel2'].'" disabled required />
              </div>
              <div>
              <label>N° Tel 3</label>
                  <input onclick="enable_disable()" type="text" name="address" value="'.$this->parent['numTel3'].'" disabled required />
              </div>
        </div>
        <div class="name-item">
       
   
        </div><fieldset>
          <div class="btn-block">
          <button type="submit" name="Ajouter">Modifier Info</button>
          </div>
          </fieldset>
          <hr/></form></div>';
    }
    public function getListEnfants($idParent){
        $eleveCtrl=new EleveCtrl();
        $nivCtrl=new niveauCtrl();
        $enfants=$eleveCtrl->getElevesByIdParent($idParent);
        if(count($enfants)>0){
            echo '  <fieldset><legend>Profils de Votre enfants</legend>
            <table>
            <tr>
            <th>Id</th>
            <th >Nom</th>
            <th>Prenom</th>
            <th>Date de Naissance</th>
            <th>Annee</th>
            <th>Groupe</th>
            <th>Cycle</th>
            <th>N° Tel </th>
            <th>N° Tel </th>
            <th>N° Tel </th>
            </tr>';
            foreach($enfants as $e){
                $niv= $nivCtrl->getNiveauById($e['idNiv']);
                echo '<tr><td>'.$e['id'].'</td>
                <td>'.$e['nom'].'</td>
                <td>'.$e['prenom'].'</td>
                <td>'.$e['dateNais'].'</td>
                <td>'.$niv[0]['annee'].'</td>
                <td>'.$niv[0]['grp'].'</td>
                <td>'.$niv[0]['cycle'].'</td>
                <td>'.$e['NumTel1'].'</td>
                <td>'.$e['NumTel2'].'</td>
                <td>'.$e['NumTel3'].'</td></tr>';
            }
            echo '</table><br/>';
        }
    }
    public function getNotesEnfants($idParent){
        $eleveCtrl=new EleveCtrl();
        $nivCtrl=new niveauCtrl();
        $modCtrl=new moduleCtrl();
        $noteCtrl= new noteCtrl();
        $enfants=$eleveCtrl->getElevesByIdParent($idParent);
        if(count($enfants)>0){
            echo '  <fieldset><legend>Note de Votre enfants</legend>';

            foreach($enfants as $e){
                $note=$noteCtrl->getNotesByIdEleve($e['id']);
                if(count($note)){
            echo'
            <table>
            <tr>
            <th >Nom</th>
            <th >Prenom</th>
            <th>Nom Module </th>
            <th>Note</th>
            <th>Remarque enseignant</th>
            </tr>';
            foreach($note as $n){
                $m=$modCtrl->getModuleByIdMod($n['idModule']);
               
            echo '<tr>
            <td>'.$e['nom'].'</td>
                <td>'.$e['prenom'].'</td>
                <td>'.$m[0]['nomModule'].'</td>
                <td>'.$n['note'].'</td>
                <td>'.$n['remarque'].'</td>';}
                echo '</tr></table><br/>';
            }

        }
        
        
        }
    }
    public function getEnfantsEmplois($idParent){
        $eleveCtrl=new EleveCtrl();
        $nivCtrl=new niveauCtrl();
        $enfants=$eleveCtrl->getElevesByIdParent($idParent);
        $controller = new seanceCtrl();
         $modCtrl=new moduleCtrl();
        foreach($enfants as $e){
        echo '        <fieldset><legend>'.$e['nom'].'  '.$e['prenom'].' </legend>
        <table>
        <caption >Liste D"emploi du temps</caption>
        <tr>
        <th>Dimanche</th>
        <th>Lundi</th>
        <th>Mardi</th>
        <th>Mercredi</th>
        <th>Jeudi</th>
        </tr>';

        $get=$controller->getSeanceByDate('Dimanche',$e['idNiv']);
        foreach($get as $seance){
               // $idMod=$seance['idModule'];
                $m=$modCtrl->getModuleByIdMod($seance['idModule']);
                echo '<tr><td>'.$m[0]['nomModule'].'<br/>'.$seance['heureDebut']."_".$seance['heureFin'].'</td>';
        }
        $get=$controller->getSeanceByDate('Lundi',$e['idNiv']);
        foreach($get as $seance){
            $m=$modCtrl->getModuleByIdMod($seance['idModule']);
                echo '<td>'.$m[0]['nomModule'].'<br/>'.$seance['heureDebut']."_".$seance['heureFin'].'</td>';
        }
        $get=$controller->getSeanceByDate('Mardi',$e['idNiv']);
        foreach($get as $seance){
            $m=$modCtrl->getModuleByIdMod($seance['idModule']);
                echo '<td>'.$m[0]['nomModule'].'<br/>'.$seance['heureDebut']."_".$seance['heureFin'].'</td>';
        }
        $get=$controller->getSeanceByDate('Mercredi',$e['idNiv']);
        foreach($get as $seance){
            $m=$modCtrl->getModuleByIdMod($seance['idModule']);
                echo '<td>'.$m[0]['nomModule'].'<br/>'.$seance['heureDebut']."_".$seance['heureFin'].'</td>';
        }
        $get=$controller->getSeanceByDate('Jeudi',$e['idNiv']);
        foreach($get as $seance){
            $m=$modCtrl->getModuleByIdMod($seance['idModule']);
                echo '<td>'.$m[0]['nomModule'].'<br/>'.$seance['heureDebut']."_".$seance['heureFin'].'</td>';
        }
        echo '</table>        </fieldset><hr/> ';
    }
    }

    public function getActivities($idParent){

        $eleveCtrl=new EleveCtrl();
        $actCtrl=new activiteCtrl() ;
        $enfants=$eleveCtrl->getElevesByIdParent($idParent);
        echo '<legend>Activities ExtraScolaire </legend>';
        foreach($enfants as $e){
        $activities=$actCtrl->getActovitiesByEleve($e['id']);
        echo '<fieldset><h3>'.$e['nom'].'  '.$e['prenom'] .'</h3>';
        echo '
        <table>
        <tr>
        <th >Nom Activitie</th>      
        </tr>';
        
        foreach($activities as $act){
            echo '
            <tr>
            <td>'.$act['activite'].'</td>
            </tr>';
        }
        echo '</table> <hr/></fieldset>';
        }
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
          <a class="dropbtn" href="../EspaceParent/AccueilParent.php">Accueil
           <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item ">
              
          <a class="dropbtn" href="../EspaceParent/infopage.php">Profil</a>
          </li>
         
         
          
          <li class="nav-item">
          <a class="dropbtn" href="../EspaceParent/contactPage.php">Contact</a>
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