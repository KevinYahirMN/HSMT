<?php
include_once('../interfaces/IscaleMOSS.php');
include_once('../scalesCount/scaleCount.php');

class scale_CS implements IscaleMoss{

    function scale($answer = array())
    {
        $sc = new scaleCount();
        $count = 0;
        $count = $sc->calif_B($answer[4]);
        $count = $sc->calif_B($answer[7]);
        $count = $sc->calif_D($answer[14]);
        $count = $sc->calif_B($answer[16]);
        $count = $sc->calif_A($answer[21]);
        $count = $sc->calif_C($answer[27]);
        return $count;
    }
}

?>