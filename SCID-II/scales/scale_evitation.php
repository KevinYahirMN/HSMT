<?php
include_once('../scaleCount/scaleCount.php');
include_once('../interfaces/IScales.php');
class scale_evitation implements IScales{
    function scale($answer){
        $scaleCount = new scaleCount();
        $c = 0;
        $c += $scaleCount->calif_true($answer[0]);
        $c += $scaleCount->calif_true($answer[1]);
        $c += $scaleCount->calif_true($answer[2]);
        $c += $scaleCount->calif_true($answer[3]);
        $c += $scaleCount->calif_true($answer[4]);
        $c += $scaleCount->calif_true($answer[5]);
        $c += $scaleCount->calif_true($answer[6]);
        return $c;
    }
}
?>