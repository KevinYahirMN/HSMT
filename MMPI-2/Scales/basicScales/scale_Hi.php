<?php
include_once('../scaleCount/scaleCount.php');
include_once('../template/scaleMMPI.php');
class scale_Hi extends scaleMMPI{
    function __construct(){
        parent::initialiate();
    }

    function scale(){
        $count = 0;
        $count += $this->sc->calif_False($this->answer[1]);
        $count += $this->sc->calif_False($this->answer[2]);
        $count += $this->sc->calif_False($this->answer[6]);
        $count += $this->sc->calif_False($this->answer[7]);
        $count += $this->sc->calif_False($this->answer[8]);
        $count += $this->sc->calif_False($this->answer[9]);
        $count += $this->sc->calif_True($this->answer[10]);
        $count += $this->sc->calif_False($this->answer[13]);
        $count += $this->sc->calif_True($this->answer[17]);
        $count += $this->sc->calif_False($this->answer[25]);
        $count += $this->sc->calif_False($this->answer[28]);
        $count += $this->sc->calif_True($this->answer[30]);
        $count += $this->sc->calif_True($this->answer[38]);
        $count += $this->sc->calif_True($this->answer[39]);
        $count += $this->sc->calif_True($this->answer[43]);
        $count += $this->sc->calif_False($this->answer[44]);
        $count += $this->sc->calif_False($this->answer[46]);
        $count += $this->sc->calif_False($this->answer[57]);
        $count += $this->sc->calif_True($this->answer[64]);
        $count += $this->sc->calif_False($this->answer[75]);
        $count += $this->sc->calif_False($this->answer[80]);
        $count += $this->sc->calif_False($this->answer[90]);
        $count += $this->sc->calif_False($this->answer[94]);
        $count += $this->sc->calif_False($this->answer[97]);
        $count += $this->sc->calif_True($this->answer[100]);
        $count += $this->sc->calif_False($this->answer[109]);
        $count += $this->sc->calif_False($this->answer[114]);
        $count += $this->sc->calif_False($this->answer[115]);
        $count += $this->sc->calif_False($this->answer[123]);
        $count += $this->sc->calif_False($this->answer[124]);
        $count += $this->sc->calif_False($this->answer[128]);
        $count += $this->sc->calif_False($this->answer[134]);
        $count += $this->sc->calif_False($this->answer[140]);
        $count += $this->sc->calif_False($this->answer[147]);
        $count += $this->sc->calif_False($this->answer[150]);
        $count += $this->sc->calif_False($this->answer[151]);
        $count += $this->sc->calif_False($this->answer[156]);
        $count += $this->sc->calif_False($this->answer[158]);
        $count += $this->sc->calif_False($this->answer[160]);
        $count += $this->sc->calif_False($this->answer[163]);
        $count += $this->sc->calif_True($this->answer[165]);
        $count += $this->sc->calif_False($this->answer[166]);
        $count += $this->sc->calif_True($this->answer[171]);
        $count += $this->sc->calif_False($this->answer[172]);
        $count += $this->sc->calif_True($this->answer[174]);
        $count += $this->sc->calif_False($this->answer[175]);
        $count += $this->sc->calif_False($this->answer[178]);
        $count += $this->sc->calif_False($this->answer[184]);
        $count += $this->sc->calif_False($this->answer[192]);
        $count += $this->sc->calif_False($this->answer[207]);
        $count += $this->sc->calif_False($this->answer[212]);
        $count += $this->sc->calif_False($this->answer[217]);
        $count += $this->sc->calif_False($this->answer[223]);
        $count += $this->sc->calif_True($this->answer[229]);
        $count += $this->sc->calif_False($this->answer[240]);
        $count += $this->sc->calif_False($this->answer[242]);
        $count += $this->sc->calif_False($this->answer[248]);
        $count += $this->sc->calif_False($this->answer[252]);
        $count += $this->sc->calif_False($this->answer[262]);
        $count += $this->sc->calif_False($this->answer[264]);
        return $count;
    }
}
?>