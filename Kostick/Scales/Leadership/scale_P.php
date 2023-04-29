<?php
include_once('../scaleCount/scaleCount.php');
include_once('../Interfaces/IScales.php');
class scale_P implements IScales{
    function scale($answer){
        $scaleCount = new scaleCount();
        $c = 0;
        $c += $scaleCount->calif_A($answer[12]);
        $c += $scaleCount->calif_A($answer[2]);
        $c += $scaleCount->calif_B($answer[3]);
        $c += $scaleCount->calif_B($answer[14]);
        $c += $scaleCount->calif_B($answer[25]);
        $c += $scaleCount->calif_B($answer[36]);
        $c += $scaleCount->calif_B($answer[47]);
        $c += $scaleCount->calif_B($answer[58]);
        $c += $scaleCount->calif_B($answer[69]);
        return $c;
    }
}
?>