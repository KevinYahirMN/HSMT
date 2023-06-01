<?php
include_once('../scaleCount/scaleCount.php');
include_once('scaleSCID.php');
class scale_evitation extends scaleSCID{

    function __construct(){
        parent::initialiate();
    }

    function scale(){
        $count = 0;
        $count += $this->sc->calif_true($this->answer[0]);
        $count += $this->sc->calif_true($this->answer[1]);
        $count += $this->sc->calif_true($this->answer[2]);
        $count += $this->sc->calif_true($this->answer[3]);
        $count += $this->sc->calif_true($this->answer[4]);
        $count += $this->sc->calif_true($this->answer[5]);
        $count += $this->sc->calif_true($this->answer[6]);
        return $count;
    }
}
?>