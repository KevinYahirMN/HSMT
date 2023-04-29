<?php
include('../scaleCount.php');
class scale_K{
    function scale($answer){
        $scaleCount = new scaleCount();
        $c = 0;
        $c += $scaleCount->calif_A($answer[67]);
        $c += $scaleCount->calif_A($answer[57]);
        $c += $scaleCount->calif_A($answer[47]);
        $c += $scaleCount->calif_A($answer[37]);
        $c += $scaleCount->calif_A($answer[27]);
        $c += $scaleCount->calif_A($answer[17]);
        $c += $scaleCount->calif_A($answer[7]);
        $c += $scaleCount->calif_B($answer[8]);
        $c += $scaleCount->calif_B($answer[19]);
        return $c;
    }
}
?>
