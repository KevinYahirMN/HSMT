<?php
include_once('../scaleCount/scaleCount.php');
include_once('../Interfaces/scaleKostick.php');
class scale_C extends scaleKostick{

    function __construct(){
        parent::initialiate();
    }

    function scale($answer = array()){
        $count = 0;
        $count += $this->sc->calif_A($answer[88]);
        $count += $this->sc->calif_B($answer[87]);
        $count += $this->sc->calif_B($answer[76]);
        $count += $this->sc->calif_B($answer[65]);
        $count += $this->sc->calif_B($answer[54]);
        $count += $this->sc->calif_B($answer[43]);
        $count += $this->sc->calif_B($answer[32]);
        $count += $this->sc->calif_B($answer[21]);
        $count += $this->sc->calif_B($answer[10]);
        return $count;
    }
}
?>