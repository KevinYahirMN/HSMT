<?php
include_once('scale.php');
include_once('../scalesCount/scaleCount.php');

class scale_CS extends scale{

    function __construct(){
        parent::__construct();
    }

    function check()
    {
        $sc = new scaleCount();
        $count = 0;
        $count += $sc->calif_B($this->answer[4]);
        $count += $sc->calif_B($this->answer[7]);
        $count += $sc->calif_D($this->answer[14]);
        $count += $sc->calif_B($this->answer[16]);
        $count += $sc->calif_A($this->answer[21]);
        $count += $sc->calif_C($this->answer[27]);
        return $count;
    }
}

?>