<?php
include_once('scale.php');
include_once('../scalesCount/scaleCount.php');

class scale_IR extends scale{

    function __construct(){
        parent::__construct();
    }

    function check()
    {
        $sc = new scaleCount();
        $count = 0;
        $count += $sc->calif_C($this->answer[0]);
        $count += $sc->calif_C($this->answer[9]);
        $count += $sc->calif_A($this->answer[10]);
        $count += $sc->calif_D($this->answer[12]);
        $count += $sc->calif_B($this->answer[24]);
        return $count;
    }
}

?>