<?php
include_once('../scaleCount/scaleCount.php');
include_once('../template/scaleMMPI.php');
class scale_Gm extends scaleMMPI{
    function __construct(){
        parent::initialiate();
    }

    function scale(){
        $count = 0;
        $count +=$this->sc->calif_False($this->answer[3]);
        $count += $this->sc->calif_True($this->answer[7]);
        $count += $this->sc->calif_True($this->answer[19]);
        $count +=$this->sc->calif_False($this->answer[22]);
        $count +=$this->sc->calif_False($this->answer[43]);
        $count +=$this->sc->calif_False($this->answer[63]);
        $count +=$this->sc->calif_False($this->answer[69]);
        $count +=$this->sc->calif_False($this->answer[72]);
        $count +=$this->sc->calif_False($this->answer[73]);
        $count +=$this->sc->calif_False($this->answer[79]);
        $count +=$this->sc->calif_False($this->answer[99]);
        $count +=$this->sc->calif_False($this->answer[136]);
        $count += $this->sc->calif_True($this->answer[142]);
        $count +=$this->sc->calif_False($this->answer[145]);
        $count += $this->sc->calif_True($this->answer[151]);
        $count += $this->sc->calif_True($this->answer[158]);
        $count += $this->sc->calif_True($this->answer[162]);
        $count += $this->sc->calif_True($this->answer[175]);
        $count +=$this->sc->calif_False($this->answer[186]);
        $count += $this->sc->calif_True($this->answer[198]);
        $count += $this->sc->calif_True($this->answer[213]);
        $count += $this->sc->calif_True($this->answer[236]);
        $count +=$this->sc->calif_False($this->answer[288]);
        $count += $this->sc->calif_True($this->answer[320]);
        $count +=$this->sc->calif_False($this->answer[330]);
        $count += $this->sc->calif_True($this->answer[349]);
        $count +=$this->sc->calif_False($this->answer[350]);
        $count +=$this->sc->calif_False($this->answer[363]);
        $count += $this->sc->calif_True($this->answer[384]);
        $count += $this->sc->calif_True($this->answer[387]);
        $count +=$this->sc->calif_False($this->answer[391]);
        $count +=$this->sc->calif_False($this->answer[394]);
        $count += $this->sc->calif_True($this->answer[400]);
        $count +=$this->sc->calif_False($this->answer[434]);
        $count +=$this->sc->calif_False($this->answer[437]);
        $count += $this->sc->calif_True($this->answer[439]);
        $count +=$this->sc->calif_False($this->answer[440]);
        $count += $this->sc->calif_True($this->answer[461]);
        $count += $this->sc->calif_True($this->answer[466]);
        $count +=$this->sc->calif_False($this->answer[468]);
        $count +=$this->sc->calif_False($this->answer[470]);
        $count += $this->sc->calif_True($this->answer[473]);
        $count +=$this->sc->calif_False($this->answer[497]);
        $count +=$this->sc->calif_False($this->answer[508]);
        $count +=$this->sc->calif_False($this->answer[518]);
        $count +=$this->sc->calif_False($this->answer[531]);
        $count +=$this->sc->calif_False($this->answer[535]);
        return $count;
    }
}
?>