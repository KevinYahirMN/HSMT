<?php
include_once('../scaleCount/scaleCount.php');
include_once('scaleSCID.php');
class scale_antisocial extends scaleSCID{

    function __construct(){
        parent::initialiate();
    }

    function scale(){
        $count = 0;
        $count += $this->sc->calif_true($this->answer[108]);
        $count += $this->sc->calif_true($this->answer[109]);
        $count += $this->sc->calif_true($this->answer[110]);
        $count += $this->sc->calif_true($this->answer[111]);
        $count += $this->sc->calif_true($this->answer[112]);
        $count += $this->sc->calif_true($this->answer[113]);
        $count += $this->sc->calif_true($this->answer[114]);
        $count += $this->sc->calif_true($this->answer[115]);
        $count += $this->sc->calif_true($this->answer[116]);
        $count += $this->sc->calif_true($this->answer[117]);
        $count += $this->sc->calif_true($this->answer[118]);
        $count += $this->sc->calif_true($this->answer[119]);
        return $count;
    }
}
?>