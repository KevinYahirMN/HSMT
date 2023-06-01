<?php
include_once('../scaleCount/scaleCount.php');
include_once('scaleSCID.php');
class scale_schizotypal  extends scaleSCID{

    function __construct(){
        parent::initialiate();
    }

    function scale(){
        $count = 0;
        $count += $this->sc->calif_true($this->answer[56]);
        $count += $this->sc->calif_true($this->answer[57]);
        $count += $this->sc->calif_true($this->answer[58]);
        $count += $this->sc->calif_true($this->answer[59]);
        $count += $this->sc->calif_true($this->answer[60]);
        $count += $this->sc->calif_true($this->answer[61]);
        $count += $this->sc->calif_true($this->answer[62]);
        $count += $this->sc->calif_true($this->answer[63]);
        return $count;
    }
}
?>