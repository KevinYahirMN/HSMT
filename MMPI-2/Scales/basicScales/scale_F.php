<?php
include_once('../scaleCount/scaleCount.php');
include_once('../../template/scaleMMPI.php');
class scale_F extends scaleMMPI{
    function __construct(){
        parent::initialiate();
    }

    function scale(){
        $count = 0;
        $count += $this->sc->calif_False($this->answer[5]);
        $count += $this->sc->calif_False($this->answer[11]);
        $count += $this->sc->calif_True($this->answer[17]);
        $count += $this->sc->calif_True($this->answer[23]);
        $count += $this->sc->calif_True($this->answer[29]);
        $count += $this->sc->calif_True($this->answer[35]);
        $count += $this->sc->calif_True($this->answer[41]);
        $count += $this->sc->calif_True($this->answer[47]);
        $count += $this->sc->calif_True($this->answer[53]);
        $count += $this->sc->calif_True($this->answer[59]);
        $count += $this->sc->calif_True($this->answer[65]);
        $count += $this->sc->calif_True($this->answer[71]);
        $count += $this->sc->calif_False($this->answer[77]);
        $count += $this->sc->calif_True($this->answer[83]);
        $count += $this->sc->calif_False($this->answer[89]);
        $count += $this->sc->calif_True($this->answer[95]);
        $count += $this->sc->calif_False($this->answer[101]);
        $count += $this->sc->calif_False($this->answer[107]);
        $count += $this->sc->calif_True($this->answer[113]);
        $count += $this->sc->calif_False($this->answer[119]);
        $count += $this->sc->calif_False($this->answer[125]);
        $count += $this->sc->calif_False($this->answer[131]);
        $count += $this->sc->calif_True($this->answer[137]);
        $count += $this->sc->calif_True($this->answer[143]);
        $count += $this->sc->calif_True($this->answer[149]);
        $count += $this->sc->calif_True($this->answer[155]);
        $count += $this->sc->calif_True($this->answer[161]);
        $count += $this->sc->calif_True($this->answer[167]);
        $count += $this->sc->calif_False($this->answer[173]);
        $count += $this->sc->calif_True($this->answer[179]);
        $count += $this->sc->calif_False($this->answer[185]);
        $count += $this->sc->calif_False($this->answer[191]);
        $count += $this->sc->calif_True($this->answer[197]);
        $count += $this->sc->calif_False($this->answer[203]);
        $count += $this->sc->calif_False($this->answer[209]);
        $count += $this->sc->calif_True($this->answer[215]);
        $count += $this->sc->calif_False($this->answer[221]);
        $count += $this->sc->calif_True($this->answer[227]);
        $count += $this->sc->calif_True($this->answer[233]);
        $count += $this->sc->calif_True($this->answer[239]);
        $count += $this->sc->calif_True($this->answer[245]);
        $count += $this->sc->calif_True($this->answer[251]);
        $count += $this->sc->calif_True($this->answer[257]);
        $count += $this->sc->calif_True($this->answer[263]);
        $count += $this->sc->calif_True($this->answer[269]);
        $count += $this->sc->calif_False($this->answer[275]);
        $count += $this->sc->calif_True($this->answer[281]);
        $count += $this->sc->calif_True($this->answer[287]);
        $count += $this->sc->calif_True($this->answer[293]);
        $count += $this->sc->calif_True($this->answer[299]);
        $count += $this->sc->calif_True($this->answer[305]);
        $count += $this->sc->calif_True($this->answer[311]);
        $count += $this->sc->calif_False($this->answer[317]);
        $count += $this->sc->calif_True($this->answer[323]);
        $count += $this->sc->calif_False($this->answer[329]);
        $count += $this->sc->calif_True($this->answer[335]);
        $count += $this->sc->calif_False($this->answer[342]);
        $count += $this->sc->calif_True($this->answer[348]);
        $count += $this->sc->calif_True($this->answer[354]);
        $count += $this->sc->calif_True($this->answer[360]);
        return $count;
    }
}
?>