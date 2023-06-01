<?php
include_once('../scaleCount/scaleCount.php');
include_once('../template/scaleMMPI.php');
class scale_Pa extends scaleMMPI{
    function __construct(){
        parent::initialiate();
    }

    function scale(){
        $count = 0;
        $count += $this->sc->calif_True($this->answer[15]);
        $count += $this->sc->calif_True($this->answer[16]);
        $count += $this->sc->calif_True($this->answer[21]);
        $count += $this->sc->calif_True($this->answer[22]);
        $count += $this->sc->calif_True($this->answer[23]);
        $count += $this->sc->calif_True($this->answer[41]);
        $count += $this->sc->calif_False($this->answer[80]);
        $count += $this->sc->calif_False($this->answer[94]);
        $count += $this->sc->calif_False($this->answer[97]);
        $count += $this->sc->calif_True($this->answer[98]);
        $count += $this->sc->calif_False($this->answer[99]);
        $count += $this->sc->calif_False($this->answer[103]);
        $count += $this->sc->calif_False($this->answer[109]);
        $count += $this->sc->calif_True($this->answer[112]);
        $count += $this->sc->calif_True($this->answer[137]);
        $count += $this->sc->calif_True($this->answer[143]);
        $count += $this->sc->calif_True($this->answer[144]);
        $count += $this->sc->calif_True($this->answer[145]);
        $count += $this->sc->calif_True($this->answer[161]);
        $count += $this->sc->calif_True($this->answer[233]);
        $count += $this->sc->calif_False($this->answer[243]);
        $count += $this->sc->calif_False($this->answer[254]);
        $count += $this->sc->calif_True($this->answer[258]);
        $count += $this->sc->calif_False($this->answer[265]);
        $count += $this->sc->calif_True($this->answer[270]);
        $count += $this->sc->calif_True($this->answer[276]);
        $count += $this->sc->calif_False($this->answer[282]);
        $count += $this->sc->calif_False($this->answer[283]);
        $count += $this->sc->calif_True($this->answer[284]);
        $count += $this->sc->calif_False($this->answer[285]);
        $count += $this->sc->calif_False($this->answer[296]);
        $count += $this->sc->calif_True($this->answer[304]);
        $count += $this->sc->calif_True($this->answer[306]);
        $count += $this->sc->calif_False($this->answer[313]);
        $count += $this->sc->calif_False($this->answer[314]);
        $count += $this->sc->calif_True($this->answer[332]);
        $count += $this->sc->calif_True($this->answer[333]);
        $count += $this->sc->calif_True($this->answer[335]);
        $count += $this->sc->calif_True($this->answer[354]);
        $count += $this->sc->calif_True($this->answer[360]);
        return $count;
    }
}
?>