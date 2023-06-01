<?php
include_once('../scaleCount/scaleCount.php');
include_once('../template/scaleMMPI.php');
class scale_R extends scaleMMPI{
    function __construct(){
        parent::initialiate();
    }

    function scale(){
        $count = 0;
        $count += $this->sc->calif_False($this->answer[0]);
        $count += $this->sc->calif_False($this->answer[6]);
        $count += $this->sc->calif_False($this->answer[9]);
        $count += $this->sc->calif_False($this->answer[13]);
        $count += $this->sc->calif_False($this->answer[36]);
        $count += $this->sc->calif_False($this->answer[44]);
        $count += $this->sc->calif_False($this->answer[68]);
        $count += $this->sc->calif_False($this->answer[111]);
        $count += $this->sc->calif_False($this->answer[117]);
        $count += $this->sc->calif_False($this->answer[119]);
        $count += $this->sc->calif_False($this->answer[127]);
        $count += $this->sc->calif_False($this->answer[133]);
        $count += $this->sc->calif_False($this->answer[141]);
        $count += $this->sc->calif_False($this->answer[167]);
        $count += $this->sc->calif_False($this->answer[177]);
        $count += $this->sc->calif_False($this->answer[188]);
        $count += $this->sc->calif_False($this->answer[196]);
        $count += $this->sc->calif_False($this->answer[198]);
        $count += $this->sc->calif_False($this->answer[247]);
        $count += $this->sc->calif_False($this->answer[254]);
        $count += $this->sc->calif_False($this->answer[255]);
        $count += $this->sc->calif_False($this->answer[296]);
        $count += $this->sc->calif_False($this->answer[329]);
        $count += $this->sc->calif_False($this->answer[345]);
        $count += $this->sc->calif_False($this->answer[349]);
        $count += $this->sc->calif_False($this->answer[352]);
        $count += $this->sc->calif_False($this->answer[353]);
        $count += $this->sc->calif_False($this->answer[358]);
        $count += $this->sc->calif_False($this->answer[362]);
        $count += $this->sc->calif_False($this->answer[364]);
        $count += $this->sc->calif_False($this->answer[421]);
        $count += $this->sc->calif_False($this->answer[422]);
        $count += $this->sc->calif_False($this->answer[429]);
        $count += $this->sc->calif_False($this->answer[431]);
        $count += $this->sc->calif_False($this->answer[448]);
        $count += $this->sc->calif_False($this->answer[455]);
        $count += $this->sc->calif_False($this->answer[464]);
        return $count;
    }
}
?>