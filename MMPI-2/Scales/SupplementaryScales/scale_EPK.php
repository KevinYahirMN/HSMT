<?php
include_once('../scaleCount/scaleCount.php');
include_once('../template/scaleMMPI.php');
class scale_Epk extends scaleMMPI{
    function __construct(){
        parent::initialiate();
    }

    function scale(){
        $count = 0;
        $count += $this->sc->calif_False($this->answer[1]);
        $count += $this->sc->calif_False($this->answer[2]);
        $count += $this->sc->calif_False($this->answer[8]);
        $count += $this->sc->calif_True($this->answer[15]);
        $count += $this->sc->calif_True($this->answer[16]);
        $count += $this->sc->calif_True($this->answer[21]);
        $count += $this->sc->calif_True($this->answer[22]);
        $count += $this->sc->calif_True($this->answer[29]);
        $count += $this->sc->calif_True($this->answer[30]);
        $count += $this->sc->calif_True($this->answer[31]);
        $count += $this->sc->calif_True($this->answer[36]);
        $count += $this->sc->calif_True($this->answer[38]);
        $count += $this->sc->calif_True($this->answer[47]);
        $count += $this->sc->calif_False($this->answer[48]);
        $count += $this->sc->calif_True($this->answer[51]);
        $count += $this->sc->calif_True($this->answer[55]);
        $count += $this->sc->calif_True($this->answer[58]);
        $count += $this->sc->calif_True($this->answer[64]);
        $count += $this->sc->calif_False($this->answer[74]);
        $count += $this->sc->calif_True($this->answer[81]);
        $count += $this->sc->calif_True($this->answer[84]);
        $count += $this->sc->calif_True($this->answer[91]);
        $count += $this->sc->calif_True($this->answer[93]);
        $count += $this->sc->calif_False($this->answer[94]);
        $count += $this->sc->calif_True($this->answer[100]);
        $count += $this->sc->calif_False($this->answer[124]);
        $count += $this->sc->calif_True($this->answer[134]);
        $count += $this->sc->calif_False($this->answer[139]);
        $count += $this->sc->calif_True($this->answer[149]);
        $count += $this->sc->calif_True($this->answer[167]);
        $count += $this->sc->calif_True($this->answer[169]);
        $count += $this->sc->calif_True($this->answer[195]);
        $count += $this->sc->calif_True($this->answer[220]);
        $count += $this->sc->calif_True($this->answer[273]);
        $count += $this->sc->calif_True($this->answer[276]);
        $count += $this->sc->calif_True($this->answer[301]);
        $count += $this->sc->calif_True($this->answer[302]);
        $count += $this->sc->calif_True($this->answer[304]);
        $count += $this->sc->calif_True($this->answer[315]);
        $count += $this->sc->calif_True($this->answer[318]);
        $count += $this->sc->calif_True($this->answer[326]);
        $count += $this->sc->calif_True($this->answer[327]);
        $count += $this->sc->calif_True($this->answer[338]);
        $count += $this->sc->calif_True($this->answer[346]);
        $count += $this->sc->calif_True($this->answer[348]);
        $count += $this->sc->calif_True($this->answer[366]);
        return $count;
    }
}
?>