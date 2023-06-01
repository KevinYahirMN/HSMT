<?php
include_once('../scaleCount/scaleCount.php');
include_once('scaleSCID.php');
class scale_paranoid  extends scaleSCID{

    function __construct(){
        parent::initialiate();
    }

    function scale(){
        $count = 0;
        $count += $this->sc->calif_true($this->answer[48]);
        $count += $this->sc->calif_true($this->answer[49]);
        $count += $this->sc->calif_true($this->answer[50]);
        $count += $this->sc->calif_true($this->answer[51]);
        $count += $this->sc->calif_true($this->answer[52]);
        $count += $this->sc->calif_true($this->answer[53]);
        $count += $this->sc->calif_true($this->answer[54]);
        $count += $this->sc->calif_true($this->answer[55]);
        return $count;
    }
}
?>