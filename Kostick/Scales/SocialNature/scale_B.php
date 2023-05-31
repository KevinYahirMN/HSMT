<?php
include_once('../scaleCount/scaleCount.php');
include_once('../Interfaces/IScales.php');
class scale_B implements IScales{
    function scale($answer = array()){
        $scaleCount = new scaleCount();
        $c = 0;
        $c += $scaleCount->calif_A($answer[34]);
        $c += $scaleCount->calif_A($answer[24]);
        $c += $scaleCount->calif_A($answer[14]);
        $c += $scaleCount->calif_A($answer[4]);
        $c += $scaleCount->calif_B($answer[5]);
        $c += $scaleCount->calif_B($answer[16]);
        $c += $scaleCount->calif_B($answer[27]);
        $c += $scaleCount->calif_B($answer[38]);
        $c += $scaleCount->calif_B($answer[49]);
        return $c;
    }
}
?>
