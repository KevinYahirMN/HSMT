<?php
class scale_D implements Iscales{
    function scale($answer){
        $scaleCount = new scaleCount();
        $c = 0;
        $c += $scaleCount->calif_A($answer[77]);
        $c += $scaleCount->calif_A($answer[87]);
        $c += $scaleCount->calif_B($answer[86]);
        $c += $scaleCount->calif_B($answer[75]);
        $c += $scaleCount->calif_B($answer[64]);
        $c += $scaleCount->calif_B($answer[53]);
        $c += $scaleCount->calif_B($answer[42]);
        $c += $scaleCount->calif_B($answer[31]);
        $c += $scaleCount->calif_B($answer[20]);
        return $c;
    }
}
?>