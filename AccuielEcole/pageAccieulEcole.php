<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700" rel="stylesheet">
    <title>Admin page</title>
    <!-- Bootstrap core CSS -->
    <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!--  CSS Files -->
    
    <link rel="stylesheet" href="../assets/css/fontawesome.css">
    <link rel="stylesheet" href="../assets/css/admin-style.css">
    
  </head>

<body class="is-preload">

    <!-- Wrapper -->
    <div id="wrapper">
      <!-- Main -->
        <div id="main">
          <div class="inner">

            <!-- Header -->
            <header id="header">
            <!--img src="../school/slides/1.jpg"  width="20%" height="20"-->
              <div class="logo">
                <a>E-school</a>
              </div>
              <div id="topbar">
                  <div class="container">
                    <div class="social-links">
                      <a href="#" class="twitter"><i class="fa fa-twitter"></i></a>
                      <a href="#" class="facebook"><i class="fa fa-facebook"></i></a>
                      <a href="#" class="linkedin"><i class="fa fa-linkedin"></i></a>
                      <a href="#" class="instagram"><i class="fa fa-instagram"></i></a>
                    </div>
                  </div>
              </div>
            </header>
            <!---diaporama-->
            <?php
                require_once ("../Vue/components/AccuielEcoleElements.php");

                $diaporama=new AccuielEcoleElements();
                //$db =model::connexion();
                //$requete = "SELECT imgUrl FROM diaporama ORDER BY id ASC ";
                //$result=model::request($requete);
                $result=$diaporama->getSlides();
                $diaporama-> getDiaporama($result);
                ?>
            <div class="container">
            <div id="myCarousel" class="carousel slide" data-ride="carousel">
                    <!-- Indicators -->
                    <ol class="carousel-indicators">
                        <?php 
                        $i=0;
                        foreach($result as $row){
                            $actives='';
                            if($i == 0){
                                $actives='active';

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
                            $actives='';
                            if($i == 0){
                                $actives='active';
                            }
                        ?>
                        <div class="item <?= $actives; ?>">
                        <img src="<?= $row['imgUrl'] ?>" width="70%" height="20%" >
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
            </div>
        </div>
            <!-- Categories -->
            <section class="services">
              <div class="container-fluid">
                <div class="row">
                  <div class="col-md-4">
                    <div class="service-item first-item">
                      <div class="icon"></div>
                      <h4>Gestion des <br/> Articles</h4>
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="service-item second-item">
                      <div class="icon"></div>
                      <h4>Gestion des Présentations</h4>
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="service-item third-item">
                      <div class="icon"></div>
                      <h4>Gestion des Emplois du Temps</h4>
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="service-item fourth-item">
                      <div class="icon"></div>
                      <h4>Gestion des Enseignants</h4>
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="service-item fivth-item">
                      <div class="icon"></div>
                      <h4>Gestion des utilisateurs</h4>
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="service-item sixth-item">
                      <div class="icon"></div>
                      <h4>Gestion de Restauration</h4>
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="service-item seventh-item">
                      <div class="icon"></div>
                      <h4>Gestion de Page Contact</h4>      
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="service-item eighth-item ">
                      <div class="icon"></div>
                      <h4>Gestion de Diaporama et Design</h4>      
                    </div>
                  </div>
                </div>
              </div>
            </section>
          </div>
        </div>

      <!-- Sidebar -->
        <div id="sidebar">

          <div class="inner">

            <!-- Search Box -->
            <section id="search" class="alt">
              <form method="get" action="#">
                <input type="text" name="search" id="search" placeholder="Search..." />
              </form>
            </section>
              
            <!-- Menu -->
            <nav id="menu">
              <ul>
                <li><a href="">Accueil </a></li>
                <li><a href="../pages/">Presentation de L'ecole</a></li>
                <li><a href="../pages/">Gestion des Présentations</a></li>
                <li>
                  <span class="opener">cycles d’enseignement</span>
                  <ul>
                    <li><a href="#">Primaire</a></li>
                    <li><a href="#"> Moyen</a></li>
                    <li><a href="#">Secondaire</a></li>
                  </ul>
                </li>
                <li><a href="">Espace élèves</a></li>
                <li><a href="../pages/"> Espace Parent </a></li>
                <li><a href="">Contact</a></li>
              </ul>
            </nav>
            <!-- Footer -->
            <footer id="footer">
              <p class="copyright">Copyright &copy; 2021 Noha Nekamiche</p>
            </footer>

          </div>
        </div>

    </div>

  <!-- Scripts -->
  <!-- Bootstrap core JavaScript -->
    <script src="../vendor/jquery/jquery.min.js"></script>
    <script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="../assets/js/browser.min.js"></script>
    <script src="../assets/js/breakpoints.min.js"></script>
    <script src="../assets/js/transition.js"></script>
    <script src="../assets/js/owl-carousel.js"></script>
    <script src="../assets/js/custom.js"></script>
</body>




</html>
