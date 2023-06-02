<?php
include_once('../scaleCount/scaleCount.php');
include_once('../template/scaleMMPI.php');
class scale_DTR extends scaleMMPI{
    function __construct(){
        parent::initialiate();
    }

    function scale(){
        $count = 0;
        $count += $this->sc->calif_False($this->answer[9]);
        $count += $this->sc->calif_True($this->answer[14]);
        $count += $this->sc->calif_True($this->answer[16]);
        $count += $this->sc->calif_True($this->answer[30]);
        $count += $this->sc->calif_True($this->answer[53]);
        $count += $this->sc->calif_True($this->answer[72]);
        $count += $this->sc->calif_True($this->answer[97]);
        $count += $this->sc->calif_False($this->answer[107]);
        $count += $this->sc->calif_True($this->answer[134]);
        $count += $this->sc->calif_True($this->answer[232]);
        $count += $this->sc->calif_True($this->answer[242]);
        $count += $this->sc->calif_True($this->answer[298]);
        $count += $this->sc->calif_True($this->answer[301]);
        $count += $this->sc->calif_False($this->answer[317]);
        $count += $this->sc->calif_True($this->answer[338]);
        $count += $this->sc->calif_True($this->answer[363]);
        $count += $this->sc->calif_True($this->answer[367]);
        $count += $this->sc->calif_True($this->answer[393]);
        $count += $this->sc->calif_True($this->answer[408]);
        $count += $this->sc->calif_True($this->answer[427]);
        $count += $this->sc->calif_True($this->answer[444]);
        $count += $this->sc->calif_True($this->answer[463]);
        $count += $this->sc->calif_True($this->answer[490]);
        $count += $this->sc->calif_True($this->answer[504]);
        $count += $this->sc->calif_True($this->answer[508]);
        $count += $this->sc->calif_True($this->answer[516]);
        $count += $this->sc->calif_False($this->answer[520]);
        $count += $this->sc->calif_True($this->answer[524]);
        $count += $this->sc->calif_True($this->answer[544]);
        $count += $this->sc->calif_True($this->answer[553]);
        $count += $this->sc->calif_True($this->answer[558]);
        $count += $this->sc->calif_False($this->answer[560]);
        $count += $this->sc->calif_True($this->answer[565]);
        return $count;
    }
}
?>