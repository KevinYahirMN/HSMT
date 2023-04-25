<?php
class scale_E implements Iscales{
    function scale($answer){
        $scaleCount = new scaleCount();
        $c = 0;
        $c += $scaleCount->calif_A($answer[56]);
        $c += $scaleCount->calif_A($answer[46]);
        $c += $scaleCount->calif_A($answer[36]);
        $c += $scaleCount->calif_A($answer[26]);
        $c += $scaleCount->calif_A($answer[16]);
        $c += $scaleCount->calif_A($answer[6]);
        $c += $scaleCount->calif_B($answer[7]);
        $c += $scaleCount->calif_B($answer[18]);
        $c += $scaleCount->calif_B($answer[29]);
        return $c;
    }
}
?>
