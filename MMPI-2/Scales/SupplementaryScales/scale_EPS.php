<?php
include_once('../scaleCount/scaleCount.php');
include_once('../template/scaleMMPI.php');
class scale_Eps extends scaleMMPI{
    function __construct(){
        parent::initialiate();
    }

    function scale(){
        $count = 0;
        $count += $this->sc->calif_False($this->answer[2]);
        $count += $this->sc->calif_False($this->answer[8]);
        $count += $this->sc->calif_True($this->answer[16]);
        $count += $this->sc->calif_True($this->answer[19]);
        $count += $this->sc->calif_True($this->answer[20]);
        $count += $this->sc->calif_True($this->answer[30]);
        $count += $this->sc->calif_True($this->answer[31]);
        $count += $this->sc->calif_True($this->answer[36]);
        $count += $this->sc->calif_True($this->answer[37]);
        $count += $this->sc->calif_True($this->answer[43]);
        $count += $this->sc->calif_False($this->answer[44]);
        $count += $this->sc->calif_True($this->answer[47]);
        $count += $this->sc->calif_True($this->answer[55]);
        $count += $this->sc->calif_True($this->answer[58]);
        $count += $this->sc->calif_True($this->answer[64]);
        $count += $this->sc->calif_False($this->answer[74]);
        $count += $this->sc->calif_True($this->answer[84]);
        $count += $this->sc->calif_True($this->answer[93]);
        $count += $this->sc->calif_False($this->answer[94]);
        $count += $this->sc->calif_True($this->answer[115]);
        $count += $this->sc->calif_True($this->answer[134]);
        $count += $this->sc->calif_False($this->answer[140]);
        $count += $this->sc->calif_True($this->answer[144]);
        $count += $this->sc->calif_True($this->answer[149]);
        $count += $this->sc->calif_False($this->answer[164]);
        $count += $this->sc->calif_True($this->answer[167]);
        $count += $this->sc->calif_True($this->answer[169]);
        $count += $this->sc->calif_True($this->answer[179]);
        $count += $this->sc->calif_False($this->answer[207]);
        $count += $this->sc->calif_True($this->answer[217]);
        $count += $this->sc->calif_True($this->answer[220]);
        $count += $this->sc->calif_False($this->answer[222]);
        $count += $this->sc->calif_True($this->answer[272]);
        $count += $this->sc->calif_True($this->answer[273]);
        $count += $this->sc->calif_True($this->answer[276]);
        $count += $this->sc->calif_False($this->answer[279]);
        $count += $this->sc->calif_True($this->answer[298]);
        $count += $this->sc->calif_True($this->answer[300]);
        $count += $this->sc->calif_True($this->answer[303]);
        $count += $this->sc->calif_True($this->answer[304]);
        $count += $this->sc->calif_True($this->answer[310]);
        $count += $this->sc->calif_True($this->answer[315]);
        $count += $this->sc->calif_True($this->answer[318]);
        $count += $this->sc->calif_True($this->answer[324]);
        $count += $this->sc->calif_True($this->answer[327]);
        $count += $this->sc->calif_False($this->answer[371]);
        $count += $this->sc->calif_True($this->answer[376]);
        $count += $this->sc->calif_True($this->answer[385]);
        $count += $this->sc->calif_True($this->answer[399]);
        $count += $this->sc->calif_False($this->answer[404]);
        $count += $this->sc->calif_True($this->answer[462]);
        $count += $this->sc->calif_True($this->answer[463]);
        $count += $this->sc->calif_True($this->answer[468]);
        $count += $this->sc->calif_True($this->answer[470]);
        $count += $this->sc->calif_True($this->answer[474]);
        $count += $this->sc->calif_True($this->answer[478]);
        $count += $this->sc->calif_True($this->answer[514]);
        $count += $this->sc->calif_True($this->answer[515]);
        $count += $this->sc->calif_False($this->answer[563]);
        $count += $this->sc->calif_True($this->answer[564]);
        return $count;
    }
}
?>