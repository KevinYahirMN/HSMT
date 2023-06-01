<?php
include_once('../scaleCount/scaleCount.php');
include_once('scaleSCID.php');
class scale_dependent  extends scaleSCID{

    function __construct(){
        parent::initialiate();
    }

    function scale(){
        $count = 0;
        $count += $this->sc->calif_true($this->answer[7]);
        $count += $this->sc->calif_true($this->answer[14]);
        $count += $this->sc->calif_true($this->answer[8]);
        $count += $this->sc->calif_true($this->answer[9]);
        $count += $this->sc->calif_true($this->answer[10]);
        $count += $this->sc->calif_true($this->answer[11]);
        $count += $this->sc->calif_true($this->answer[12]);
        $count += $this->sc->calif_true($this->answer[13]);
        return $count;
    }
}
?>