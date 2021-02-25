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
    <title>Contact form</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css" integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">
    <link rel="stylesheet" href="../public/CSS/stylevues.css">
  </head>
  <body>
  
          
        <div class="main-block">
            <form method="post" enctype="multipart/form-data">
              <h1>Ajouter Repas</h1>
              <div class="info">
                <input class="fname" type="text" name="nom" placeholder="Nom Repas">
                <label for="jours">Choose le jour:</label>
                <select id="selectype" name="jours" required>
                    <option value="Dimanche">Dimanche</option>
                    <option value="Lundi">Lundi</option>
                    <option value="Mardi">Mardi</option>
                    <option value="Mercredi">Mercredi</option>
                    <option value="Jeudi">Jeudi</option>
                </select>
                <label class="file">
                <input type="file" id="file" aria-label="File browser example" name="img">
                <span class="file-custom"></span>
              </label>
              </div>
              <p>Description</p>
              <div>
                <textarea rows="4" name="description"></textarea>
              </div>
              <button type="submit"  name="Ajouter">Ajouter Article</button>
            </form>
                
          </div>
          <?php
          require_once '../Controler/RepasCtrl.php';
            if(isset($_POST["Ajouter"])){
              
              $ctrl= new RepasCtrl();
                $ctrl->ajouterRepas($_POST['nom'],$_POST['description'],$_POST['jours']);
            }
        ?>

  </body>
</html>

  <!-- Scripts -->
  <!-- Bootstrap core JavaScript -->
  <script src="../vendor/jquery/jquery.min.js"></script>
    <script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="../assets/js/browser.min.js"></script>
    <script src="../assets/js/breakpoints.min.js"></script>
    <script src="../assets/js/transition.js"></script>
    <script src="../assets/js/owl-carousel.js"></script>
    <script src="../assets/js/custom.js"></script>