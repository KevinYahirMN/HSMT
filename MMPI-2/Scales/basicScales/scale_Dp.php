<?php
include_once('../scaleCount/scaleCount.php');
include_once('../template/scaleMMPI.php');
class scale_Dp extends scaleMMPI{
    function __construct(){
        parent::initialiate();
    }

    function scale(){
        $count = 0;
        $count += $this->sc->calif_False($this->answer[8]);
        $count += $this->sc->calif_False($this->answer[11]);
        $count += $this->sc->calif_True($this->answer[16]);
        $count += $this->sc->calif_True($this->answer[20]);
        $count += $this->sc->calif_True($this->answer[21]);
        $count += $this->sc->calif_True($this->answer[30]);
        $count += $this->sc->calif_True($this->answer[31]);
        $count += $this->sc->calif_False($this->answer[33]);
        $count += $this->sc->calif_True($this->answer[34]);
        $count += $this->sc->calif_True($this->answer[41]);
        $count += $this->sc->calif_True($this->answer[51]);
        $count += $this->sc->calif_True($this->answer[53]);
        $count += $this->sc->calif_True($this->answer[55]);
        $count += $this->sc->calif_False($this->answer[69]);
        $count += $this->sc->calif_True($this->answer[70]);
        $count += $this->sc->calif_False($this->answer[78]);
        $count += $this->sc->calif_True($this->answer[81]);
        $count += $this->sc->calif_False($this->answer[82]);
        $count += $this->sc->calif_True($this->answer[88]);
        $count += $this->sc->calif_True($this->answer[93]);
        $count += $this->sc->calif_False($this->answer[94]);
        $count += $this->sc->calif_True($this->answer[98]);
        $count += $this->sc->calif_True($this->answer[104]);
        $count += $this->sc->calif_True($this->answer[112]);
        $count += $this->sc->calif_False($this->answer[121]);
        $count += $this->sc->calif_False($this->answer[124]);
        $count += $this->sc->calif_False($this->answer[128]);
        $count += $this->sc->calif_False($this->answer[142]);
        $count += $this->sc->calif_False($this->answer[156]);
        $count += $this->sc->calif_False($this->answer[157]);
        $count += $this->sc->calif_False($this->answer[159]);
        $count += $this->sc->calif_False($this->answer[166]);
        $count += $this->sc->calif_False($this->answer[170]);
        $count += $this->sc->calif_False($this->answer[184]);
        $count += $this->sc->calif_True($this->answer[194]);
        $count += $this->sc->calif_True($this->answer[201]);
        $count += $this->sc->calif_False($this->answer[208]);
        $count += $this->sc->calif_False($this->answer[213]);
        $count += $this->sc->calif_False($this->answer[216]);
        $count += $this->sc->calif_True($this->answer[218]);
        $count += $this->sc->calif_True($this->answer[224]);
        $count += $this->sc->calif_False($this->answer[225]);
        $count += $this->sc->calif_False($this->answer[242]);
        $count += $this->sc->calif_True($this->answer[258]);
        $count += $this->sc->calif_False($this->answer[260]);
        $count += $this->sc->calif_False($this->answer[262]);
        $count += $this->sc->calif_True($this->answer[263]);
        $count += $this->sc->calif_False($this->answer[265]);
        $count += $this->sc->calif_False($this->answer[266]);
        $count += $this->sc->calif_True($this->answer[287]);
        return $count;
    }
}
?>