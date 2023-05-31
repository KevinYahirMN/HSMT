<?php
include_once('../scaleCount/scaleCount.php');
include_once('../Interfaces/IScales.php');
class scale_C implements IScales{
    function scale($answer = array()){
        $scaleCount = new scaleCount();
        $c = 0;
        $c += $scaleCount->calif_A($answer[88]);
        $c += $scaleCount->calif_B($answer[87]);
        $c += $scaleCount->calif_B($answer[76]);
        $c += $scaleCount->calif_B($answer[65]);
        $c += $scaleCount->calif_B($answer[54]);
        $c += $scaleCount->calif_B($answer[43]);
        $c += $scaleCount->calif_B($answer[32]);
        $c += $scaleCount->calif_B($answer[21]);
        $c += $scaleCount->calif_B($answer[10]);
        return $c;
    }
}
?>