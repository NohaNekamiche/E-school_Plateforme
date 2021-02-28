<?php
require_once "../Model/niveau.php";
if(isset($_POST['idNiv']))
{

 $id = $_POST['idNiv'];
 $result=niveau::getAnnee($id);
 if(count($result)>0){
 foreach($result as $row)
 {
  echo "<option value='" . $row['idNiv'] . "'>".$row['annee']."</option>";
 }
 exit;
}
else{
    echo '<option>error</option>';
}
}
?>