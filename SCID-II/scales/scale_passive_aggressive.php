<?php
include_once('../scaleCount/scaleCount.php');
include_once('scaleSCID.php');
class scale_passive_aggressive extends scaleSCID{

    function __construct(){
        parent::initialiate();
    }

    function scale(){
        $count = 0;
        $count += $this->sc->calif_true($this->answer[26]);
        $count += $this->sc->calif_true($this->answer[27]);
        $count += $this->sc->calif_true($this->answer[28]);
        $count += $this->sc->calif_true($this->answer[29]);
        $count += $this->sc->calif_true($this->answer[30]);
        $count += $this->sc->calif_true($this->answer[31]);
        $count += $this->sc->calif_true($this->answer[32]);
        $count += $this->sc->calif_true($this->answer[33]);
        $count += $this->sc->calif_true($this->answer[34]);
        return $count;
    }
}
?>