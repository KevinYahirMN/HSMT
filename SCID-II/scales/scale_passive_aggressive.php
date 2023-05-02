<?php
include_once('../scaleCount/scaleCount.php');
include_once('../interfaces/IScales.php');
class scale_passive_aggressive implements IScales{
    function scale($answer){
        $scaleCount = new scaleCount();
        $c = 0;
        $c += $scaleCount->calif_true($answer[26]);
        $c += $scaleCount->calif_true($answer[27]);
        $c += $scaleCount->calif_true($answer[28]);
        $c += $scaleCount->calif_true($answer[29]);
        $c += $scaleCount->calif_true($answer[30]);
        $c += $scaleCount->calif_true($answer[31]);
        $c += $scaleCount->calif_true($answer[32]);
        $c += $scaleCount->calif_true($answer[33]);
        $c += $scaleCount->calif_true($answer[34]);
        return $c;
    }
}
?>