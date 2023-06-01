<?php
include_once('../scaleCount/scaleCount.php');
include_once('../Interfaces/scaleKostick.php');
class scale_T extends scaleKostick{

    function __construct(){
        parent::initialiate();
    }

    function scale($answer = array()){
        $count = 0;
        $count += $this->sc->calif_A($answer[33]);
        $count += $this->sc->calif_A($answer[43]);
        $count += $this->sc->calif_A($answer[53]);
        $count += $this->sc->calif_A($answer[63]);
        $count += $this->sc->calif_A($answer[73]);
        $count += $this->sc->calif_A($answer[83]);
        $count += $this->sc->calif_B($answer[82]);
        $count += $this->sc->calif_B($answer[71]);
        $count += $this->sc->calif_B($answer[60]);
        return $count;
    }
}
?>