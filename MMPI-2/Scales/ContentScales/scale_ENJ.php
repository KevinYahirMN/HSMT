<?php
include_once('../scaleCount/scaleCount.php');
include_once('../template/scaleMMPI.php');
class scale_ENJ extends scaleMMPI{
    function __construct(){
        parent::initialiate();
    }

    function scale(){
        $count = 0;
        $count += $this->sc->calif_True($this->answer[28]);
        $count += $this->sc->calif_True($this->answer[36]);
        $count += $this->sc->calif_True($this->answer[115]);
        $count += $this->sc->calif_True($this->answer[133]);
        $count += $this->sc->calif_True($this->answer[301]);
        $count += $this->sc->calif_True($this->answer[388]);
        $count += $this->sc->calif_True($this->answer[409]);
        $count += $this->sc->calif_True($this->answer[413]);
        $count += $this->sc->calif_True($this->answer[429]);
        $count += $this->sc->calif_True($this->answer[460]);
        $count += $this->sc->calif_True($this->answer[485]);
        $count += $this->sc->calif_True($this->answer[512]);
        $count += $this->sc->calif_True($this->answer[539]);
        $count += $this->sc->calif_True($this->answer[541]);
        $count += $this->sc->calif_True($this->answer[547]);
        $count += $this->sc->calif_False($this->answer[563]);
        return $count;
    }
}
?>