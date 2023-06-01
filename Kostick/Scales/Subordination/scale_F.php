<?php
include_once('../scaleCount/scaleCount.php');
include_once('../Interfaces/scaleKostick.php');
class scale_F extends scaleKostick{
    
    function __construct(){
        parent::initialiate();
    }

    function scale($answer = array()){
        $count = 0;
        $count += $this->sc->calif_A($answer[78]);
        $count += $this->sc->calif_A($answer[68]);
        $count += $this->sc->calif_A($answer[58]);
        $count += $this->sc->calif_A($answer[48]);
        $count += $this->sc->calif_A($answer[38]);
        $count += $this->sc->calif_A($answer[28]);
        $count += $this->sc->calif_A($answer[18]);
        $count += $this->sc->calif_A($answer[8]);
        $count += $this->sc->calif_B($answer[9]);
        return $count;
    }
}
?>