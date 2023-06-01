<?php
include_once('../scaleCount/scaleCount.php');
include_once('scaleSCID.php');
class scale_histrionic extends scaleSCID{

    function __construct(){
        parent::initialiate();
    }

    function scale(){
        $count = 0;
        $count += $this->sc->calif_true($this->answer[69]);
        $count += $this->sc->calif_true($this->answer[70]);
        $count += $this->sc->calif_true($this->answer[71]);
        $count += $this->sc->calif_true($this->answer[72]);
        $count += $this->sc->calif_true($this->answer[73]);
        $count += $this->sc->calif_true($this->answer[74]);
        $count += $this->sc->calif_true($this->answer[75]);
        $count += $this->sc->calif_true($this->answer[76]);
        $count += $this->sc->calif_true($this->answer[77]);
        $count += $this->sc->calif_true($this->answer[78]);
        return $count;
    }
}
?>