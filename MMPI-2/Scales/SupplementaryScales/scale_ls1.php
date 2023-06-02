<?php
include_once('../scaleCount/scaleCount.php');
include_once('../template/scaleMMPI.php');
class scale_Ls1 extends scaleMMPI{
    function __construct(){
        parent::initialiate();
    }

    function scale(){
        $count = 0;
        $count += $this->sc->calif_False($this->answer[48]);
        $count += $this->sc->calif_True($this->answer[157]);
        $count += $this->sc->calif_True($this->answer[160]);
        $count += $this->sc->calif_True($this->answer[166]);
        $count += $this->sc->calif_True($this->answer[184]);
        $count += $this->sc->calif_True($this->answer[242]);
        $count += $this->sc->calif_False($this->answer[261]);
        $count += $this->sc->calif_True($this->answer[264]);
        $count += $this->sc->calif_True($this->answer[274]);
        $count += $this->sc->calif_False($this->answer[279]);
        $count += $this->sc->calif_True($this->answer[288]);
        $count += $this->sc->calif_False($this->answer[320]);
        $count += $this->sc->calif_False($this->answer[341]);
        $count += $this->sc->calif_False($this->answer[359]);
        return $count;
    }
}
?>