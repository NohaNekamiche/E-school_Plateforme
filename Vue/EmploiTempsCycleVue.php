<?php
require_once "../Controler/receptionCtrl.php";
require_once "../Controler/enseignantCtrl.php";
require_once "../Controler/moduleCtrl.php";
require_once "../Controler/niveauCtrl.php";

class EmploiTempsCycleVue{
    private $controller;
    public function __construct(){
        $this->controller = new receptionCtrl();
    }

    public function getTableReception($cycle,$legend){
        $ensCtrl=new enseignantCtrl();
        $nivCtrl=new niveauCtrl();
        $niveaux=$nivCtrl->getNivByCycle($cycle);
        $moduleCtrl=new moduleCtrl();
        echo '     <div class="testbox">  <fieldset><legend>'.$legend.'</legend>
        <table>

        <tr>
        <th>Ensiegnant</th>
        <th>Dimanche</th>
        <th>Lundi</th>
        <th>Mardi</th>
        <th>Mercredi</th>
        <th>Jeudi</th>
        </tr>';
        foreach($niveaux as $niv){
            $module=$moduleCtrl->getModuleByIdNiv($niv['idNiv']);
            if(count($module)){
                $profs=$ensCtrl->getprofByIdMod($module['idModule']);
            foreach($profs as $prof){
                $user=$ensCtrl->getInfoAccount($prof['idUser']);
        echo '
        <tr><td>'.$prof['nom'].'  '.$prof['prenom'].'<br/> Email: '.$user[0]['email'].'<br/> Num Tel :'.$prof['numTel1'].' </td>';
        $reception=$this->controller->getReceptionByidprofJour($prof['id'],'Dimanche');
        echo
        '<td>'.$reception['heureReception'].'</td>';
        $reception=$this->controller->getReceptionByidprofJour($prof['id'],'Lundi');
        echo'<td>'.$reception['heureReception'].'</td>';
        $reception=$this->controller->getReceptionByidprofJour($prof['id'],'Mardi');
        echo'<td>'.$reception['heureReception'].'</td>';
        $reception=$this->controller->getReceptionByidprofJour($prof['id'],'Mercredi');
        echo'<td>'.$reception['heureReception'].'</td>';
        $reception=$this->controller->getReceptionByidprofJour($prof['id'],'Jeudi');
        echo'<td>'.$reception['heureReception'].'</td></tr>'; } 
    }
    }
        echo '

        </table>        </fieldset><hr/></div>';

    }


}

?>