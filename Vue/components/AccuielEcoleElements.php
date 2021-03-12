<?php 

require_once "../Controler/diaporamaCtrl.php";
require_once "../Controler/ArtcileCtrl.php";
require_once "../Controler/RepasCtrl.php";
require_once "../Controler/PresentationCtrl.php";
class AccuielEcoleElements{
    private $controller;

    public function __construct(){
        $this->controller = new diaporamaCtrl();
    }

    public function getDiaporama($result){
        echo ' <div class="container">
        <div id="myCarousel" class="carousel slide" data-ride="carousel">
                <!-- Indicators -->
                <ol class="carousel-indicators">
                    <?php 
                    $i=0;
                    foreach($result as $row){
                        $actives="";
                        if($i == 0){
                            $actives="active";

                        }
                    ?>
                    <li data-target="#myCarousel" data-slide-to="<?= $i ;?>" class="<?= $actives ; ?>"></li>
                    <!--li data-target="#myCarousel" data-slide-to="1"></li>
                    <li data-target="#myCarousel" data-slide-to="2"></li-->
                    <?php $i++;}?>
                </ol>
                <!-- Wrapper for slides -->
                <div class="carousel-inner">
                    <?php 
                    $i=0;
                    foreach($result as $row){
                        $actives="";
                        if($i == 0){
                            $actives="active";
                        }
                    ?>
                    <div class="item <?= $actives; ?>">
                    <img src="<?= $row["imgUrl"] ?>" width="70%" height="20%" >
                    </div> 
                    <?php $i++;}?>
                </div>

                <!-- Left and right controls -->
                <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                    <span class="glyphicon glyphicon-chevron-left"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="right carousel-control" href="#myCarousel" data-slide="next">
                    <span class="glyphicon glyphicon-chevron-right"></span>
                    <span class="sr-only">Next</span>
                </a>
        </div></div>
        '
        ;
    }

    public function getRessources(){
        echo ' <!-- Bootstrap core CSS -->
        <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <!--  CSS Files -->
        <link rel="stylesheet" href="../assets/css/fontawesome.css">
        <link rel="stylesheet" href="../assets/css/admin-style.css">
        <title>Contact form</title>
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css" integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz" crossorigin="anonymous">
        <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">
        <link rel="stylesheet" href="../public/CSS/stylevues.css">
    
        <!--online res-->
        <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>';
    }

    public function getSlides(){
        return $this->controller->getDiaporama();
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
          <a class="dropbtn" href="C:\wamp64\www\projet_web\AccuielEcole/accueil.php">Accueil
           <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item ">
              
          <a class="dropbtn" href="../pages/presentationpage.php">Presentation de l"ecole</a>
          </li>
          <li class="nav-item dropdown">
          
            <button class="dropbtn">Cycles d’enseignement </button>
                <div class="dropdown-content">
                <a href="../pagesCycles/pageCyclePrimaire.php" role="button">Primaire</a>
                <a href="../pagesCycles/pageCycleMoyen.php" role="button">Moyen</a>
                <a href="../pagesCycles/pageCycleSecondaire.php" role="button">Secondaire</a>
                </div>
          </li>
          <li class="nav-item">
          <button class="dropbtn">Espace Eleves</a></button>
          </li>
          <li class="nav-item">
          <button class="dropbtn">Espace Parents d"Eleve</button>
          </li>
          <li class="nav-item">
          <button class="dropbtn">Contact</button>
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
    public function getDebutArticle(){
        echo '
        <div class="grey-bg container-fluid">
    <section id="minimal-statistics">
      <div class="row">
        <div class="col-12 mt-3 mb-1">
          <h4 class="text-uppercase">Articles</h4>
          <p>Dans cette section on vous presente les dernier articles publie dans l"ecole </p>
        </div>
      </div>';
      }
     public  function getArticle(){
        $id=ArticleCtrl::getIdLastArticle();
        $ctrl=new ArticleCtrl();
       
        $cpt=$id['max_id'];
        $i=0;
        echo '   <div class="row">';
        while($i<4){
                        $article= $ctrl->getArticleById(($cpt-$i));
            $i++;

        echo'
        <div class="col-xl-3 col-sm-6 col-12"> 
          <div class="card">
            <div class="card-content">
              <div class="card-body">
                <div class="media d-flex">
                  <div class="media-body text-center">
                    <h3>'.$article[0]['titre'].'</h3>
                    <span>New Posts</span>4';
                    echo " <img src=" . $article[0]['imageUrl']  . " width='50px' height='250px' >";
                    echo '
                    <p>'.substr($article[0]['descrption'],0,300).'</p><div class="btn-block">
                    <button type="submit" name="Ajouter">Plus</button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div></div>';
        }
        $cpt=$cpt-$i;
        $i=0;
        while($i<4){

                        $article= $ctrl->getArticleById(($cpt-$i));
            $i++;
            if(count($article)){
            echo'
            <div class="col-xl-3 col-sm-6 col-12"> 
            <div class="card">
            <div class="card-content">
            <div class="card-body">
                <div class="media d-flex">
                <div class="media-body text-center">
                    <h3>'.$article[0]['titre'].'</h3>
                    ';
                    echo " <img src=" . $article[0]['imageUrl']  . " width='50px' height='250px' >";
                    echo ' 
                    <p>'.$article[0]['descrption'].'</p><div class="btn-block">
                    <button type="submit" name="Ajouter">Plus</button>
                    </div>
                </div>
                </div>
            </div>
            </div>
            </div></div>';
          }  }
         echo '   
         
    </section> 
    
    </div>'  ;
      }


      public function getRestarationInfo(){
        $repasCtrl=new RepasCtrl();
        $repas=$repasCtrl->getAllRepas();
        $i=0;
        echo '   <div class="row">';
        foreach($repas as $r){
          if($i<4){
            $i++;
            echo'
            <div class="col-xl-3 col-sm-6 col-12"> 
              <div class="card">
                <div class="card-content">
                  <div class="card-body">
                    <div class="media d-flex">
                      <div class="media-body text-center">
                        <h3>'.$r['nom'].'</h3>';
                        echo " <img src=" . $r['imgUrl']  . " width='50px' height='250px' >";
                        echo '
                        <h3> Repas de :'.$r['jour'].' </h3>
                        <p>'.$r['description'].'</p><div class="btn-block">
                        
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div></div>';
            

          }
          $i=0;
        }
      }

      public function getTitleRestauration(){
        echo '    
        <div class="text-center">
          <h1 >Plan de Restauration </h1>
          <p>Repas de chaque semaines pour les trois cycles.</p></div<
        ';
      }

      public function getPresentationPage(){
      
        $ctrl=new PresentationCtrl();
       $result= $ctrl->listePresentation();
        echo ' <div class="row">
        <div class="col"> 
        <h3 class="text-center">Page Présentation de l"ecole</h3></div></div>
';
    $i=0;
       foreach($result as $data){  
     
        echo'    <div class="row">
        <div class="col"> 
        <div class="card">
          <div class="card-content">
            <div class="card-body">
              <div class="media d-flex">
                <div class="media-body text-center">
                  <p>'.$data['paragraph'].'</p>';
                    if(!empty($data['imgUrl'])){
                      echo'
                      <img  src="'.$data['imgUrl'].'" width="150px" height="150px">';
                    }
        
                    echo '
              
                    <div class="btn-block">
                    <div class="align-self-center">
                   
                   </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div></div>     <hr/>';
      

      
    } echo '  </div>';
      }

      public function getFooter(){
        echo '';
      }


}

?>