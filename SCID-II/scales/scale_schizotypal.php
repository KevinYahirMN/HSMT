<?php
include_once('../scaleCount/scaleCount.php');
include_once('../interfaces/IScales.php');
class scale_schizotypal implements IScales{
    function scale($answer){
        $scaleCount = new scaleCount();
        $c = 0;
        $c += $scaleCount->calif_true($answer[56]);
        $c += $scaleCount->calif_true($answer[57]);
        $c += $scaleCount->calif_true($answer[58]);
        $c += $scaleCount->calif_true($answer[59]);
        $c += $scaleCount->calif_true($answer[60]);
        $c += $scaleCount->calif_true($answer[61]);
        $c += $scaleCount->calif_true($answer[62]);
        $c += $scaleCount->calif_true($answer[63]);
        return $c;
    }
}
?>