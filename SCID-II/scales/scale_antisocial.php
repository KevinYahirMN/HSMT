<?php
include_once('../scaleCount/scaleCount.php');
include_once('../interfaces/IScales.php');
class scale_antisocial implements IScales{
    function scale($answer){
        $scaleCount = new scaleCount();
        $c = 0;
        $c += $scaleCount->calif_true($answer[108]);
        $c += $scaleCount->calif_true($answer[109]);
        $c += $scaleCount->calif_true($answer[110]);
        $c += $scaleCount->calif_true($answer[111]);
        $c += $scaleCount->calif_true($answer[112]);
        $c += $scaleCount->calif_true($answer[113]);
        $c += $scaleCount->calif_true($answer[114]);
        $c += $scaleCount->calif_true($answer[115]);
        $c += $scaleCount->calif_true($answer[116]);
        $c += $scaleCount->calif_true($answer[117]);
        $c += $scaleCount->calif_true($answer[118]);
        $c += $scaleCount->calif_true($answer[119]);
        return $c;
    }
}
?>