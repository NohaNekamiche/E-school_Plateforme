<?php 

require_once "../Controler/diaporamaCtrl.php";
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
            
            <a href="#" class="navbar-brand">
                <img src="../school/logo/logoBleu.png" height="80" alt="ESchool">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <ul class="navbar-nav">
          <li class="nav-item active">
          <button class="dropbtn">Accueil <span class="sr-only">(current)</span></button>
          </li>
          <li class="nav-item ">
              
          <button class="dropbtn">Presentation de l"ecole</button>
          </li>
          <li class="nav-item dropdown">
          
            <button class="dropbtn">Cycles d’enseignement </button>
                <div class="dropdown-content">
                <a href="#">Primaire</a>
                <a href="#">Moyen</a>
                <a href="#">Secondaire</a>
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
}

?>