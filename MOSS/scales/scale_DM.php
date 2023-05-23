<?php
include_once('scale.php');
include_once('../scalesCount/scaleCount.php');

//Capacidad de decisiones en las relaciones humanas
class scale_DM extends scale{

    function __construct(){
        parent::__construct();
    }

    function check()
    {
        $sc = new scaleCount();
        $count = 0;
        $count += $sc->calif_B($this->answer[3]);
        $count += $sc->calif_B($this->answer[5]);
        $count += $sc->calif_B($this->answer[19]);
        $count += $sc->calif_A($this->answer[22]);
        $count += $sc->calif_A($this->answer[28]);
        return $count;
    }
}

?>