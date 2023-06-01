<?php
include_once('../scaleCount/scaleCount.php');
include_once('../Interfaces/scaleKostick.php');
class scale_Z extends scaleKostick{

    function __construct(){
        parent::initialiate();
    }

    function scale($answer = array()){
        $count = 0;
        $count += $this->sc->calif_A($answer[56]);
        $count += $this->sc->calif_A($answer[46]);
        $count += $this->sc->calif_A($answer[36]);
        $count += $this->sc->calif_A($answer[26]);
        $count += $this->sc->calif_A($answer[16]);
        $count += $this->sc->calif_A($answer[6]);
        $count += $this->sc->calif_B($answer[7]);
        $count += $this->sc->calif_B($answer[18]);
        $count += $this->sc->calif_B($answer[29]);
        return $count;
    }
}
?>
