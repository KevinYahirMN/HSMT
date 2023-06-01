<?php
include_once('../scaleCount/scaleCount.php');
include_once('../template/scaleMMPI.php');
class scale_D extends scaleMMPI{
    function __construct(){
        parent::initialiate();
    }

    function scale(){
        $count = 0;
        $count += $this->sc->calif_False($this->answer[1]);
        $count += $this->sc->calif_True($this->answer[4]);
        $count += $this->sc->calif_False($this->answer[8]);
        $count += $this->sc->calif_False($this->answer[9]);
        $count += $this->sc->calif_True($this->answer[14]);
        $count += $this->sc->calif_True($this->answer[17]);
        $count += $this->sc->calif_False($this->answer[19]);
        $count += $this->sc->calif_False($this->answer[28]);
        $count += $this->sc->calif_True($this->answer[30]);
        $count += $this->sc->calif_False($this->answer[32]);
        $count += $this->sc->calif_False($this->answer[36]);
        $count += $this->sc->calif_True($this->answer[37]);
        $count += $this->sc->calif_True($this->answer[38]);
        $count += $this->sc->calif_False($this->answer[42]);
        $count += $this->sc->calif_False($this->answer[44]);
        $count += $this->sc->calif_True($this->answer[45]);
        $count += $this->sc->calif_False($this->answer[48]);
        $count += $this->sc->calif_False($this->answer[54]);
        $count += $this->sc->calif_True($this->answer[55]);
        $count += $this->sc->calif_False($this->answer[67]);
        $count += $this->sc->calif_True($this->answer[72]);
        $count += $this->sc->calif_False($this->answer[74]);
        $count += $this->sc->calif_False($this->answer[75]);
        $count += $this->sc->calif_True($this->answer[91]);
        $count += $this->sc->calif_False($this->answer[94]);
        $count += $this->sc->calif_False($this->answer[108]);
        $count += $this->sc->calif_True($this->answer[116]);
        $count += $this->sc->calif_False($this->answer[117]);
        $count += $this->sc->calif_True($this->answer[126]);
        $count += $this->sc->calif_True($this->answer[129]);
        $count += $this->sc->calif_False($this->answer[133]);
        $count += $this->sc->calif_False($this->answer[139]);
        $count += $this->sc->calif_False($this->answer[140]);
        $count += $this->sc->calif_False($this->answer[141]);
        $count += $this->sc->calif_False($this->answer[142]);
        $count += $this->sc->calif_True($this->answer[145]);
        $count += $this->sc->calif_True($this->answer[146]);
        $count += $this->sc->calif_False($this->answer[147]);
        $count += $this->sc->calif_False($this->answer[164]);
        $count += $this->sc->calif_True($this->answer[169]);
        $count += $this->sc->calif_True($this->answer[174]);
        $count += $this->sc->calif_False($this->answer[177]);
        $count += $this->sc->calif_True($this->answer[180]);
        $count += $this->sc->calif_False($this->answer[187]);
        $count += $this->sc->calif_False($this->answer[188]);
        $count += $this->sc->calif_False($this->answer[211]);
        $count += $this->sc->calif_False($this->answer[222]);
        $count += $this->sc->calif_False($this->answer[225]);
        $count += $this->sc->calif_True($this->answer[232]);
        $count += $this->sc->calif_False($this->answer[237]);
        $count += $this->sc->calif_False($this->answer[244]);
        $count += $this->sc->calif_False($this->answer[247]);
        $count += $this->sc->calif_False($this->answer[259]);
        $count += $this->sc->calif_False($this->answer[266]);
        $count += $this->sc->calif_False($this->answer[329]);
        return $count;
    }
}
?>