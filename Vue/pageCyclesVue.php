<?php

require_once "../Controler/ArtcileCtrl.php";
require_once "../Controler/activiteCtrl.php";
class pageCyclesVue{
    private $controller;
    public function __construct(){
      $this->controller = new ArticleCtrl();
    }


    public function getPrimaireVue(){
        echo'
        <div class="grey-bg container-fluid">
        <div class="text-center">
            <h2>Cycle Primaire</h2>
            <p>Le Cycle Primaire c’est le premier degré de l’enseignement. Il permet notamment l’apprentissage de la lecture, <br/>
            de l’écriture et des bases de mathématiques.
             Les enfants entament leurs études primaires vers l’âge de 6 ans et les achèvent vers l’âge de 11 ans.</p>
        </div>
        
        <div class="row">
          <div class="col-xl-3 col-sm-6 col-12"> 
            <div class="card">
              <div class="card-content">
                <div class="card-body">
                  <div class="media d-flex">
                    <div class="media-body text-center ">
                      <h3>Emplois Du Temps Globale </h3>
                      <img src="../school/pagesImages/calender.jpeg" width="250px" height="250px">
                      <div class="align-self-center">
                      <hr/>
                      <a class="btn btn-outline-dark" href="../EmploisTempsCycles/EmploiTempsPrimaire.php" role="button">Voir</a>
                     </div>
                      
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-xl-3 col-sm-6 col-12">
            <div class="card">
              <div class="card-content">
                <div class="card-body">
                  <div class="media d-flex">
                    <div class="align-self-center">
                     
                    </div>
                    <div class="media-body text-center">
                      <h3>Heure de Reception des Enseignants</h3>
                      <img src="../school/pagesImages/reception.jpeg" width="250px" height="250px">
                      <div class="align-self-center">
                      <hr/>
                      <a class="btn btn-outline-dark" href="../EmploisTempsCycles/EmploiTempsPrimaire.php" role="button">Voir</a>
                     </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-xl-3 col-sm-6 col-12">
            <div class="card">
              <div class="card-content">
                <div class="card-body">
                  <div class="media d-flex">
                    <div class="align-self-center">
                     
                    </div>
                    <div class="media-body text-center">
                      <h3>Informations Pratiques</h3>
                      <img src="../school/pagesImages/activities.jpeg" width="250px" height="250px">
                      <div class="align-self-center">
                      <hr/>
                      <a class="btn btn-outline-dark" href="../EmploisTempsCycles/EmploiTempsPrimaire.php" role="button">Voir</a>
                     </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-xl-3 col-sm-6 col-12">
            <div class="card">
              <div class="card-content">
                <div class="card-body">
                  <div class="media d-flex">
                    <div class="align-self-center">
                      
                    </div>
                    <div class="media-body text-center">
                      <h3>Restauration</h3>
                      <img src="../school/pagesImages/resto1.jpeg" width="250px" height="250px">
                      <div class="align-self-center">
                      <hr/>
                      <a class="btn btn-outline-dark" href="../AccuielEcole/InfoRestauration.php" role="button">Voir</a>
                     </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      <hr/>
        
    
      
     
    </div>';
    }
    public function getMoyenVue(){

        echo '
        <div class="grey-bg container-fluid">
        <div class="text-center">
            <h2>Cycle Moyenne</h2>
            <p>Le Cycle Moyennne c’est le deuxième degré de l’enseignement. Il permet notamment de continue l’apprentissage de la lecture, <br/>
            de l’écriture et des notions un peu avancées dans arabe,physique,Islamiya et  mathématiques ..ect.
             Les eleves  entament leurs études moyennes vers l’âge de 11 ans et les achèvent vers l’âge de 15 ans.</p>
        </div>
        
        <div class="row">
          <div class="col-xl-3 col-sm-6 col-12"> 
            <div class="card">
              <div class="card-content">
                <div class="card-body">
                  <div class="media d-flex">
                    <div class="media-body text-center ">
                      <h3>Emplois Du Temps Globale </h3>
                      <img src="../school/pagesImages/calender.jpeg" width="250px" height="250px">
                      <div class="align-self-center">
                      <hr/>
                      <a class="btn btn-outline-dark" href="../EmploisTempsCycles/EmploiTempsMoyen.php" role="button">Voir</a>
                     </div>
                      
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-xl-3 col-sm-6 col-12">
            <div class="card">
              <div class="card-content">
                <div class="card-body">
                  <div class="media d-flex">
                    <div class="align-self-center">
                     
                    </div>
                    <div class="media-body text-center">
                      <h3>Heure de Reception des Enseignants</h3>
                      <img src="../school/pagesImages/reception2.jpeg" width="250px" height="250px">
                      <div class="align-self-center">
                      <hr/>
                      <a class="btn btn-outline-dark" href="../ReceptionProfCycles/ListeEnsReceptionMoyen.php" role="button">Voir</a>
                     </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-xl-3 col-sm-6 col-12">
            <div class="card">
              <div class="card-content">
                <div class="card-body">
                  <div class="media d-flex">
                    <div class="align-self-center">
                     
                    </div>
                    <div class="media-body text-center">
                      <h3>Informations Pratiques</h3>
                      <img src="../school/pagesImages/activities.jpeg" width="250px" height="250px">
                      <div class="align-self-center">
                      <hr/>
                      <a class="btn btn-outline-dark" href="../EmploisTempsCycles/EmploiTempsPrimaire.php" role="button">Voir</a>
                     </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-xl-3 col-sm-6 col-12">
            <div class="card">
              <div class="card-content">
                <div class="card-body">
                  <div class="media d-flex">
                    <div class="align-self-center">
                      
                    </div>
                    <div class="media-body text-center">
                      <h3>Restauration</h3>
                      <img src="../school/pagesImages/resto1.jpeg" width="250px" height="250px">
                      <div class="align-self-center">
                      <hr/>
                      <a class="btn btn-outline-dark" href="../AccuielEcole/InfoRestauration.php" role="button">Voir</a>
                     </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      <hr/>
        
    
      
     
    </div>';
    }
    public function getSecondaireVue(){
        echo '
        <div class="grey-bg container-fluid">
        <div class="text-center">
            <h2>Cycle Secondaire</h2>
            <p>Le Cycle Secondaire couvre les degrés scolaires qui se situent entre la fin de l"enseignanement des 3 Cycles et 
            le début de l"enseignement supérieur. 
           </p>
        </div>
        
        <div class="row">
          <div class="col-xl-3 col-sm-6 col-12"> 
            <div class="card">
              <div class="card-content">
                <div class="card-body">
                  <div class="media d-flex">
                    <div class="media-body text-center ">
                      <h3>Emplois Du Temps Globale </h3>
                      <img src="../school/pagesImages/calender.jpeg" width="250px" height="250px">
                      <div class="align-self-center">
                      <hr/>
                      <a class="btn btn-outline-dark" href="../EmploisTempsCycles/EmploiTempsSecondaire.php" role="button">Voir</a>
                     </div>
                      
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-xl-3 col-sm-6 col-12">
            <div class="card">
              <div class="card-content">
                <div class="card-body">
                  <div class="media d-flex">
                    <div class="align-self-center">
                     
                    </div>
                    <div class="media-body text-center">
                      <h3>Heure de Reception des Enseignants</h3>
                      <img src="../school/pagesImages/reception.jpeg" width="250px" height="250px">
                      <div class="align-self-center">
                      <hr/>
                      <a class="btn btn-outline-dark" href="../ReceptionProfCycles/ListeEnsReceptionSecondaire.php" role="button">Voir</a>
                     </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-xl-3 col-sm-6 col-12">
            <div class="card">
              <div class="card-content">
                <div class="card-body">
                  <div class="media d-flex">
                    <div class="align-self-center">
                     
                    </div>
                    <div class="media-body text-center">
                      <h3>Informations Pratiques</h3>
                      <img src="../school/pagesImages/activietsS.jpeg" width="250px" height="250px">
                      <div class="align-self-center">
                      <hr/>
                      <a class="btn btn-outline-dark" href="../EmploisTempsCycles/EmploiTempsPrimaire.php" role="button">Voir</a>
                     </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-xl-3 col-sm-6 col-12">
            <div class="card">
              <div class="card-content">
                <div class="card-body">
                  <div class="media d-flex">
                    <div class="align-self-center">
                      
                    </div>
                    <div class="media-body text-center">
                      <h3>Restauration</h3>
                      <img src="../school/pagesImages/resto1.jpeg" width="250px" height="250px">
                      <div class="align-self-center">
                      <hr/>
                      <a class="btn btn-outline-dark" href="../AccuielEcole/InfoRestauration.php" role="button">Voir</a>
                     </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      <hr/>
        
    
      
     
    </div>';
    }
    public function getTitleSectionArticle(){
      echo ' <div class="text-center">
      <h2>Articles</h2>
      <p>Cette partie contient les articles qui vous concerne. 
     </p>
  </div>';
    }
    public function getDebutActivities(){
      echo ' <div class="grey-bg container-fluid"> <div class="text-center">
      <h2>Activities</h2>
      <p>Cette partie contient les articles qui vous concerne. 
     </p>
  </div>';
  }
    public function getArticleByCycle($cycle){
      echo '   <div class="row">';
    $articles=$this->controller->getAllArticles();
    foreach($articles as $article){

    if( stristr($article['concerner'],$cycle)==true){
      echo'
      <div class="col-xl-3 col-sm-6 col-12"> 
        <div class="card">
          <div class="card-content">
            <div class="card-body">
              <div class="media d-flex">
                <div class="media-body text-center">
                  <h3>'.$article['titre'].'</h3>';
                  echo " <img src=" .$article['imageUrl'] . " width='200px' height='250px' >";
                  echo '
                  <p>'. substr($article['descrption'],300).'</p><div class="btn-block">
                  <div class="align-self-center">
                  <hr/>
                  <a class="btn btn-outline-primary" role="button">Voir</a>
                 </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div></div> <br/> <br/>';
    }
    }
    }
    public function getActivities($id){
      $actCtrl=new activiteCtrl();
      $activityes=$actCtrl->getActovitiesByEleve($id);
      echo '   <div class="row">';
      foreach($activityes as $act){
  
          echo'
          <div class="col-xl-3 col-sm-6 col-12"> 
            <div class="card">
              <div class="card-content">
                <div class="card-body">
                  <div class="media d-flex">
                    <div class="media-body text-center">
                 
                      <h4>'.$act['activite'].'</h4>
                    </div>
                  </div>
                </div>
              </div>
            </div></div>';
        }

        echo '<hr/><div/>';
    }

}
?>