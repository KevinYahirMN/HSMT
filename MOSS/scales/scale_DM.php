<?php
include_once('scale.php');
include_once('../scalesCount/scaleCount.php');

//Capacidad de decisiones en las relaciones humanas
class scale_DM extends scale{

    function __construct(){
        parent::initialiate();
    }

    function check()
    {
        $count = 0;
        $count += $this->sc->calif_B($this->answer[3]);
        $count += $this->sc->calif_B($this->answer[5]);
        $count += $this->sc->calif_B($this->answer[19]);
        $count += $this->sc->calif_A($this->answer[22]);
        $count += $this->sc->calif_A($this->answer[28]);
        return $count;
    }
}

?>