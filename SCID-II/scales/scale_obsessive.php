<?php
include_once('../scaleCount/scaleCount.php');
include_once('../interfaces/IScales.php');
class scale_obsessive implements IScales{
    function scale($answer){
        $scaleCount = new scaleCount();
        $c = 0;
        $c += $scaleCount->calif_true($answer[15]);
        $c += $scaleCount->calif_true($answer[16]);
        $c += $scaleCount->calif_true($answer[17]);
        $c += $scaleCount->calif_true($answer[18]);
        $c += $scaleCount->calif_true($answer[19]);
        $c += $scaleCount->calif_true($answer[20]);
        $c += $scaleCount->calif_true($answer[21]);
        $c += $scaleCount->calif_true($answer[22]);
        $c += $scaleCount->calif_true($answer[23]);
        $c += $scaleCount->calif_true($answer[24]);
        $c += $scaleCount->calif_true($answer[25]);
        return $c;
    }
}
?>