<?php
include_once('../scaleCount/scaleCount.php');
include_once('../template/scaleMMPI.php');
class scale_DEL extends scaleMMPI{
    function __construct(){
        parent::initialiate();
    }

    function scale(){
        $count = 0;
        $count += $this->sc->calif_True($this->answer[23]);
        $count += $this->sc->calif_True($this->answer[31]);
        $count += $this->sc->calif_True($this->answer[59]);
        $count += $this->sc->calif_True($this->answer[95]);
        $count += $this->sc->calif_True($this->answer[137]);
        $count += $this->sc->calif_True($this->answer[161]);
        $count += $this->sc->calif_True($this->answer[197]);
        $count += $this->sc->calif_True($this->answer[227]);
        $count += $this->sc->calif_True($this->answer[258]);
        $count += $this->sc->calif_True($this->answer[297]);
        $count += $this->sc->calif_True($this->answer[310]);
        $count += $this->sc->calif_True($this->answer[315]);
        $count += $this->sc->calif_True($this->answer[318]);
        $count += $this->sc->calif_True($this->answer[332]);
        $count += $this->sc->calif_True($this->answer[335]);
        $count += $this->sc->calif_True($this->answer[354]);
        $count += $this->sc->calif_True($this->answer[360]);
        $count += $this->sc->calif_False($this->answer[426]);
        $count += $this->sc->calif_True($this->answer[465]);
        $count += $this->sc->calif_True($this->answer[489]);
        $count += $this->sc->calif_True($this->answer[507]);
        $count += $this->sc->calif_True($this->answer[542]);
        $count += $this->sc->calif_True($this->answer[550]);
        return $count;
    }
}
?>