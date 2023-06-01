<?php
include_once('../scaleCount/scaleCount.php');
include_once('../template/scaleMMPI.php');
class scale_Ma extends scaleMMPI{
    function __construct(){
        parent::initialiate();
    }

    function scale(){
        $count = 0;
        $count += $this->sc->calif_True($this->answer[12]);
        $count += $this->sc->calif_True($this->answer[14]);
        $count += $this->sc->calif_True($this->answer[20]);
        $count += $this->sc->calif_True($this->answer[22]);
        $count += $this->sc->calif_True($this->answer[49]);
        $count += $this->sc->calif_True($this->answer[54]);
        $count += $this->sc->calif_True($this->answer[60]);
        $count += $this->sc->calif_True($this->answer[84]);
        $count += $this->sc->calif_True($this->answer[86]);
        $count += $this->sc->calif_False($this->answer[87]);
        $count += $this->sc->calif_False($this->answer[92]);
        $count += $this->sc->calif_True($this->answer[97]);
        $count += $this->sc->calif_False($this->answer[99]);
        $count += $this->sc->calif_False($this->answer[105]);
        $count += $this->sc->calif_False($this->answer[106]);
        $count += $this->sc->calif_True($this->answer[112]);
        $count += $this->sc->calif_True($this->answer[121]);
        $count += $this->sc->calif_True($this->answer[130]);
        $count += $this->sc->calif_False($this->answer[135]);
        $count += $this->sc->calif_True($this->answer[144]);
        $count += $this->sc->calif_False($this->answer[153]);
        $count += $this->sc->calif_True($this->answer[154]);
        $count += $this->sc->calif_False($this->answer[157]);
        $count += $this->sc->calif_False($this->answer[166]);
        $count += $this->sc->calif_True($this->answer[167]);
        $count += $this->sc->calif_True($this->answer[168]);
        $count += $this->sc->calif_True($this->answer[181]);
        $count += $this->sc->calif_True($this->answer[189]);
        $count += $this->sc->calif_True($this->answer[199]);
        $count += $this->sc->calif_True($this->answer[204]);
        $count += $this->sc->calif_True($this->answer[205]);
        $count += $this->sc->calif_True($this->answer[210]);
        $count += $this->sc->calif_True($this->answer[211]);
        $count += $this->sc->calif_True($this->answer[217]);
        $count += $this->sc->calif_True($this->answer[219]);
        $count += $this->sc->calif_True($this->answer[226]);
        $count += $this->sc->calif_True($this->answer[228]);
        $count += $this->sc->calif_True($this->answer[237]);
        $count += $this->sc->calif_True($this->answer[241]);
        $count += $this->sc->calif_False($this->answer[242]);
        $count += $this->sc->calif_True($this->answer[243]);
        $count += $this->sc->calif_True($this->answer[247]);
        $count += $this->sc->calif_True($this->answer[249]);
        $count += $this->sc->calif_True($this->answer[252]);
        $count += $this->sc->calif_False($this->answer[262]);
        $count += $this->sc->calif_True($this->answer[268]);
        return $count;
    }
}
?>