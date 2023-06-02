<?php
include_once('../scaleCount/scaleCount.php');
include_once('../template/scaleMMPI.php');
class scale_Hr extends scaleMMPI{
    function __construct(){
        parent::initialiate();
    }

    function scale(){
        $count = 0;
        $count += $this->sc->calif_False($this->answer[0]);
        $count += $this->sc->calif_False($this->answer[14]);
        $count += $this->sc->calif_False($this->answer[28]);
        $count += $this->sc->calif_True($this->answer[66]);
        $count += $this->sc->calif_False($this->answer[68]);
        $count += $this->sc->calif_False($this->answer[76]);
        $count += $this->sc->calif_True($this->answer[78]);
        $count += $this->sc->calif_False($this->answer[88]);
        $count += $this->sc->calif_False($this->answer[97]);
        $count += $this->sc->calif_False($this->answer[115]);
        $count += $this->sc->calif_False($this->answer[116]);
        $count += $this->sc->calif_False($this->answer[128]);
        $count += $this->sc->calif_False($this->answer[152]);
        $count += $this->sc->calif_False($this->answer[168]);
        $count += $this->sc->calif_False($this->answer[170]);
        $count += $this->sc->calif_True($this->answer[206]);
        $count += $this->sc->calif_True($this->answer[285]);
        $count += $this->sc->calif_False($this->answer[292]);
        $count += $this->sc->calif_True($this->answer[304]);
        $count += $this->sc->calif_False($this->answer[343]);
        $count += $this->sc->calif_False($this->answer[389]);
        $count += $this->sc->calif_True($this->answer[397]);
        $count += $this->sc->calif_False($this->answer[399]);
        $count += $this->sc->calif_False($this->answer[419]);
        $count += $this->sc->calif_False($this->answer[432]);
        $count += $this->sc->calif_False($this->answer[439]);
        $count += $this->sc->calif_False($this->answer[459]);
        $count += $this->sc->calif_True($this->answer[470]);
        return $count;
    }
}
?>