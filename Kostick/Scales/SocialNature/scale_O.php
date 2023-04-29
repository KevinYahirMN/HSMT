<?php
include('../scaleCount.php');
class scale_O{
    function scale($answer){
        $scaleCount = new scaleCount();
        $c = 0;
        $c += $scaleCount->calif_A($answer[45]);
        $c += $scaleCount->calif_A($answer[35]);
        $c += $scaleCount->calif_A($answer[25]);
        $c += $scaleCount->calif_A($answer[15]);
        $c += $scaleCount->calif_A($answer[5]);
        $c += $scaleCount->calif_B($answer[6]);
        $c += $scaleCount->calif_B($answer[17]);
        $c += $scaleCount->calif_B($answer[28]);
        $c += $scaleCount->calif_B($answer[39]);
        return $c;
    }
}
?>
