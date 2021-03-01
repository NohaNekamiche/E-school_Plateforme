<?php
require_once "../Controler/seanceCtrl.php";
class EmploiTempsVue{
    private $controller;
    public function __construct(){
        $this->controller = new seanceCtrl();
    }


    public function getTable($idNiv){
        echo '        <fieldset><legend>Cycle Annee Groupe </legend>
        <table>
        <caption >Liste D"emploi du temps</caption>
        <tr>
        <th>Dimanche</th>
        <th>Lundi</th>
        <th>Mardi</th>
        <th>Mercredi</th>
        <th>Jeudi</th>
        </tr>';
        $get=$this->controller->getSeanceByDate('Dimanche',$idNiv);
        foreach($get as $seance){
                $idMod=$seance['idModule'];
                echo '<tr><td>Math <br/>'.$seance['heureDebut']."_".$seance['heureFin'].'</td>';
        }
        $get=$this->controller->getSeanceByDate('Lundi',$idNiv);
        foreach($get as $seance){
                $idMod=$seance['idModule'];
                echo '<td>arab <br/>'.$seance['heureDebut']."_".$seance['heureFin'].'</td>';
        }
        $get=$this->controller->getSeanceByDate('Mardi',$idNiv);
        foreach($get as $seance){
                $idMod=$seance['idModule'];
                echo '<td>arab <br/>'.$seance['heureDebut']."_".$seance['heureFin'].'</td>';
        }
        $get=$this->controller->getSeanceByDate('Mercredi',$idNiv);
        foreach($get as $seance){
                $idMod=$seance['idModule'];
                echo '<td>arab <br/>'.$seance['heureDebut']."_".$seance['heureFin'].'</td>';
        }
        $get=$this->controller->getSeanceByDate('Jeudi',$idNiv);
        foreach($get as $seance){
                $idMod=$seance['idModule'];
                echo '<td>arab <br/>'.$seance['heureDebut']."_".$seance['heureFin'].'</td>';
        }
        echo '</table>        </fieldset><hr/> ';
    }
}
?>