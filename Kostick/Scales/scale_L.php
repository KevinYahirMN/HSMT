<?php
class scale_L implements Iscales{
    function scale($answer){
        $scaleCount = new scaleCount();
        $c = 0;
        $c += $scaleCount->calif_A($answer);
        return $c;
    }
}
?>