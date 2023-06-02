<?php
include_once('../scaleCount/scaleCount.php');
include_once('../template/scaleMMPI.php');
class scale_FAM extends scaleMMPI{
    function __construct(){
        parent::initialiate();
    }

    function scale(){
        $count = 0;
        $count += $this->sc->calif_True($this->answer[20]);
        $count += $this->sc->calif_True($this->answer[53]);
        $count += $this->sc->calif_False($this->answer[82]);
        $count += $this->sc->calif_False($this->answer[124]);
        $count += $this->sc->calif_True($this->answer[144]);
        $count += $this->sc->calif_True($this->answer[189]);
        $count += $this->sc->calif_True($this->answer[194]);
        $count += $this->sc->calif_True($this->answer[204]);
        $count += $this->sc->calif_False($this->answer[216]);
        $count += $this->sc->calif_True($this->answer[255]);
        $count += $this->sc->calif_True($this->answer[291]);
        $count += $this->sc->calif_True($this->answer[299]);
        $count += $this->sc->calif_True($this->answer[322]);
        $count += $this->sc->calif_True($this->answer[377]);
        $count += $this->sc->calif_True($this->answer[378]);
        $count += $this->sc->calif_True($this->answer[381]);
        $count += $this->sc->calif_False($this->answer[382]);
        $count += $this->sc->calif_True($this->answer[412]);
        $count += $this->sc->calif_True($this->answer[448]);
        $count += $this->sc->calif_False($this->answer[454]);
        $count += $this->sc->calif_True($this->answer[477]);
        $count += $this->sc->calif_True($this->answer[542]);
        $count += $this->sc->calif_True($this->answer[549]);
        $count += $this->sc->calif_True($this->answer[562]);
        $count += $this->sc->calif_True($this->answer[566]);
        return $count;
    }
}
?>