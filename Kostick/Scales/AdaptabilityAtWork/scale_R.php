<?php
include_once('../scaleCount/scaleCount.php');
include_once('../Interfaces/scaleKostick.php');
class scale_R extends scaleKostick{

    function __construct(){
        parent::initialiate();
    }

    function scale($answer = array()){
        $count = 0;
        $count += $this->sc->calif_A($answer[66]);
        $count += $this->sc->calif_A($answer[76]);
        $count += $this->sc->calif_A($answer[86]);
        $count += $this->sc->calif_B($answer[85]);
        $count += $this->sc->calif_B($answer[74]);
        $count += $this->sc->calif_B($answer[63]);
        $count += $this->sc->calif_B($answer[52]);
        $count += $this->sc->calif_B($answer[41]);
        $count += $this->sc->calif_B($answer[30]);
        return $count;
    }
}
?>