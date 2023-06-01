<?php
include_once('../scaleCount/scaleCount.php');
include_once('../Interfaces/scaleKostick.php');
class scale_X extends scaleKostick{
    
    function __construct(){
        parent::initialiate();
    }

    function scale($answer = array()){
        $count = 0;
        $count += $this->sc->calif_A($answer[23]);
        $count += $this->sc->calif_A($answer[13]);
        $count += $this->sc->calif_A($answer[3]);
        $count += $this->sc->calif_B($answer[4]);
        $count += $this->sc->calif_B($answer[15]);
        $count += $this->sc->calif_B($answer[26]);
        $count += $this->sc->calif_B($answer[37]);
        $count += $this->sc->calif_B($answer[48]);
        $count += $this->sc->calif_B($answer[59]);
        return $count;
    }
}
?>
