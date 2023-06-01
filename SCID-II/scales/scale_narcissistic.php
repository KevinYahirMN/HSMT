<?php
include_once('../scaleCount/scaleCount.php');
include_once('scaleSCID.php');
class scale_narcissistic extends scaleSCID{

    function __construct(){
        parent::initialiate();
    }

    function scale(){
        $count = 0;
        $count += $this->sc->calif_true($this->answer[79]);
        $count += $this->sc->calif_true($this->answer[80]);
        $count += $this->sc->calif_true($this->answer[81]);
        $count += $this->sc->calif_true($this->answer[82]);
        $count += $this->sc->calif_true($this->answer[83]);
        $count += $this->sc->calif_true($this->answer[84]);
        $count += $this->sc->calif_true($this->answer[85]);
        $count += $this->sc->calif_true($this->answer[86]);
        $count += $this->sc->calif_true($this->answer[87]);
        $count += $this->sc->calif_true($this->answer[88]);
        $count += $this->sc->calif_true($this->answer[89]);
        return $count;
    }
}
?>