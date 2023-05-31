<?php
include_once('../scaleCount/scaleCount.php');
include_once('../Interfaces/IScales.php');
class scale_W implements IScales{
    function scale($answer = array()){
        $scaleCount = new scaleCount();
        $c = 0;
        $c += $scaleCount->calif_A($answer[89]);
        $c += $scaleCount->calif_A($answer[20]);
        $c += $scaleCount->calif_A($answer[79]);
        $c += $scaleCount->calif_A($answer[69]);
        $c += $scaleCount->calif_A($answer[59]);
        $c += $scaleCount->calif_A($answer[49]);
        $c += $scaleCount->calif_A($answer[39]);
        $c += $scaleCount->calif_A($answer[29]);
        $c += $scaleCount->calif_A($answer[19]);
        $c += $scaleCount->calif_A($answer[9]);
        return $c;
    }
}
?>