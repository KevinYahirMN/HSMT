<?php
include_once('../scaleCount/scaleCount.php');
include_once('../template/scaleMMPI.php');
class scale_SAU extends scaleMMPI{
    function __construct(){
        parent::initialiate();
    }

    function scale(){
        $count = 0;
        $count += $this->sc->calif_True($this->answer[10]);
        $count += $this->sc->calif_True($this->answer[17]);
        $count += $this->sc->calif_False($this->answer[19]);
        $count += $this->sc->calif_True($this->answer[27]);
        $count += $this->sc->calif_False($this->answer[32]);
        $count += $this->sc->calif_True($this->answer[35]);
        $count += $this->sc->calif_True($this->answer[39]);
        $count += $this->sc->calif_True($this->answer[43]);
        $count += $this->sc->calif_False($this->answer[44]);
        $count += $this->sc->calif_False($this->answer[46]);
        $count += $this->sc->calif_True($this->answer[52]);
        $count += $this->sc->calif_False($this->answer[56]);
        $count += $this->sc->calif_True($this->answer[58]);
        $count += $this->sc->calif_False($this->answer[90]);
        $count += $this->sc->calif_True($this->answer[96]);
        $count += $this->sc->calif_True($this->answer[100]);
        $count += $this->sc->calif_True($this->answer[110]);
        $count += $this->sc->calif_False($this->answer[116]);
        $count += $this->sc->calif_False($this->answer[117]);
        $count += $this->sc->calif_False($this->answer[140]);
        $count += $this->sc->calif_False($this->answer[141]);
        $count += $this->sc->calif_True($this->answer[148]);
        $count += $this->sc->calif_False($this->answer[158]);
        $count += $this->sc->calif_False($this->answer[163]);
        $count += $this->sc->calif_True($this->answer[174]);
        $count += $this->sc->calif_False($this->answer[175]);
        $count += $this->sc->calif_False($this->answer[178]);
        $count += $this->sc->calif_False($this->answer[180]);
        $count += $this->sc->calif_False($this->answer[193]);
        $count += $this->sc->calif_False($this->answer[203]);
        $count += $this->sc->calif_False($this->answer[223]);
        $count += $this->sc->calif_True($this->answer[246]);
        $count += $this->sc->calif_False($this->answer[248]);
        $count += $this->sc->calif_False($this->answer[254]);
        $count += $this->sc->calif_False($this->answer[294]);
        $count += $this->sc->calif_False($this->answer[403]);
        return $count;
    }
}
?>