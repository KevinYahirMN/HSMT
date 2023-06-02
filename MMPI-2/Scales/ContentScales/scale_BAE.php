<?php
include_once('../scaleCount/scaleCount.php');
include_once('../template/scaleMMPI.php');
class scale_BAE extends scaleMMPI{
    function __construct(){
        parent::initialiate();
    }

    function scale(){
        $count = 0;
        $count += $this->sc->calif_False($this->answer[60]);
        $count += $this->sc->calif_True($this->answer[69]);
        $count += $this->sc->calif_True($this->answer[72]);
        $count += $this->sc->calif_False($this->answer[77]);
        $count += $this->sc->calif_False($this->answer[108]);
        $count += $this->sc->calif_True($this->answer[129]);
        $count += $this->sc->calif_True($this->answer[234]);
        $count += $this->sc->calif_True($this->answer[325]);
        $count += $this->sc->calif_True($this->answer[368]);
        $count += $this->sc->calif_True($this->answer[375]);
        $count += $this->sc->calif_True($this->answer[379]);
        $count += $this->sc->calif_True($this->answer[410]);
        $count += $this->sc->calif_True($this->answer[420]);
        $count += $this->sc->calif_True($this->answer[449]);
        $count += $this->sc->calif_True($this->answer[456]);
        $count += $this->sc->calif_True($this->answer[474]);
        $count += $this->sc->calif_True($this->answer[475]);
        $count += $this->sc->calif_True($this->answer[482]);
        $count += $this->sc->calif_True($this->answer[484]);
        $count += $this->sc->calif_True($this->answer[502]);
        $count += $this->sc->calif_True($this->answer[503]);
        $count += $this->sc->calif_True($this->answer[518]);
        $count += $this->sc->calif_True($this->answer[525]);
        $count += $this->sc->calif_True($this->answer[561]);   
        return $count;
    }
}
?>