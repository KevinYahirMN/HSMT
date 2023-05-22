<?php
include_once('../interfaces/IscaleMOSS.php');
include_once('../scalesCount/scaleCount.php');

class scale_IP implements IscaleMoss{

    function scale($answer = array())
    {
        $sc = new scaleCount();
        $count = 0;
        $count = $sc->calif_B($answer[6]);
        $count = $sc->calif_C($answer[8]);
        $count = $sc->calif_C($answer[11]);
        $count = $sc->calif_D($answer[13]);
        $count = $sc->calif_C($answer[18]);
        $count = $sc->calif_A($answer[20]);
        $count = $sc->calif_C($answer[25]);
        $count = $sc->calif_A($answer[26]);
        return $count;
    }
}

?>