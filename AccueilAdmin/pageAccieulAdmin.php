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
              <div class="logo">
                <a href="index.html">Admin</a>
              </div>
            </header>
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
                <li><a href="../pages/ArticleVue.php">Gestion des Articles</a></li>
                <li><a href="../pages/CreerPresentationVue.php">Gestion des Présentations</a></li>
                <li>
                  <span class="opener">Gestion des Emplois du Temps</span>
                  <ul>
                    <li><a href="#">Empoils Du Temps Primaire</a></li>
                    <li><a href="#">Empoils Du Temps Moyen</a></li>
                    <li><a href="#">Empoils Du Temps Secondaire</a></li>
                  </ul>
                </li>
                <li><a href="../pages/gestionWorkEnseignant.php">Gestion des Enseignants</a></li>
                <li>
                  <span class="opener">Gestion des utilisateurs</span>
                  <ul>
                    <li><a href="../pages/gestionEnseignant.php">Enseignants</a></li>
                    <li><a href="../pages/gestionParents.php">Eleves</a></li>
                    <li><a href="">Parents d'éleve</a></li>
                  </ul>
                </li>
                <li><a href="../pages/RestaurationVue.php">Gestion de Restauration</a></li>
                <li><a href="../pages/ContactVue.php">Gestion de Page Contact</a></li>
                <li><a href="../pages/DiaporamaVue.php">Gestion de Diaporama et Design</a></li>
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
