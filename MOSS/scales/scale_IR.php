<?php
include_once('scale.php');
include_once('../scalesCount/scaleCount.php');

//Habilidad para establecer relaciones interpersonales
class scale_IR extends scale{

    function __construct(){
        parent::initialiate();
    }

    function check()
    {
        $sc = new scaleCount();
        $count = 0;
        $count += $this->sc->calif_C($this->answer[0]);
        $count += $this->sc->calif_C($this->answer[9]);
        $count += $this->sc->calif_A($this->answer[10]);
        $count += $this->sc->calif_D($this->answer[12]);
        $count += $this->sc->calif_B($this->answer[24]);
        return $count;
    }
}

?>