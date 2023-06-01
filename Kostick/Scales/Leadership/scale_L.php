<?php
include_once('../scaleCount/scaleCount.php');
include_once('../Interfaces/scaleKostick.php');
class scale_L extends scaleKostick{

    function __construct(){
        parent::initialiate();
    }

    function scale($answer = array()){
        $count = 0;
        $count += $this->sc->calif_A($answer[11]);
        $count += $this->sc->calif_A($answer[21]);
        $count += $this->sc->calif_A($answer[31]);
        $count += $this->sc->calif_A($answer[41]);
        $count += $this->sc->calif_A($answer[51]);
        $count += $this->sc->calif_A($answer[61]);
        $count += $this->sc->calif_A($answer[71]);
        $count += $this->sc->calif_A($answer[81]);
        $count += $this->sc->calif_B($answer[80]);
        return $count;
    }
}
?>