<?php
include_once('../scaleCount/scaleCount.php');
include_once('../Interfaces/scaleKostick.php');
class scale_V extends scaleKostick{

    function __construct(){
        parent::initialiate();
    }

    function scale($answer = array()){
        $count = 0;
        $count += $this->sc->calif_A($answer[44]);
        $count += $this->sc->calif_A($answer[54]);
        $count += $this->sc->calif_A($answer[64]);
        $count += $this->sc->calif_A($answer[74]);
        $count += $this->sc->calif_A($answer[84]);
        $count += $this->sc->calif_B($answer[83]);
        $count += $this->sc->calif_B($answer[72]);
        $count += $this->sc->calif_B($answer[61]);
        $count += $this->sc->calif_B($answer[50]);
        return $count;
    }
}
?>