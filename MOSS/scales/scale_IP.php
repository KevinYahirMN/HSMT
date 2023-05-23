<?php
include_once('scale.php');
include_once('../scalesCount/scaleCount.php');

//Capacidad de evaluacion de problemas interpersonales
class scale_IP extends scale{

    function __construct(){
        parent::__construct();
    }

    function check()
    {
        $sc = new scaleCount();
        $count = 0;
        $count += $sc->calif_B($this->answer[6]);
        $count += $sc->calif_C($this->answer[8]);
        $count += $sc->calif_C($this->answer[11]);
        $count += $sc->calif_D($this->answer[13]);
        $count += $sc->calif_C($this->answer[18]);
        $count += $sc->calif_A($this->answer[20]);
        $count += $sc->calif_C($this->answer[25]);
        $count += $sc->calif_A($this->answer[26]);
        return $count;
    }
}

?>