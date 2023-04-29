<?php
include_once('../scaleCount/scaleCount.php');
include_once('../Interfaces/IScales.php');
class scale_F implements IScales{
    function scale($answer){
        $scaleCount = new scaleCount();
        $c = 0;
        $c += $scaleCount->calif_A($answer[78]);
        $c += $scaleCount->calif_A($answer[68]);
        $c += $scaleCount->calif_A($answer[58]);
        $c += $scaleCount->calif_A($answer[48]);
        $c += $scaleCount->calif_A($answer[38]);
        $c += $scaleCount->calif_A($answer[28]);
        $c += $scaleCount->calif_A($answer[18]);
        $c += $scaleCount->calif_A($answer[8]);
        $c += $scaleCount->calif_B($answer[9]);
        return $c;
    }
}
?>