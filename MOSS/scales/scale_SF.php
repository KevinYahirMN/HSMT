<?php
include_once('scale.php');
include_once('../scalesCount/scaleCount.php');

//Habilidad de supervison
class scale_SF extends scale{

    function __construct(){
        parent::__construct();
    }

    function check()
    {
        $sc = new scaleCount();
        $count = 0;
        $count += $sc->calif_B($this->answer[1]);
        $count += $sc->calif_D($this->answer[2]);
        $count += $sc->calif_D($this->answer[15]);
        $count += $sc->calif_D($this->answer[17]);
        $count += $sc->calif_D($this->answer[23]);
        $count += $sc->calif_D($this->answer[29]);
        return $count;
    }
}

?>