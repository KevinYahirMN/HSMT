<?php
include_once('../scaleCount/scaleCount.php');
include_once('scaleSCID.php');
class scale_obsessive  extends scaleSCID{

    function __construct(){
        parent::initialiate();
    }

    function scale(){
        $count = 0;
        $count += $this->sc->calif_true($this->answer[15]);
        $count += $this->sc->calif_true($this->answer[16]);
        $count += $this->sc->calif_true($this->answer[17]);
        $count += $this->sc->calif_true($this->answer[18]);
        $count += $this->sc->calif_true($this->answer[19]);
        $count += $this->sc->calif_true($this->answer[20]);
        $count += $this->sc->calif_true($this->answer[21]);
        $count += $this->sc->calif_true($this->answer[22]);
        $count += $this->sc->calif_true($this->answer[23]);
        $count += $this->sc->calif_true($this->answer[24]);
        $count += $this->sc->calif_true($this->answer[25]);
        return $count;
    }
}
?>