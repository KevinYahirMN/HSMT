<?php
include_once('../scaleCount/scaleCount.php');
include_once('scaleSCID.php');
class scale_limit extends scaleSCID{

    function __construct(){
        parent::initialiate();
    }

    function scale(){
        $count = 0;
        $count += $this->sc->calif_true($this->answer[90]);
        $count += $this->sc->calif_true($this->answer[91]);
        $count += $this->sc->calif_true($this->answer[92]);
        $count += $this->sc->calif_true($this->answer[93]);
        $count += $this->sc->calif_true($this->answer[94]);
        $count += $this->sc->calif_true($this->answer[95]);
        $count += $this->sc->calif_true($this->answer[96]);
        $count += $this->sc->calif_true($this->answer[97]);
        $count += $this->sc->calif_true($this->answer[98]);
        $count += $this->sc->calif_true($this->answer[99]);
        $count += $this->sc->calif_true($this->answer[100]);
        $count += $this->sc->calif_true($this->answer[101]);
        $count += $this->sc->calif_true($this->answer[102]);
        $count += $this->sc->calif_true($this->answer[103]);
        $count += $this->sc->calif_true($this->answer[104]);
        $count += $this->sc->calif_true($this->answer[105]);
        $count += $this->sc->calif_true($this->answer[106]);
        $count += $this->sc->calif_true($this->answer[107]);
        return $count;
    }
}
?>