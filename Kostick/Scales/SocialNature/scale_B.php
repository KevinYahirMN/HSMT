<?php
include_once('../scaleCount/scaleCount.php');
include_once('../Interfaces/scaleKostick.php');
class scale_B extends scaleKostick{
    
    function __construct(){
        parent::initialiate();
    }

    function scale($answer = array()){
        $count = 0;
        $count += $this->sc->calif_A($answer[34]);
        $count += $this->sc->calif_A($answer[24]);
        $count += $this->sc->calif_A($answer[14]);
        $count += $this->sc->calif_A($answer[4]);
        $count += $this->sc->calif_B($answer[5]);
        $count += $this->sc->calif_B($answer[16]);
        $count += $this->sc->calif_B($answer[27]);
        $count += $this->sc->calif_B($answer[38]);
        $count += $this->sc->calif_B($answer[49]);
        return $count;
    }
}
?>
