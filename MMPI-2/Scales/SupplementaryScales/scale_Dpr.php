<?php
include_once('../scaleCount/scaleCount.php');
include_once('../template/scaleMMPI.php');
class scale_Dpr extends scaleMMPI{
    function __construct(){
        parent::initialiate();
    }

    function scale(){
        $count = 0;
        $count += $this->sc->calif_False($this->answer[1]);
        $count += $this->sc->calif_False($this->answer[2]);
        $count += $this->sc->calif_False($this->answer[8]);
        $count += $this->sc->calif_False($this->answer[9]);
        $count += $this->sc->calif_True($this->answer[14]);
        $count += $this->sc->calif_True($this->answer[15]);
        $count += $this->sc->calif_False($this->answer[19]);
        $count += $this->sc->calif_True($this->answer[27]);
        $count += $this->sc->calif_True($this->answer[30]);
        $count += $this->sc->calif_True($this->answer[37]);
        $count += $this->sc->calif_False($this->answer[42]);
        $count += $this->sc->calif_True($this->answer[70]);
        $count += $this->sc->calif_True($this->answer[72]);
        $count += $this->sc->calif_True($this->answer[80]);
        $count += $this->sc->calif_True($this->answer[81]);
        $count += $this->sc->calif_False($this->answer[94]);
        $count += $this->sc->calif_True($this->answer[109]);
        $count += $this->sc->calif_True($this->answer[129]);
        $count += $this->sc->calif_False($this->answer[130]);
        $count += $this->sc->calif_False($this->answer[139]);
        $count += $this->sc->calif_False($this->answer[147]);
        $count += $this->sc->calif_False($this->answer[151]);
        $count += $this->sc->calif_True($this->answer[214]);
        $count += $this->sc->calif_True($this->answer[217]);
        $count += $this->sc->calif_False($this->answer[222]);
        $count += $this->sc->calif_True($this->answer[232]);
        $count += $this->sc->calif_True($this->answer[268]);
        $count += $this->sc->calif_True($this->answer[272]);
        $count += $this->sc->calif_True($this->answer[298]);
        $count += $this->sc->calif_True($this->answer[301]);
        $count += $this->sc->calif_True($this->answer[324]);
        $count += $this->sc->calif_True($this->answer[330]);
        $count += $this->sc->calif_True($this->answer[338]);
        $count += $this->sc->calif_True($this->answer[356]);
        $count += $this->sc->calif_False($this->answer[404]);
        $count += $this->sc->calif_True($this->answer[407]);
        $count += $this->sc->calif_True($this->answer[410]);
        $count += $this->sc->calif_True($this->answer[448]);
        $count += $this->sc->calif_True($this->answer[463]);
        $count += $this->sc->calif_True($this->answer[468]);
        $count += $this->sc->calif_True($this->answer[471]);
        return $count;
    }
}
?>