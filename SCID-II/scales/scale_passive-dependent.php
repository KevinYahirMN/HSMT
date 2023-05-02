<?php
include_once('../scaleCount/scaleCount.php');
include_once('../interfaces/IScales.php');
class scale_passive_dependent implements IScales{
    function scale($answer){
        $scaleCount = new scaleCount();
        $c = 0;
        $c += $scaleCount->calif_true($answer[35]);
        $c += $scaleCount->calif_true($answer[36]);
        $c += $scaleCount->calif_true($answer[37]);
        $c += $scaleCount->calif_true($answer[38]);
        $c += $scaleCount->calif_true($answer[39]);
        $c += $scaleCount->calif_true($answer[40]);
        $c += $scaleCount->calif_true($answer[41]);
        $c += $scaleCount->calif_true($answer[42]);
        $c += $scaleCount->calif_true($answer[43]);
        $c += $scaleCount->calif_true($answer[44]);
        $c += $scaleCount->calif_true($answer[45]);
        $c += $scaleCount->calif_true($answer[46]);
        $c += $scaleCount->calif_true($answer[47]);
        return $c;
    }
}
?>