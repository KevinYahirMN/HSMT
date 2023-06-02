<?php
include_once('../scaleCount/scaleCount.php');
include_once('../template/scaleMMPI.php');
class scale_MIE extends scaleMMPI{
    function __construct(){
        parent::initialiate();
    }

    function scale(){
        $count = 0;
        $count += $this->sc->calif_False($this->answer[114]);
        $count += $this->sc->calif_True($this->answer[153]);
        $count += $this->sc->calif_False($this->answer[162]);
        $count += $this->sc->calif_False($this->answer[185]);
        $count += $this->sc->calif_True($this->answer[316]);
        $count += $this->sc->calif_True($this->answer[321]);
        $count += $this->sc->calif_True($this->answer[328]);
        $count += $this->sc->calif_True($this->answer[333]);
        $count += $this->sc->calif_False($this->answer[384]);
        $count += $this->sc->calif_True($this->answer[391]);
        $count += $this->sc->calif_True($this->answer[394]);
        $count += $this->sc->calif_True($this->answer[396]);
        $count += $this->sc->calif_False($this->answer[400]);
        $count += $this->sc->calif_True($this->answer[434]);
        $count += $this->sc->calif_True($this->answer[437]);
        $count += $this->sc->calif_True($this->answer[440]);
        $count += $this->sc->calif_True($this->answer[446]);
        $count += $this->sc->calif_False($this->answer[452]);
        $count += $this->sc->calif_True($this->answer[457]);
        $count += $this->sc->calif_False($this->answer[561]);
        $count += $this->sc->calif_True($this->answer[467]);
        $count += $this->sc->calif_True($this->answer[470]);
        $count += $this->sc->calif_True($this->answer[554]);
        return $count;
    }
}
?>