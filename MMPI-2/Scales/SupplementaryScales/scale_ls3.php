<?php
include_once('../scaleCount/scaleCount.php');
include_once('../template/scaleMMPI.php');
class scale_Ls3 extends scaleMMPI{
    function __construct(){
        parent::initialiate();
    }

    function scale(){
        $count = 0;
        $count += $this->sc->calif_True($this->answer[30]);
        $count += $this->sc->calif_True($this->answer[55]);
        $count += $this->sc->calif_True($this->answer[103]);
        $count += $this->sc->calif_True($this->answer[109]);
        $count += $this->sc->calif_True($this->answer[134]);
        $count += $this->sc->calif_True($this->answer[283]);
        $count += $this->sc->calif_True($this->answer[301]);
        $count += $this->sc->calif_True($this->answer[307]);
        $count += $this->sc->calif_True($this->answer[325]);
        $count += $this->sc->calif_True($this->answer[327]);
        $count += $this->sc->calif_True($this->answer[337]);
        $count += $this->sc->calif_True($this->answer[346]);
        $count += $this->sc->calif_True($this->answer[347]);
        $count += $this->sc->calif_True($this->answer[357]);
        $count += $this->sc->calif_True($this->answer[363]);
        $count += $this->sc->calif_True($this->answer[367]);
        $count += $this->sc->calif_True($this->answer[368]);
        return $count;
    }
}
?>