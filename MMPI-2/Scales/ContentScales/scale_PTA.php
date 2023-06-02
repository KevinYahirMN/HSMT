<?php
include_once('../scaleCount/scaleCount.php');
include_once('../template/scaleMMPI.php');
class scale_PTA extends scaleMMPI{
    function __construct(){
        parent::initialiate();
    }

    function scale(){
        $count = 0;
        $count += $this->sc->calif_True($this->answer[26]);
        $count += $this->sc->calif_True($this->answer[135]);
        $count += $this->sc->calif_True($this->answer[150]);
        $count += $this->sc->calif_True($this->answer[211]);
        $count += $this->sc->calif_True($this->answer[301]);
        $count += $this->sc->calif_True($this->answer[357]);
        $count += $this->sc->calif_True($this->answer[413]);
        $count += $this->sc->calif_True($this->answer[418]);
        $count += $this->sc->calif_True($this->answer[419]);
        $count += $this->sc->calif_True($this->answer[422]);
        $count += $this->sc->calif_True($this->answer[429]);
        $count += $this->sc->calif_True($this->answer[436]);
        $count += $this->sc->calif_True($this->answer[506]);
        $count += $this->sc->calif_True($this->answer[509]);
        $count += $this->sc->calif_True($this->answer[522]);
        $count += $this->sc->calif_True($this->answer[530]);
        $count += $this->sc->calif_True($this->answer[534]);
        $count += $this->sc->calif_True($this->answer[540]);
        $count += $this->sc->calif_True($this->answer[544]);
        return $count;
    }
}
?>