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
    echo '<div class="container">
    <div class="row">';
    foreach( $result as $data){
   echo '
        <div class="col-md-6">
            <div class="card"  >
            <p class="card-text">'.$data['paragraph'].'
            </p>';
            if(!empty($data['imgUrl'])){
            echo'
            <img  src="'.$data['imgUrl'].'" width="150px" height="150px">';
          }
          echo'
            </div>
        </div><br/><br/>
   ';
     }
     echo ' </div> </div>';
    ?>


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