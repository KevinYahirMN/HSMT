<?php
include_once('scale.php');
include_once('../scalesCount/scaleCount.php');

//Capacidad de evaluacion de problemas interpersonales
class scale_IP extends scale{

    function __construct(){
        parent::initialiate();
    }

    function check()
    {
        $count = 0;
        $count += $this->sc->calif_B($this->answer[6]);
        $count += $this->sc->calif_C($this->answer[8]);
        $count += $this->sc->calif_C($this->answer[11]);
        $count += $this->sc->calif_D($this->answer[13]);
        $count += $this->sc->calif_C($this->answer[18]);
        $count += $this->sc->calif_A($this->answer[20]);
        $count += $this->sc->calif_C($this->answer[25]);
        $count += $this->sc->calif_A($this->answer[26]);
        return $count;
    }
}

?>