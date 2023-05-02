<?php
include_once('../scaleCount/scaleCount.php');
include_once('../interfaces/IScales.php');
class scale_schizoid implements IScales{
    function scale($answer){
        $scaleCount = new scaleCount();
        $c = 0;
        $c += $scaleCount->calif_true($answer[64]);
        $c += $scaleCount->calif_true($answer[65]);
        $c += $scaleCount->calif_true($answer[66]);
        $c += $scaleCount->calif_true($answer[67]);
        $c += $scaleCount->calif_true($answer[68]);
        return $c;
    }
}
?>