<?php
include_once('../scaleCount/scaleCount.php');
include_once('../template/scaleMMPI.php');
class scale_A extends scaleMMPI{
    function __construct(){
        parent::initialiate();
    }

    function scale(){
        $count = 0;
        $count += $this->sc->calif_True($this->answer[30]);
        $count += $this->sc->calif_True($this->answer[37]);
        $count += $this->sc->calif_True($this->answer[55]);
        $count += $this->sc->calif_True($this->answer[64]);
        $count += $this->sc->calif_True($this->answer[81]);
        $count += $this->sc->calif_True($this->answer[126]);
        $count += $this->sc->calif_True($this->answer[134]);
        $count += $this->sc->calif_True($this->answer[214]);
        $count += $this->sc->calif_True($this->answer[232]);
        $count += $this->sc->calif_True($this->answer[242]);
        $count += $this->sc->calif_True($this->answer[250]);
        $count += $this->sc->calif_True($this->answer[272]);
        $count += $this->sc->calif_True($this->answer[276]);
        $count += $this->sc->calif_True($this->answer[288]);
        $count += $this->sc->calif_True($this->answer[300]);
        $count += $this->sc->calif_True($this->answer[308]);
        $count += $this->sc->calif_True($this->answer[309]);
        $count += $this->sc->calif_True($this->answer[310]);
        $count += $this->sc->calif_True($this->answer[324]);
        $count += $this->sc->calif_True($this->answer[327]);
        $count += $this->sc->calif_True($this->answer[337]);
        $count += $this->sc->calif_True($this->answer[338]);
        $count += $this->sc->calif_True($this->answer[340]);
        $count += $this->sc->calif_True($this->answer[346]);
        $count += $this->sc->calif_False($this->answer[387]);
        $count += $this->sc->calif_True($this->answer[389]);
        $count += $this->sc->calif_True($this->answer[390]);
        $count += $this->sc->calif_True($this->answer[393]);
        $count += $this->sc->calif_True($this->answer[399]);
        $count += $this->sc->calif_True($this->answer[407]);
        $count += $this->sc->calif_True($this->answer[410]);
        $count += $this->sc->calif_True($this->answer[414]);
        $count += $this->sc->calif_True($this->answer[420]);
        $count += $this->sc->calif_True($this->answer[427]);
        $count += $this->sc->calif_True($this->answer[441]);
        $count += $this->sc->calif_True($this->answer[447]);
        $count += $this->sc->calif_True($this->answer[450]);
        $count += $this->sc->calif_True($this->answer[463]);
        $count += $this->sc->calif_True($this->answer[468]);
        return $count;
    }
}
?>