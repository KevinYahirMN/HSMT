<?php
include_once('../scaleCount/scaleCount.php');
include_once('../Interfaces/scaleKostick.php');
class scale_D extends scaleKostick{

    function __construct(){
        parent::initialiate();
    }

    function scale($answer = array()){
        $count = 0;
        $count += $this->sc->calif_A($answer[77]);
        $count += $this->sc->calif_A($answer[87]);
        $count += $this->sc->calif_B($answer[86]);
        $count += $this->sc->calif_B($answer[75]);
        $count += $this->sc->calif_B($answer[64]);
        $count += $this->sc->calif_B($answer[53]);
        $count += $this->sc->calif_B($answer[42]);
        $count += $this->sc->calif_B($answer[31]);
        $count += $this->sc->calif_B($answer[20]);
        return $count;
    }
}
?>