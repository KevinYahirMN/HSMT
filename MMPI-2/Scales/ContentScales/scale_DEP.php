<?php
include_once('../scaleCount/scaleCount.php');
include_once('../template/scaleMMPI.php');
class scale_DEP extends scaleMMPI{
    function __construct(){
        parent::initialiate();
    }

    function scale(){
        $count = 0;
        $count += $this->sc->calif_False($this->answer[2]);
        $count += $this->sc->calif_False($this->answer[8]);
        $count += $this->sc->calif_True($this->answer[37]);
        $count += $this->sc->calif_True($this->answer[51]);
        $count += $this->sc->calif_True($this->answer[55]);
        $count += $this->sc->calif_True($this->answer[64]);
        $count += $this->sc->calif_True($this->answer[70]);
        $count += $this->sc->calif_False($this->answer[74]);
        $count += $this->sc->calif_True($this->answer[81]);
        $count += $this->sc->calif_True($this->answer[91]);
        $count += $this->sc->calif_False($this->answer[94]);
        $count += $this->sc->calif_True($this->answer[129]);
        $count += $this->sc->calif_True($this->answer[145]);
        $count += $this->sc->calif_True($this->answer[214]);
        $count += $this->sc->calif_True($this->answer[233]);
        $count += $this->sc->calif_True($this->answer[245]);
        $count += $this->sc->calif_True($this->answer[276]);
        $count += $this->sc->calif_True($this->answer[302]);
        $count += $this->sc->calif_True($this->answer[305]);
        $count += $this->sc->calif_True($this->answer[330]);
        $count += $this->sc->calif_True($this->answer[376]);
        $count += $this->sc->calif_False($this->answer[387]);
        $count += $this->sc->calif_True($this->answer[398]);
        $count += $this->sc->calif_True($this->answer[399]);
        $count += $this->sc->calif_True($this->answer[410]);
        $count += $this->sc->calif_True($this->answer[453]);
        $count += $this->sc->calif_True($this->answer[505]);
        $count += $this->sc->calif_True($this->answer[511]);
        $count += $this->sc->calif_True($this->answer[515]);
        $count += $this->sc->calif_True($this->answer[519]);
        $count += $this->sc->calif_True($this->answer[538]);
        $count += $this->sc->calif_True($this->answer[545]);
        $count += $this->sc->calif_True($this->answer[553]);
        return $count;
    }
}
?>