<?php
include_once('../scaleCount/scaleCount.php');
include_once('../interfaces/IScales.php');
class scale_narcissistic implements IScales{
    function scale($answer){
        $scaleCount = new scaleCount();
        $c = 0;
        $c += $scaleCount->calif_true($answer[79]);
        $c += $scaleCount->calif_true($answer[80]);
        $c += $scaleCount->calif_true($answer[81]);
        $c += $scaleCount->calif_true($answer[82]);
        $c += $scaleCount->calif_true($answer[83]);
        $c += $scaleCount->calif_true($answer[84]);
        $c += $scaleCount->calif_true($answer[85]);
        $c += $scaleCount->calif_true($answer[86]);
        $c += $scaleCount->calif_true($answer[87]);
        $c += $scaleCount->calif_true($answer[88]);
        $c += $scaleCount->calif_true($answer[89]);
        return $c;
    }
}
?>