<?php
include_once('../scaleCount/scaleCount.php');
include_once('../Interfaces/scaleKostick.php');
class scale_G extends scaleKostick{

    function __construct(){
        parent::initialiate();
    }

    function scale($answer = array()){
        $count = 0;
        $count += $this->sc->calif_A($answer[0]);
        $count += $this->sc->calif_A($answer[10]);
        $count += $this->sc->calif_A($answer[20]);
        $count += $this->sc->calif_A($answer[30]);
        $count += $this->sc->calif_A($answer[40]);
        $count += $this->sc->calif_A($answer[50]);
        $count += $this->sc->calif_A($answer[60]);
        $count += $this->sc->calif_A($answer[70]);
        $count += $this->sc->calif_A($answer[80]);
        return $count;
    }
}
?>
