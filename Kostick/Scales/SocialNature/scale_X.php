<?php
include_once('../scaleCount/scaleCount.php');
class scale_X{
    function scale($answer){
        $scaleCount = new scaleCount();
        $c = 0;
        $c += $scaleCount->calif_A($answer[23]);
        $c += $scaleCount->calif_A($answer[13]);
        $c += $scaleCount->calif_A($answer[3]);
        $c += $scaleCount->calif_B($answer[4]);
        $c += $scaleCount->calif_B($answer[15]);
        $c += $scaleCount->calif_B($answer[26]);
        $c += $scaleCount->calif_B($answer[37]);
        $c += $scaleCount->calif_B($answer[48]);
        $c += $scaleCount->calif_B($answer[59]);
        return $c;
    }
}
?>
