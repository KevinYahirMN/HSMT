<?php
include_once('../scaleCount/scaleCount.php');
include_once('../template/scaleMMPI.php');
class scale_ls2 extends scaleMMPI{
    function __construct(){
        parent::initialiate();
    }

    function scale(){
        $count = 0;
        $count += $this->sc->calif_False($this->answer[85]);
        $count += $this->sc->calif_True($this->answer[336]);
        $count += $this->sc->calif_False($this->answer[339]);
        $count += $this->sc->calif_False($this->answer[352]);
        $count += $this->sc->calif_False($this->answer[358]);
        $count += $this->sc->calif_False($this->answer[362]);
        $count += $this->sc->calif_True($this->answer[366]);
        $count += $this->sc->calif_False($this->answer[369]);
        return $count;
    }
}
?>