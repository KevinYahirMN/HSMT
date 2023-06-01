<?php
include_once('../scaleCount/scaleCount.php');
include_once('../Interfaces/scaleKostick.php');
class scale_N extends scaleKostick{
    
    function __construct(){
        parent::initialiate();
    }

    function scale($answer = array()){
        $count = 0;
        $count += $this->sc->calif_B($answer[1]);
        $count += $this->sc->calif_B($answer[12]);
        $count += $this->sc->calif_B($answer[23]);
        $count += $this->sc->calif_B($answer[34]);
        $count += $this->sc->calif_B($answer[45]);
        $count += $this->sc->calif_B($answer[56]);
        $count += $this->sc->calif_B($answer[67]);
        $count += $this->sc->calif_B($answer[78]);
        $count += $this->sc->calif_B($answer[89]);
        return $count;
    }
}
?>