<?php
include_once('../interfaces/IscaleMOSS.php');
include_once('../scalesCount/scaleCount.php');

class scale_DM implements IscaleMoss{

    function scale($answer = array())
    {
        $sc = new scaleCount();
        $count = 0;
        $count = $sc->calif_B($answer[3]);
        $count = $sc->calif_B($answer[5]);
        $count = $sc->calif_B($answer[19]);
        $count = $sc->calif_A($answer[22]);
        $count = $sc->calif_A($answer[28]);
        return $count;
    }
}

?>