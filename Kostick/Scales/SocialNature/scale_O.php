<?php
include_once('../scaleCount/scaleCount.php');
include_once('../Interfaces/scaleKostick.php');
class scale_O extends scaleKostick{
    
    function __construct(){
        parent::initialiate();
    }

    function scale($answer = array()){
        $count = 0;
        $count += $this->sc->calif_A($answer[45]);
        $count += $this->sc->calif_A($answer[35]);
        $count += $this->sc->calif_A($answer[25]);
        $count += $this->sc->calif_A($answer[15]);
        $count += $this->sc->calif_A($answer[5]);
        $count += $this->sc->calif_B($answer[6]);
        $count += $this->sc->calif_B($answer[17]);
        $count += $this->sc->calif_B($answer[28]);
        $count += $this->sc->calif_B($answer[39]);
        return $count;
    }
}
?>
