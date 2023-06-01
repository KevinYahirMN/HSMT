<?php
include_once('../scaleCount/scaleCount.php');
include_once('../Interfaces/scaleKostick.php');
class scale_K extends scaleKostick{
        
    function __construct(){
        parent::initialiate();
    }

    function scale($answer = array()){
        $count = 0;
        $count += $this->sc->calif_A($answer[67]);
        $count += $this->sc->calif_A($answer[57]);
        $count += $this->sc->calif_A($answer[47]);
        $count += $this->sc->calif_A($answer[37]);
        $count += $this->sc->calif_A($answer[27]);
        $count += $this->sc->calif_A($answer[17]);
        $count += $this->sc->calif_A($answer[7]);
        $count += $this->sc->calif_B($answer[8]);
        $count += $this->sc->calif_B($answer[19]);
        return $count;
    }
}
?>
