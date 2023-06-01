<?php
include_once('../scaleCount/scaleCount.php');
include_once('../template/scaleMMPI.php');
class scale_Do extends scaleMMPI{
    function __construct(){
        parent::initialiate();
    }

    function scale(){
        $count = 0;
        $count += $this->sc->calif_False($this->answer[30]);
        $count += $this->sc->calif_False($this->answer[51]);
        $count =+ $this->sc->calif_True($this->answer[54]);
        $count += $this->sc->calif_False($this->answer[69]);
        $count += $this->sc->calif_False($this->answer[72]);
        $count += $this->sc->calif_False($this->answer[81]);
        $count += $this->sc->calif_False($this->answer[171]);
        $count += $this->sc->calif_False($this->answer[200]);
        $count += $this->sc->calif_False($this->answer[201]);
        $count =+ $this->sc->calif_True($this->answer[206]);
        $count += $this->sc->calif_False($this->answer[219]);
        $count += $this->sc->calif_False($this->answer[226]);
        $count =+ $this->sc->calif_True($this->answer[231]);
        $count += $this->sc->calif_False($this->answer[242]);
        $count += $this->sc->calif_False($this->answer[243]);
        $count =+ $this->sc->calif_True($this->answer[244]);
        $count += $this->sc->calif_False($this->answer[274]);
        $count += $this->sc->calif_False($this->answer[308]);
        $count += $this->sc->calif_False($this->answer[324]);
        $count =+ $this->sc->calif_True($this->answer[385]);
        $count += $this->sc->calif_False($this->answer[398]);
        $count += $this->sc->calif_False($this->answer[411]);
        $count =+ $this->sc->calif_True($this->answer[415]);
        $count += $this->sc->calif_False($this->answer[469]);
        $count += $this->sc->calif_False($this->answer[472]);
        return $count;
    }
}
?>