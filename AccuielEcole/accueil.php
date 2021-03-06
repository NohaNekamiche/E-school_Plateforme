<html>
    <head>
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
    <link rel="stylesheet" href="../assets/css/fontawesome.css">
    <!--- extra links-->
    <link rel="stylesheet" type="text/css" href="https://pixinvent.com/stack-responsive-bootstrap-4-admin-template/app-assets/css/bootstrap-extended.min.css">
    </head>
    <body>
        
<div class="container">
<?php
      require_once ("../Vue/components/AccuielEcoleElements.php");
      $vue=new AccuielEcoleElements();
      $result=$vue->getSlides();
      ?>
      <h1 class="text-center">Notre Ecole </h1>
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
                    
                        <?php $i++;}?>
                    </ol>
                  
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
    $vue->getDebutArticle();
     $vue->getArticle();
     $vue->getContact();
    ?>




  
  

    </body>
</html>