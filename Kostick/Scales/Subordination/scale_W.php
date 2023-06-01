<?php
include_once('../scaleCount/scaleCount.php');
include_once('../Interfaces/scaleKostick.php');
class scale_W extends scaleKostick{
    
    function __construct(){
        parent::initialiate();
    }

    function scale($answer = array()){
        $count = 0;
        $count += $this->sc->calif_A($answer[89]);
        $count += $this->sc->calif_A($answer[20]);
        $count += $this->sc->calif_A($answer[79]);
        $count += $this->sc->calif_A($answer[69]);
        $count += $this->sc->calif_A($answer[59]);
        $count += $this->sc->calif_A($answer[49]);
        $count += $this->sc->calif_A($answer[39]);
        $count += $this->sc->calif_A($answer[29]);
        $count += $this->sc->calif_A($answer[19]);
        $count += $this->sc->calif_A($answer[9]);
        return $count;
    }
}
?>