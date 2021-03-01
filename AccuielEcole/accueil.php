<html>
    <header>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700" rel="stylesheet">
    <title>Accueil page</title>
    <!-- Bootstrap core CSS -->
    <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!--  CSS Files -->
    <link rel="stylesheet" href="../assets/css/fontawesome.css">
    <link rel="stylesheet" href="../assets/css/admin-style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    </header>
    <body>
        
<div class="container">
<?php
      require_once ("../Vue/components/AccuielEcoleElements.php");

      $vue=new AccuielEcoleElements();
      //$db =model::connexion();
      //$requete = "SELECT imgUrl FROM diaporama ORDER BY id ASC ";
      //$result=model::request($requete);
      $result=$vue->getSlides();
     // $diaporama->getDiaporama($result);
      ?>
      <h1 class="text-center">Diaporama </h1>
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
</div>

    <?php
     $vue->getMenu();
    ?>
    </body>
</html>