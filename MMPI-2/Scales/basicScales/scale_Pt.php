<?php
include_once('../scaleCount/scaleCount.php');
include_once('../template/scaleMMPI.php');
class scale_Pt extends scaleMMPI{
    function __construct(){
        parent::initialiate();
    }

    function scale(){
        $count = 0;
        $count += $this->sc->calif_False($this->answer[2]);
        $count += $this->sc->calif_False($this->answer[8]);
        $count += $this->sc->calif_True($this->answer[10]);
        $count += $this->sc->calif_True($this->answer[15]);
        $count += $this->sc->calif_True($this->answer[22]);
        $count += $this->sc->calif_True($this->answer[30]);
        $count += $this->sc->calif_False($this->answer[32]);
        $count += $this->sc->calif_True($this->answer[37]);
        $count += $this->sc->calif_True($this->answer[55]);
        $count += $this->sc->calif_True($this->answer[64]);
        $count += $this->sc->calif_True($this->answer[72]);
        $count += $this->sc->calif_True($this->answer[81]);
        $count += $this->sc->calif_True($this->answer[88]);
        $count += $this->sc->calif_True($this->answer[93]);
        $count += $this->sc->calif_False($this->answer[108]);
        $count += $this->sc->calif_True($this->answer[129]);
        $count += $this->sc->calif_False($this->answer[139]);
        $count += $this->sc->calif_True($this->answer[146]);
        $count += $this->sc->calif_False($this->answer[164]);
        $count += $this->sc->calif_True($this->answer[169]);   
        $count += $this->sc->calif_False($this->answer[173]);
        $count += $this->sc->calif_True($this->answer[174]);
        $count += $this->sc->calif_True($this->answer[195]);
        $count += $this->sc->calif_True($this->answer[217]);
        $count += $this->sc->calif_True($this->answer[241]);
        $count += $this->sc->calif_True($this->answer[272]);
        $count += $this->sc->calif_True($this->answer[274]);
        $count += $this->sc->calif_True($this->answer[276]);
        $count += $this->sc->calif_True($this->answer[284]);
        $count += $this->sc->calif_True($this->answer[288]);
        $count += $this->sc->calif_False($this->answer[292]);
        $count += $this->sc->calif_True($this->answer[300]);
        $count += $this->sc->calif_True($this->answer[301]);
        $count += $this->sc->calif_True($this->answer[303]);
        $count += $this->sc->calif_True($this->answer[307]);
        $count += $this->sc->calif_True($this->answer[308]);
        $count += $this->sc->calif_True($this->answer[309]);
        $count += $this->sc->calif_True($this->answer[312]);
        $count += $this->sc->calif_True($this->answer[315]);
        $count += $this->sc->calif_True($this->answer[316]);
        $count += $this->sc->calif_True($this->answer[319]);
        $count += $this->sc->calif_False($this->answer[320]);
        $count += $this->sc->calif_True($this->answer[324]);
        $count += $this->sc->calif_True($this->answer[325]);
        $count += $this->sc->calif_True($this->answer[236]);
        $count += $this->sc->calif_True($this->answer[327]);
        $count += $this->sc->calif_True($this->answer[328]);
        $count += $this->sc->calif_True($this->answer[330]);
        return $count;
    }
}
?>