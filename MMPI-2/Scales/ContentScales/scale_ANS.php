<?php
include_once('../scaleCount/scaleCount.php');
include_once('../template/scaleMMPI.php');
class scale_ANS extends scaleMMPI{
    function __construct(){
        parent::initialiate();
    }

    function scale(){
        $count = 0;
        $count += $this->sc->calif_True($this->answer[14]);
        $count += $this->sc->calif_True($this->answer[29]);
        $count += $this->sc->calif_True($this->answer[30]);
        $count += $this->sc->calif_True($this->answer[38]);
        $count += $this->sc->calif_False($this->answer[139]);
        $count += $this->sc->calif_True($this->answer[169]);
        $count += $this->sc->calif_True($this->answer[195]);
        $count += $this->sc->calif_False($this->answer[207]);
        $count += $this->sc->calif_False($this->answer[222]);
        $count += $this->sc->calif_True($this->answer[272]);
        $count += $this->sc->calif_True($this->answer[289]);
        $count += $this->sc->calif_True($this->answer[298]);
        $count += $this->sc->calif_True($this->answer[300]);
        $count += $this->sc->calif_True($this->answer[304]);
        $count += $this->sc->calif_True($this->answer[338]);
        $count += $this->sc->calif_False($this->answer[404]);
        $count += $this->sc->calif_True($this->answer[407]);
        $count += $this->sc->calif_True($this->answer[414]);
        $count += $this->sc->calif_True($this->answer[462]);
        $count += $this->sc->calif_True($this->answer[468]);
        $count += $this->sc->calif_False($this->answer[495]);
        $count += $this->sc->calif_True($this->answer[508]);
        $count += $this->sc->calif_True($this->answer[555]);
        return $count;
    }
}
?>