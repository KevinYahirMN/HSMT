<?php
include_once('../scaleCount/scaleCount.php');
include_once('../Interfaces/scaleKostick.php');
class scale_A extends scaleKostick{

    function __construct(){
        parent::initialiate();
    }
    
    function scale($answer = array()){
        $count = 0;
        $count += $this->sc->calif_A($answer[1]);
        $count += $this->sc->calif_B($answer[2]);
        $count += $this->sc->calif_B($answer[13]);
        $count += $this->sc->calif_B($answer[24]);
        $count += $this->sc->calif_B($answer[35]);
        $count += $this->sc->calif_B($answer[46]);
        $count += $this->sc->calif_B($answer[57]);
        $count += $this->sc->calif_B($answer[68]);
        $count += $this->sc->calif_B($answer[79]);
        return $count;
    }
}
?>
