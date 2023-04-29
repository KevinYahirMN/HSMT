<?php
include_once('../scaleCount/scaleCount.php');
include_once('../Interfaces/IScales.php');
class scale_E implements IScales{
    function scale($answer){
        $scaleCount = new scaleCount();
        $c = 0;
        $c += $scaleCount->calif_B($answer[88]);
        $c += $scaleCount->calif_B($answer[77]);
        $c += $scaleCount->calif_B($answer[66]);
        $c += $scaleCount->calif_B($answer[55]);
        $c += $scaleCount->calif_B($answer[44]);
        $c += $scaleCount->calif_B($answer[33]);
        $c += $scaleCount->calif_B($answer[22]);
        $c += $scaleCount->calif_B($answer[11]);
        $c += $scaleCount->calif_B($answer[0]);
        return $c;
    }
}
?>
