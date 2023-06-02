<?php
include_once('../scaleCount/scaleCount.php');
include_once('../template/scaleMMPI.php');
class scale_OBS extends scaleMMPI{
    function __construct(){
        parent::initialiate();
    }

    function scale(){
        $count = 0;
        $count += $this->sc->calif_True($this->answer[54]);
        $count += $this->sc->calif_True($this->answer[86]);
        $count += $this->sc->calif_True($this->answer[134]);
        $count += $this->sc->calif_True($this->answer[195]);
        $count += $this->sc->calif_True($this->answer[308]);
        $count += $this->sc->calif_True($this->answer[312]);
        $count += $this->sc->calif_True($this->answer[326]);
        $count += $this->sc->calif_True($this->answer[327]);
        $count += $this->sc->calif_True($this->answer[393]);
        $count += $this->sc->calif_True($this->answer[441]);
        $count += $this->sc->calif_True($this->answer[481]);
        $count += $this->sc->calif_True($this->answer[490]);
        $count += $this->sc->calif_True($this->answer[496]);
        $count += $this->sc->calif_True($this->answer[508]);
        $count += $this->sc->calif_True($this->answer[546]);
        $count += $this->sc->calif_True($this->answer[552]);   
        return $count;
    }
}
?>