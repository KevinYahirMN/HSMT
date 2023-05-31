<?php
include_once('scale.php');
include_once('../scalesCount/scaleCount.php');

//Habilidad de supervison
class scale_SF extends scale{

    function __construct(){
        parent::initialiate();
    }

    function check()
    {
        $count = 0;
        $count += $this->sc->calif_B($this->answer[1]);
        $count += $this->sc->calif_D($this->answer[2]);
        $count += $this->sc->calif_D($this->answer[15]);
        $count += $this->sc->calif_D($this->answer[17]);
        $count += $this->sc->calif_D($this->answer[23]);
        $count += $this->sc->calif_D($this->answer[29]);
        return $count;
    }
}

?>