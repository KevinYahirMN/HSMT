<?php
include_once('../scaleCount/scaleCount.php');
include_once('../Interfaces/IScales.php');
class scale_L implements IScales{
    function scale($answer){
        $scaleCount = new scaleCount();
        $c = 0;
        $c += $scaleCount->calif_A($answer[11]);
        $c += $scaleCount->calif_A($answer[21]);
        $c += $scaleCount->calif_A($answer[31]);
        $c += $scaleCount->calif_A($answer[41]);
        $c += $scaleCount->calif_A($answer[51]);
        $c += $scaleCount->calif_A($answer[61]);
        $c += $scaleCount->calif_A($answer[71]);
        $c += $scaleCount->calif_A($answer[81]);
        $c += $scaleCount->calif_B($answer[80]);
        return $c;
    }
}
?>