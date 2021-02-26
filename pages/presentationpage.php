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
  <body>

    <?php 
     require_once ("../Controler/PresentationCtrl.php");
     $ctrl=new PresentationCtrl();
    $result= $ctrl->listePresentation();
    foreach( $result as $data){
    ?>
    <div class="column">
        <div class="col-md-8">
            <div class="card" style="width: 35rem;">
            <p class="card-text">
                
                <?php echo $data['paragraph'];?>
            </p>
            <img  src="<?=$data['imgUrl']?>" width="300px" height="300px">
            </div>
        </div>
    </div>
    <?php }?>
    <div class="card" style="width: 18rem;">
  <div class="card-body">
    <h5 class="card-title">Card title</h5>
    <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="#" class="card-link">Card link</a>
    <a href="#" class="card-link">Another link</a>
  </div>
</div>


  </body>
</html>
<style>


body {
 
  max-width: 900px;
  margin: 30px auto;
  padding: 20px;
/*   outline: 1px solid #ccc; */
}

/* Still use global css (not utility css) for base typography etc? */
p {
  margin-bottom: 0.8em;
}
</style>