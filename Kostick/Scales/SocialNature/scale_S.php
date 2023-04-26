<?php
class scale_G implements Iscales{
    function scale($answer){
        $scaleCount = new scaleCount();
        $c = 0;
        $c += $scaleCount->calif_A($answer[55]);
        $c += $scaleCount->calif_A($answer[65]);
        $c += $scaleCount->calif_A($answer[75]);
        $c += $scaleCount->calif_A($answer[85]);
        $c += $scaleCount->calif_B($answer[84]);
        $c += $scaleCount->calif_B($answer[73]);
        $c += $scaleCount->calif_B($answer[62]);
        $c += $scaleCount->calif_B($answer[51]);
        $c += $scaleCount->calif_B($answer[40]);
        return $c;
    }
}
?>
