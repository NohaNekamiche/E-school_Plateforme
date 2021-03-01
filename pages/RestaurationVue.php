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

  <div class="table-responsive-md">
    <h1 class="text-center"> Liste des Articles Publie</h1>
      <table  class="table  table-striped table-bordered .table-responsive">
  
      <thead>
      <th>Id</th>
      <th>Nom Repas</th>
      <th>Description </th>
      <th>Image</th>
      <th>Jour</th>
      <th >Action </th>
      <?php 
          require_once "../Controler/repasCtrl.php";
          $ctrl=new repasCtrl();
          $result=$ctrl->getAllRepas();
          foreach($result as $row){
         //   $user=$ctrl->getInfoAccount($row['id']);
      ?>
            <tr>
            <th scope="row"> <?php  echo $row['idRepas'];?></th>
            <th > <?php  echo $row['nom'];?></th>
            <th > <?php  echo $row['description'];?></th>
            <td> <img  src=" <?= $row['imgUrl'];?>" width="50px" height="350px"></td>
            <th > <?php  echo $row['jour'];?></th>
            <td>
            <a href="RestaurationVue.php?delete=<?php echo $row['idRepas']?>"
              ><button class="btn-block">Supprimer</button></a>
            </td>
            </td>
            </tr>
      <?php }?>
     </thead>

    </table>
</div>
          <?php
          require_once '../Controler/RepasCtrl.php';
          require_once '../Vue/repasVue.php';
          $vue=new repasVue();
          $vue->getForm();
          $vue->AddUpdateRepas();
          $vue->delete();
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