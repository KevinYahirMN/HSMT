<?php
include('../scaleCount.php');
class scale_V{
    function scale($answer){
        $scaleCount = new scaleCount();
        $c = 0;
        $c += $scaleCount->calif_A($answer[44]);
        $c += $scaleCount->calif_A($answer[54]);
        $c += $scaleCount->calif_A($answer[64]);
        $c += $scaleCount->calif_A($answer[74]);
        $c += $scaleCount->calif_A($answer[84]);
        $c += $scaleCount->calif_B($answer[83]);
        $c += $scaleCount->calif_B($answer[72]);
        $c += $scaleCount->calif_B($answer[61]);
        $c += $scaleCount->calif_B($answer[50]);
        return $c;
    }
}
?>