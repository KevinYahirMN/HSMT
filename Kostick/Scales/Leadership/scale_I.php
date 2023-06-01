<?php
include_once('../scaleCount/scaleCount.php');
include_once('../Interfaces/scaleKostick.php');
class scale_I extends scaleKostick{
                
    function __construct(){
        parent::initialiate();
    }
    
    function scale($answer = array()){
        $count = 0;
        $count += $this->sc->calif_A($answer[22]);
        $count += $this->sc->calif_A($answer[32]);
        $count += $this->sc->calif_A($answer[42]);
        $count += $this->sc->calif_A($answer[52]);
        $count += $this->sc->calif_A($answer[62]);
        $count += $this->sc->calif_A($answer[72]);
        $count += $this->sc->calif_A($answer[82]);
        $count += $this->sc->calif_B($answer[81]);
        $count += $this->sc->calif_B($answer[70]);
        return $count;
    }
}
?>