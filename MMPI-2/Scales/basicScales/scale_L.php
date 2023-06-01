<?php
include_once('../scaleCount/scaleCount.php');
include_once('../../template/scaleMMPI.php');
class scale_L extends scaleMMPI{
    function __construct(){
        parent::initialiate();
    }

    function scale(){
        $count = 0;
        $count += $this->sc->calif_False($this->answer[15]);
        $count += $this->sc->calif_False($this->answer[28]);
        $count += $this->sc->calif_False($this->answer[40]);
        $count += $this->sc->calif_False($this->answer[50]);
        $count += $this->sc->calif_False($this->answer[76]);
        $count += $this->sc->calif_False($this->answer[92]);
        $count += $this->sc->calif_False($this->answer[101]);
        $count += $this->sc->calif_False($this->answer[106]);
        $count += $this->sc->calif_False($this->answer[122]);
        $count += $this->sc->calif_False($this->answer[138]);
        $count += $this->sc->calif_False($this->answer[152]);
        $count += $this->sc->calif_False($this->answer[182]);
        $count += $this->sc->calif_False($this->answer[202]);
        $count += $this->sc->calif_False($this->answer[231]);
        $count += $this->sc->calif_False($this->answer[259]);
        return $count;
    }
}
?>