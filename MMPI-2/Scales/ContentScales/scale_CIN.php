<?php
include_once('../scaleCount/scaleCount.php');
include_once('../template/scaleMMPI.php');
class scale_CIN extends scaleMMPI{
    function __construct(){
        parent::initialiate();
    }

    function scale(){
        $count = 0;
        $count += $this->sc->calif_True($this->answer[49]);
        $count += $this->sc->calif_True($this->answer[57]);
        $count += $this->sc->calif_True($this->answer[75]);
        $count += $this->sc->calif_True($this->answer[80]);
        $count += $this->sc->calif_True($this->answer[103]);
        $count += $this->sc->calif_True($this->answer[109]);
        $count += $this->sc->calif_True($this->answer[123]);
        $count += $this->sc->calif_True($this->answer[224]);
        $count += $this->sc->calif_True($this->answer[240]);
        $count += $this->sc->calif_True($this->answer[253]);
        $count += $this->sc->calif_True($this->answer[282]);
        $count += $this->sc->calif_True($this->answer[283]);
        $count += $this->sc->calif_True($this->answer[285]);
        $count += $this->sc->calif_True($this->answer[314]);
        $count += $this->sc->calif_True($this->answer[345]);
        $count += $this->sc->calif_True($this->answer[351]);
        $count += $this->sc->calif_True($this->answer[357]);
        $count += $this->sc->calif_True($this->answer[373]);
        $count += $this->sc->calif_True($this->answer[398]);
        $count += $this->sc->calif_True($this->answer[402]);
        $count += $this->sc->calif_True($this->answer[444]);
        $count += $this->sc->calif_True($this->answer[469]);
        $count += $this->sc->calif_True($this->answer[537]);
        return $count;
    }
}
?>