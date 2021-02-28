
<!DOCTYPE html>
<html>
  <head>
    <title>Employment Verification Form</title>
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
    <link rel="stylesheet" href="../public/CSS/gestionusersstyle.css">
  </head>
  <body>
  <div class="testbox">
      <table >
      <caption >Liste D'énseignants</caption>
      <thead>
      <th>Id</th>
      <th>Nom</th>
      <th>Prenom</th>
      <th>adress</th>
      <th>Date de Naissance</th>
      <th>Email</th>
      <th>Password</th>
      <th>Username</th>
      <th>N° Tel </th>
      <th>N° Te1l </th>
      <th>N° Tel </th>
      <th colspan="2">Action </th>
      <?php 
          require_once "../Controler/enseignantCtrl.php";
          $ctrl=new enseignantCtrl();
          $result=$ctrl-> getAllEnseignants();
          foreach($result as $row){
            $user=$ctrl->getInfoAccount($row['idUser']);
      ?>
            <tr>
            <th scope="row"> <?php  echo $row['id'];?></th>
            <td> <?php  echo $row['nom'];?></td>
            <td> <?php  echo $row['prenom'];?></td>
            <td> <?php  echo $row['adress'];?></td>
            <td> <?php  echo $row['dateNais'];?></td>
            <td><?php echo $user[0]['email'];?></td>
            <td><?php echo $user[0]['password'];?></td>
            <td><?php echo $user[0]['username'];?></td>
            <td> <?php  echo $row['numTel1'];?></td>
            <td> <?php  echo $row['numTel2'];?></td>
            <td> <?php  echo $row['numTel3'];?></td>
            <td> <a href="gestionEnseignant.php?edit=<?php echo $row['id']?>"
              ><button class="btn-block">Modifier</button></a>
            
            </td>
            <td>
            <a href="gestionEnseignant.php?delete=<?php echo $row['id']?>"
              ><button class="btn-block">Supprimer</button></a>
            </td>
            </td>
            </tr>
      <?php }?>
     </thead>

    </table>
</div>
      <?php
      require_once "../Vue/enseignantVue.php";
       $vue= new enseignantVue();
       $vue->getForm();
       $vue->insertEnseignant();
      ?>

  </body>
</html>