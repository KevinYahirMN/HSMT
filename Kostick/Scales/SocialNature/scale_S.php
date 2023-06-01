<?php
include_once('../scaleCount/scaleCount.php');
include_once('../Interfaces/scaleKostick.php');
class scale_S extends scaleKostick{
    
    function __construct(){
        parent::initialiate();
    }

    function scale($answer = array()){
        $count = 0;
        $count += $this->sc->calif_A($answer[55]);
        $count += $this->sc->calif_A($answer[65]);
        $count += $this->sc->calif_A($answer[75]);
        $count += $this->sc->calif_A($answer[85]);
        $count += $this->sc->calif_B($answer[84]);
        $count += $this->sc->calif_B($answer[73]);
        $count += $this->sc->calif_B($answer[62]);
        $count += $this->sc->calif_B($answer[51]);
        $count += $this->sc->calif_B($answer[40]);
        return $count;
    }
}
?>
