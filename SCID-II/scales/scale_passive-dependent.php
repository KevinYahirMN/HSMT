<?php
include_once('../scaleCount/scaleCount.php');
include_once('scaleSCID.php');
class scale_passive_dependent extends scaleSCID{

    function __construct(){
        parent::initialiate();
    }

    function scale(){
        $count = 0;
        $count += $this->sc->calif_true($this->answer[35]);
        $count += $this->sc->calif_true($this->answer[36]);
        $count += $this->sc->calif_true($this->answer[37]);
        $count += $this->sc->calif_true($this->answer[38]);
        $count += $this->sc->calif_true($this->answer[39]);
        $count += $this->sc->calif_true($this->answer[40]);
        $count += $this->sc->calif_true($this->answer[41]);
        $count += $this->sc->calif_true($this->answer[42]);
        $count += $this->sc->calif_true($this->answer[43]);
        $count += $this->sc->calif_true($this->answer[44]);
        $count += $this->sc->calif_true($this->answer[45]);
        $count += $this->sc->calif_true($this->answer[46]);
        $count += $this->sc->calif_true($this->answer[47]);
        return $count;
    }
}
?>