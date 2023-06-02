<?php
include_once('../scaleCount/scaleCount.php');
include_once('../template/scaleMMPI.php');
class scale_ISO extends scaleMMPI{
    function __construct(){
        parent::initialiate();
    }

    function scale(){
        $count = 0;
        $count += $this->sc->calif_True($this->answer[45]);
        $count += $this->sc->calif_False($this->answer[48]);
        $count += $this->sc->calif_False($this->answer[85]);
        $count += $this->sc->calif_True($this->answer[157]);
        $count += $this->sc->calif_True($this->answer[166]);
        $count += $this->sc->calif_True($this->answer[184]);
        $count += $this->sc->calif_False($this->answer[261]);
        $count += $this->sc->calif_True($this->answer[264]);
        $count += $this->sc->calif_True($this->answer[274]);
        $count += $this->sc->calif_False($this->answer[279]);
        $count += $this->sc->calif_True($this->answer[280]);
        $count += $this->sc->calif_False($this->answer[320]);
        $count += $this->sc->calif_True($this->answer[336]);
        $count += $this->sc->calif_False($this->answer[339]);
        $count += $this->sc->calif_True($this->answer[348]);
        $count += $this->sc->calif_False($this->answer[352]);
        $count += $this->sc->calif_False($this->answer[358]);
        $count += $this->sc->calif_False($this->answer[359]);
        $count += $this->sc->calif_False($this->answer[362]);
        $count += $this->sc->calif_True($this->answer[366]);
        $count += $this->sc->calif_False($this->answer[369]);
        $count += $this->sc->calif_True($this->answer[478]);
        $count += $this->sc->calif_True($this->answer[479]);
        $count += $this->sc->calif_True($this->answer[514]);
        return $count;
    }
}
?>