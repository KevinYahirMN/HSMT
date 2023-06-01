<?php
include_once('../scaleCount/scaleCount.php');
include_once('../template/scaleMMPI.php');
class scale_Rs extends scaleMMPI{
    function __construct(){
        parent::initialiate();
    }

    function scale(){
        $count = 0;
        $count =+ $this->sc->calif_False($this->answer[6]);
        $count =+ $this->sc->calif_False($this->answer[26]);
        $count =+ $this->sc->calif_False($this->answer[28]);
        $count =+ $this->sc->calif_False($this->answer[31]);
        $count =+ $this->sc->calif_False($this->answer[83]);
        $count += $this->sc->calif_True($this->answer[99]);
        $count =+ $this->sc->calif_False($this->answer[102]);
        $count =+ $this->sc->calif_False($this->answer[104]);
        $count =+ $this->sc->calif_False($this->answer[144]);
        $count += $this->sc->calif_True($this->answer[159]);
        $count =+ $this->sc->calif_False($this->answer[163]);
        $count =+ $this->sc->calif_False($this->answer[168]);
        $count += $this->sc->calif_True($this->answer[198]);
        $count =+ $this->sc->calif_False($this->answer[200]);
        $count =+ $this->sc->calif_False($this->answer[201]);
        $count =+ $this->sc->calif_False($this->answer[234]);
        $count += $this->sc->calif_True($this->answer[265]);
        $count =+ $this->sc->calif_False($this->answer[274]);
        $count =+ $this->sc->calif_False($this->answer[357]);
        $count =+ $this->sc->calif_False($this->answer[411]);
        $count =+ $this->sc->calif_False($this->answer[416]);
        $count =+ $this->sc->calif_False($this->answer[417]);
        $count =+ $this->sc->calif_False($this->answer[429]);
        $count =+ $this->sc->calif_False($this->answer[430]);
        $count =+ $this->sc->calif_False($this->answer[431]);
        $count += $this->sc->calif_True($this->answer[439]);
        $count =+ $this->sc->calif_False($this->answer[455]);
        $count += $this->sc->calif_True($this->answer[466]);
        $count =+ $this->sc->calif_False($this->answer[467]);
        $count =+ $this->sc->calif_False($this->answer[469]);
        return $count;
    }
}
?>