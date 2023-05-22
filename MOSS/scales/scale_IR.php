<?php
include_once('../interfaces/IscaleMOSS.php');
include_once('../scalesCount/scaleCount.php');

class scale_IR implements IscaleMoss{

    function scale($answer = array())
    {
        $sc = new scaleCount();
        $count = 0;
        $count = $sc->calif_C($answer[0]);
        $count = $sc->calif_C($answer[9]);
        $count = $sc->calif_A($answer[10]);
        $count = $sc->calif_D($answer[12]);
        $count = $sc->calif_B($answer[24]);
        return $count;
    }
}

?>