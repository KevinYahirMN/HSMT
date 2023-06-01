<?php
include_once('../scaleCount/scaleCount.php');
include_once('scaleSCID.php');
class scale_schizoid  extends scaleSCID{

    function __construct(){
        parent::initialiate();
    }

    function scale(){
        $count = 0;
        $count += $this->sc->calif_true($this->answer[64]);
        $count += $this->sc->calif_true($this->answer[65]);
        $count += $this->sc->calif_true($this->answer[66]);
        $count += $this->sc->calif_true($this->answer[67]);
        $count += $this->sc->calif_true($this->answer[68]);
        return $count;
    }
}
?>