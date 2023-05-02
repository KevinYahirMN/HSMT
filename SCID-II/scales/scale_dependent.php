<?php
include_once('../scaleCount/scaleCount.php');
include_once('../interfaces/IScales.php');
class scale_dependent implements IScales{
    function scale($answer){
        $scaleCount = new scaleCount();
        $c = 0;
        $c += $scaleCount->calif_true($answer[7]);
        $c += $scaleCount->calif_true($answer[8]);
        $c += $scaleCount->calif_true($answer[9]);
        $c += $scaleCount->calif_true($answer[10]);
        $c += $scaleCount->calif_true($answer[11]);
        $c += $scaleCount->calif_true($answer[12]);
        $c += $scaleCount->calif_true($answer[13]);
        $c += $scaleCount->calif_true($answer[14]);
        return $c;
    }
}
?>