<?php
include_once('../scaleCount/scaleCount.php');
include_once('../Interfaces/IScales.php');
class scale_R implements IScales{
    function scale($answer = array()){
        $scaleCount = new scaleCount();
        $c = 0;
        $c += $scaleCount->calif_A($answer[66]);
        $c += $scaleCount->calif_A($answer[76]);
        $c += $scaleCount->calif_A($answer[86]);
        $c += $scaleCount->calif_B($answer[85]);
        $c += $scaleCount->calif_B($answer[74]);
        $c += $scaleCount->calif_B($answer[63]);
        $c += $scaleCount->calif_B($answer[52]);
        $c += $scaleCount->calif_B($answer[41]);
        $c += $scaleCount->calif_B($answer[30]);
        return $c;
    }
}
?>