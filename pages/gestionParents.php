<?php
session_start();
?>
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
      <caption >Liste des Parents D'éleves</caption>
      <thead>
      <th>Id</th>
      <th>Nom</th>
      <th>Prenom</th>
      <th>Date de Naissance</th>
      <th>Address</th>
      <th>N° Tel </th>
      <th>N° Tel </th>
      <th>N° Tel </th>
      <th colspan="2">Action </th>
      <?php 
          require_once "../Controler/parentCtrl.php";
          $ctrl=new parentCtrl();
          $result=$ctrl->getAllParents();
          foreach($result as $row){
      ?>
            <tr>
            <th scope="row"> <?php  echo $row['id'];?></th>
            <td> <?php  echo $row['nom'];?></td>
            <td> <?php  echo $row['prenom'];?></td>
            <td> <?php  echo $row['dateNais'];?></td>
            <td> <?php  echo $row['adress'];?></td>
            <td> <?php  echo $row['numTel1'];?></td>
            <td> <?php  echo $row['numTel2'];?></td>
            <td> <?php  echo $row['numTel3'];?></td>
            <td> <a href="gestionParents.php?edit=<?php echo $row['id']?>"
              ><button class="btn-block">Modifier</button></a>
            
            </td>
            <td>
            <a href="gestionParents.php?delete=<?php echo $row['id']?>"
              ><button class="btn-block">Supprimer</button></a>
            </td>
            </td>
            </tr>
      <?php }?>
      </thead>

      </table>
      </div>

      <div class="testbox">
      <table >
      <caption >Liste D'éleves</caption>
      <thead>
      <th>Id</th>
      <th>Nom</th>
      <th>Prenom</th>
      <th>Date de Naissance</th>
      <th>Annee</th>
      <th>Groupe</th>
      <th>Cycle</th>
      <th>N° Tel </th>
      <th>N° Tel </th>
      <th>N° Tel </th>
      <th colspan="2">Action </th>
     </thead>
     <?php 
          require_once "../Controler/EleveCtrl.php";
          require_once "../Controler/niveauCtrl.php";
          $ctrl=new EleveCtrl();
          $nivCtrl=new niveauCtrl();
          $result1=$ctrl->getAllEleves();
          foreach($result1 as $eleve){
            $niv= $nivCtrl->getNiveauById($eleve['idNiv']);
          
      ?>
            <tr>
            <th scope="row"> <?php  echo $eleve['id'];?></th>
            <td> <?php  echo $eleve['nom'];?></td>
            <td> <?php  echo $eleve['prenom'];?></td>
            <td> <?php  echo $eleve['dateNais'];?></td>
            <td><?php  echo $niv[0]['annee'] ?></td>
            <td><?php  echo $niv[0]['grp'] ?></td>
            <td><?php  echo $niv[0]['cycle'] ?></td>
            <td> <?php  echo $eleve['NumTel1'];?></td>
            <td> <?php  echo $eleve['NumTel2'];?></td>
            <td> <?php  echo $eleve['NumTel3'];?></td>
            <td> <a href="gestionParents.php?editEleve=<?php echo $eleve['id']?>"
              ><button class="btn-block">Modifier</button></a>
            
            </td>
            <td>
            <a href="gestionParents.php?deleteEleve=<?php echo $eleve['id']?>"
              ><button class="btn-block">Supprimer</button></a>
            </td>
            </td>
          
            </tr>
      <?php }?>
       </table>
      </div>
    <?php
          require_once "../Vue/parentsVue.php";
          require_once '../Controler/EleveCtrl.php';
          //edit parents
          if(isset($_GET['delete']))
          {
              $id=$_GET['delete'];
              echo $row['idUser'];
              $ctrl->deleteParentById($id, $row['idUser']);
          }
          if(isset($_GET['edit'])){
            echo $_GET['edit'];
          }

          //delete parents
          //get form parent
          $vue=new parentsVue();
          $vue-> getFormParent();
          $vue->getFormEnfant();
            if(isset($_POST["Ajouter"])){
              $_SESSION['idParent']=$vue->insertParent();
            }else
            {
              if(isset($_POST['AjouterEnfant'])){
             $vue->insertEnfant();
             ;}
            }
            
        ?>
  </body>
</html>