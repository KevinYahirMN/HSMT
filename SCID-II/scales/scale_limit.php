<?php
include_once('../scaleCount/scaleCount.php');
include_once('../interfaces/IScales.php');
class scale_limit implements IScales{
    function scale($answer){
        $scaleCount = new scaleCount();
        $c = 0;
        $c += $scaleCount->calif_true($answer[90]);
        $c += $scaleCount->calif_true($answer[91]);
        $c += $scaleCount->calif_true($answer[92]);
        $c += $scaleCount->calif_true($answer[93]);
        $c += $scaleCount->calif_true($answer[94]);
        $c += $scaleCount->calif_true($answer[95]);
        $c += $scaleCount->calif_true($answer[96]);
        $c += $scaleCount->calif_true($answer[97]);
        $c += $scaleCount->calif_true($answer[98]);
        $c += $scaleCount->calif_true($answer[99]);
        $c += $scaleCount->calif_true($answer[100]);
        $c += $scaleCount->calif_true($answer[101]);
        $c += $scaleCount->calif_true($answer[102]);
        $c += $scaleCount->calif_true($answer[103]);
        $c += $scaleCount->calif_true($answer[104]);
        $c += $scaleCount->calif_true($answer[105]);
        $c += $scaleCount->calif_true($answer[106]);
        $c += $scaleCount->calif_true($answer[107]);
        return $c;
    }
}
?>