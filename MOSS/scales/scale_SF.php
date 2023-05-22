<?php
include_once('../interfaces/IscaleMOSS.php');
include_once('../scalesCount/scaleCount.php');

class scale_SF implements IscaleMoss{

    function scale($answer = array())
    {
        $sc = new scaleCount();
        $count = 0;
        $count = $sc->calif_B($answer[1]);
        $count = $sc->calif_D($answer[2]);
        $count = $sc->calif_D($answer[15]);
        $count = $sc->calif_D($answer[17]);
        $count = $sc->calif_D($answer[23]);
        $count = $sc->calif_D($answer[29]);
        return $count;
    }
}

?>