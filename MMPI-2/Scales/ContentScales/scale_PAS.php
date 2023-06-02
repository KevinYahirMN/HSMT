<?php
include_once('../scaleCount/scaleCount.php');
include_once('../template/scaleMMPI.php');
class scale_PAS extends scaleMMPI{
    function __construct(){
        parent::initialiate();
    }

    function scale(){
        $count = 0;
        $count += $this->sc->calif_True($this->answer[25]);
        $count += $this->sc->calif_True($this->answer[34]);
        $count += $this->sc->calif_True($this->answer[65]);
        $count += $this->sc->calif_True($this->answer[80]);
        $count += $this->sc->calif_True($this->answer[83]);
        $count += $this->sc->calif_True($this->answer[103]);
        $count += $this->sc->calif_True($this->answer[104]);
        $count += $this->sc->calif_True($this->answer[109]);
        $count += $this->sc->calif_True($this->answer[122]);
        $count += $this->sc->calif_True($this->answer[226]);
        $count += $this->sc->calif_True($this->answer[239]);
        $count += $this->sc->calif_True($this->answer[247]);
        $count += $this->sc->calif_True($this->answer[249]);
        $count += $this->sc->calif_True($this->answer[253]);
        $count += $this->sc->calif_False($this->answer[265]);
        $count += $this->sc->calif_True($this->answer[268]);
        $count += $this->sc->calif_True($this->answer[282]);
        $count += $this->sc->calif_True($this->answer[283]);
        $count += $this->sc->calif_True($this->answer[373]);
        $count += $this->sc->calif_True($this->answer[411]);
        $count += $this->sc->calif_True($this->answer[417]);
        $count += $this->sc->calif_True($this->answer[418]);
        return $count;
    }
}
?>