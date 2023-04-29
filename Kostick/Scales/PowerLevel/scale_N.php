<?php
include_once('../scaleCount/scaleCount.php');
class scale_N{
    function scale($answer){
        $scaleCount = new scaleCount();
        $c = 0;
        $c += $scaleCount->calif_B($answer[1]);
        $c += $scaleCount->calif_B($answer[12]);
        $c += $scaleCount->calif_B($answer[23]);
        $c += $scaleCount->calif_B($answer[34]);
        $c += $scaleCount->calif_B($answer[45]);
        $c += $scaleCount->calif_B($answer[56]);
        $c += $scaleCount->calif_B($answer[67]);
        $c += $scaleCount->calif_B($answer[78]);
        $c += $scaleCount->calif_B($answer[89]);
        return $c;
    }
}
?>