<?php
require_once "../Controler/noteCtrl.php";
require_once "../Controler/moduleCtrl.php";

class noteVue{
    private $controller;
    public function __construct(){
      $this->controller = new noteCtrl();
    }

    public function getNotes($idEleve){
        echo '  <fieldset><legend>Vous Notes</legend>
        <table>
        <tr>
        <th>Nom Module</th>
        <th>Note</th>
        <th>Remarque</th>
        </tr>';
        $notes=$this->controller->getNotesByIdEleve($idEleve);
        foreach($notes as $n){
            $moduleCtrl=new moduleCtrl();
            $module=$moduleCtrl->getModuleByIdMod($n['idModule']);
            echo '<tr><td>'.$module[0]['nomModule'].'</td>';
            echo '<td>'.$n['note'];
            echo '</td><td>'.$n['remarque'].'</td></tr>';
        }
        echo '</table></fieldset>';

    }


}
?>