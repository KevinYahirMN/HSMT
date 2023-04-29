<?php
include_once('../scaleCount/scaleCount.php');
class scale_T{
    function scale($answer){
        $scaleCount = new scaleCount();
        $c = 0;
        $c += $scaleCount->calif_A($answer[33]);
        $c += $scaleCount->calif_A($answer[43]);
        $c += $scaleCount->calif_A($answer[53]);
        $c += $scaleCount->calif_A($answer[63]);
        $c += $scaleCount->calif_A($answer[73]);
        $c += $scaleCount->calif_A($answer[83]);
        $c += $scaleCount->calif_B($answer[82]);
        $c += $scaleCount->calif_B($answer[71]);
        $c += $scaleCount->calif_B($answer[60]);
        return $c;
    }
}
?>