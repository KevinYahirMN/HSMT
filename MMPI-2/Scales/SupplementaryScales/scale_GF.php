<?php
include_once('../scaleCount/scaleCount.php');
include_once('../template/scaleMMPI.php');
class scale_Gf extends scaleMMPI{
    function __construct(){
        parent::initialiate();
    }

    function scale(){
        $count = 0;
        $count += $this->sc->calif_False($this->answer[0]);
        $count += $this->sc->calif_False($this->answer[26]);
        $count += $this->sc->calif_True($this->answer[61]);
        $count += $this->sc->calif_False($this->answer[62]);
        $count += $this->sc->calif_True($this->answer[66]);
        $count += $this->sc->calif_False($this->answer[67]);
        $count += $this->sc->calif_False($this->answer[78]);
        $count += $this->sc->calif_False($this->answer[83]);
        $count += $this->sc->calif_False($this->answer[104]);
        $count += $this->sc->calif_True($this->answer[118]);
        $count += $this->sc->calif_True($this->answer[120]);
        $count += $this->sc->calif_False($this->answer[122]);
        $count += $this->sc->calif_True($this->answer[127]);
        $count += $this->sc->calif_False($this->answer[132]);
        $count += $this->sc->calif_False($this->answer[154]);
        $count += $this->sc->calif_False($this->answer[196]);
        $count += $this->sc->calif_False($this->answer[200]);
        $count += $this->sc->calif_True($this->answer[202]);
        $count += $this->sc->calif_False($this->answer[219]);
        $count += $this->sc->calif_False($this->answer[230]);
        $count += $this->sc->calif_False($this->answer[237]);
        $count += $this->sc->calif_False($this->answer[238]);
        $count += $this->sc->calif_False($this->answer[249]);
        $count += $this->sc->calif_False($this->answer[256]);
        $count += $this->sc->calif_True($this->answer[262]);
        $count += $this->sc->calif_False($this->answer[263]);
        $count += $this->sc->calif_True($this->answer[265]);
        $count += $this->sc->calif_False($this->answer[271]);
        $count += $this->sc->calif_False($this->answer[286]);
        $count += $this->sc->calif_True($this->answer[352]);
        $count += $this->sc->calif_True($this->answer[383]);
        $count += $this->sc->calif_False($this->answer[405]);
        $count += $this->sc->calif_False($this->answer[416]);
        $count += $this->sc->calif_True($this->answer[425]);
        $count += $this->sc->calif_True($this->answer[448]);
        $count += $this->sc->calif_True($this->answer[455]);
        $count += $this->sc->calif_False($this->answer[464]);
        $count += $this->sc->calif_True($this->answer[472]);
        $count += $this->sc->calif_False($this->answer[476]);
        $count += $this->sc->calif_False($this->answer[486]);
        $count += $this->sc->calif_False($this->answer[509]);
        $count += $this->sc->calif_False($this->answer[510]);
        $count += $this->sc->calif_False($this->answer[536]);
        $count += $this->sc->calif_False($this->answer[547]);
        $count += $this->sc->calif_False($this->answer[549]);
        $count += $this->sc->calif_True($this->answer[551]);
        return $count;
    }
}
?>