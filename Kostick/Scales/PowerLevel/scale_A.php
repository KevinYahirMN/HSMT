<?php
include('../scaleCount.php');
class scale_A{
    function scale($answer){
        $scaleCount = new scaleCount();
        $c = 0;
        $c += $scaleCount->calif_A($answer[1]);
        $c += $scaleCount->calif_B($answer[2]);
        $c += $scaleCount->calif_B($answer[13]);
        $c += $scaleCount->calif_B($answer[24]);
        $c += $scaleCount->calif_B($answer[35]);
        $c += $scaleCount->calif_B($answer[46]);
        $c += $scaleCount->calif_B($answer[57]);
        $c += $scaleCount->calif_B($answer[68]);
        $c += $scaleCount->calif_B($answer[79]);
        return $c;
    }
}
?>
