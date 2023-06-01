<?php
include_once('../scaleCount/scaleCount.php');
include_once('../template/scaleMMPI.php');
class scale_K extends scaleMMPI{
    function __construct(){
        parent::initialiate();
    }

    function scale(){
        $count = 0;
        $count += $this->sc->calif_False($this->answer[28]);
        $count += $this->sc->calif_False($this->answer[36]);
        $count += $this->sc->calif_False($this->answer[57]);
        $count += $this->sc->calif_False($this->answer[75]);
        $count += $this->sc->calif_True($this->answer[82]);
        $count += $this->sc->calif_False($this->answer[109]);
        $count += $this->sc->calif_False($this->answer[115]);
        $count += $this->sc->calif_False($this->answer[121]);
        $count += $this->sc->calif_False($this->answer[126]);
        $count += $this->sc->calif_False($this->answer[129]);
        $count += $this->sc->calif_False($this->answer[135]);
        $count += $this->sc->calif_False($this->answer[147]);
        $count += $this->sc->calif_False($this->answer[156]);
        $count += $this->sc->calif_False($this->answer[157]);
        $count += $this->sc->calif_False($this->answer[166]);
        $count += $this->sc->calif_False($this->answer[170]);
        $count += $this->sc->calif_False($this->answer[195]);
        $count += $this->sc->calif_False($this->answer[212]);
        $count += $this->sc->calif_False($this->answer[242]);
        $count += $this->sc->calif_False($this->answer[266]);
        $count += $this->sc->calif_False($this->answer[283]);
        $count += $this->sc->calif_False($this->answer[289]);
        $count += $this->sc->calif_False($this->answer[329]);
        $count += $this->sc->calif_False($this->answer[337]);
        $count += $this->sc->calif_False($this->answer[338]);
        $count += $this->sc->calif_False($this->answer[340]);
        $count += $this->sc->calif_False($this->answer[345]);
        $count += $this->sc->calif_False($this->answer[347]);
        $count += $this->sc->calif_False($this->answer[355]);
        $count += $this->sc->calif_False($this->answer[364]);
        return $count;
    }
}
?>