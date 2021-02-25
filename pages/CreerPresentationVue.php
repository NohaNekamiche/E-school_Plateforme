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
            <form method="post" enctype="multipart/form-data" >
              <h1>Ajouter Presentation</h1>
                <label class="file">
                <input type="file" id="file" name="img">

              </label>
              <p>Paragraphe</p>
              <div>
                <textarea rows="4" name="paragraph"></textarea>
              </div>
              <button type="submit"  name="Ajouter">Ajouter Article</button>
            </form>
            
                
          </div>
          <?php
          require_once '../Controler/PresentationCtrl.php';
            if(isset($_POST["Ajouter"])){
              
              $ctrl= new PresentationCtrl();

                $ctrl->ajouterPresentation($_POST['paragraph']);
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