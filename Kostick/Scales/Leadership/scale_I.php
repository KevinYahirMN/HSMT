<?php
include_once('../scaleCount/scaleCount.php');
include_once('../Interfaces/IScales.php');
class scale_I implements IScales{
    function scale($answer){
        $scaleCount = new scaleCount();
        $c = 0;
        $c += $scaleCount->calif_A($answer[22]);
        $c += $scaleCount->calif_A($answer[32]);
        $c += $scaleCount->calif_A($answer[42]);
        $c += $scaleCount->calif_A($answer[52]);
        $c += $scaleCount->calif_A($answer[62]);
        $c += $scaleCount->calif_A($answer[72]);
        $c += $scaleCount->calif_A($answer[82]);
        $c += $scaleCount->calif_B($answer[81]);
        $c += $scaleCount->calif_B($answer[70]);
        return $c;
    }
}
?>