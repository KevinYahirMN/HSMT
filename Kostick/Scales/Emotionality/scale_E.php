<?php
include_once('../scaleCount/scaleCount.php');
include_once('../Interfaces/scaleKostick.php');
class scale_E extends scaleKostick{
    
    function __construct(){
        parent::initialiate();
    }

    function scale($answer = array()){
        $count = 0;
        $count += $this->sc->calif_B($answer[88]);
        $count += $this->sc->calif_B($answer[77]);
        $count += $this->sc->calif_B($answer[66]);
        $count += $this->sc->calif_B($answer[55]);
        $count += $this->sc->calif_B($answer[44]);
        $count += $this->sc->calif_B($answer[33]);
        $count += $this->sc->calif_B($answer[22]);
        $count += $this->sc->calif_B($answer[11]);
        $count += $this->sc->calif_B($answer[0]);
        return $count;
    }
}
?>
