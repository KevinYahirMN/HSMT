<?php
include_once('../scaleCount/scaleCount.php');
include_once('../Interfaces/scaleKostick.php');
class scale_P extends scaleKostick{

    function __construct(){
        parent::initialiate();
    }

    function scale($answer = array()){
        $scaleCount = new scaleCount();
        $count = 0;
        $count += $this->sc->calif_A($answer[12]);
        $count += $this->sc->calif_A($answer[2]);
        $count += $this->sc->calif_B($answer[3]);
        $count += $this->sc->calif_B($answer[14]);
        $count += $this->sc->calif_B($answer[25]);
        $count += $this->sc->calif_B($answer[36]);
        $count += $this->sc->calif_B($answer[47]);
        $count += $this->sc->calif_B($answer[58]);
        $count += $this->sc->calif_B($answer[69]);
        return $count;
    }
}
?>