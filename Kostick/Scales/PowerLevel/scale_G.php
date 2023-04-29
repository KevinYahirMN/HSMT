<?php
include('../scaleCount.php');
class scale_G{
    function scale($answer){
        $scaleCount = new scaleCount();
        $c = 0;
        $c += $scaleCount->calif_A($answer[0]);
        $c += $scaleCount->calif_A($answer[10]);
        $c += $scaleCount->calif_A($answer[20]);
        $c += $scaleCount->calif_A($answer[30]);
        $c += $scaleCount->calif_A($answer[40]);
        $c += $scaleCount->calif_A($answer[50]);
        $c += $scaleCount->calif_A($answer[60]);
        $c += $scaleCount->calif_A($answer[70]);
        $c += $scaleCount->calif_A($answer[80]);
        return $c;
    }
}
?>
