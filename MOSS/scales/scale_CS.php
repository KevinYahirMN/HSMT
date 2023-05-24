<?php
include_once('scale.php');
include_once('../scalesCount/scaleCount.php');

//Sentido común y tacto en las relaciones interpersonales
class scale_CS extends scale{

    function __construct(){
        parent::initialiate();
    }

    function check()
    {
        $count = 0;
        $count += $this->sc->calif_B($this->answer[4]);
        $count += $this->sc->calif_B($this->answer[7]);
        $count += $this->sc->calif_D($this->answer[14]);
        $count += $this->sc->calif_B($this->answer[16]);
        $count += $this->sc->calif_A($this->answer[21]);
        $count += $this->sc->calif_C($this->answer[27]);
        return $count;
    }
}

?>