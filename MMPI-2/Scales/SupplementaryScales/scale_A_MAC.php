<?php
include_once('../scaleCount/scaleCount.php');
include_once('../template/scaleMMPI.php');
class scale_Fyo extends scaleMMPI{
    function __construct(){
        parent::initialiate();
    }

    function scale(){
        $count = 0;
        $count += $this->sc->calif_True($this->answer[6]);
        $count += $this->sc->calif_True($this->answer[23]);
        $count += $this->sc->calif_True($this->answer[35]);
        $count += $this->sc->calif_True($this->answer[48]);
        $count += $this->sc->calif_True($this->answer[51]);
        $count += $this->sc->calif_True($this->answer[68]);
        $count += $this->sc->calif_True($this->answer[71]);
        $count += $this->sc->calif_False($this->answer[72]);
        $count += $this->sc->calif_True($this->answer[81]);
        $count += $this->sc->calif_True($this->answer[83]);
        $count += $this->sc->calif_True($this->answer[102]);
        $count += $this->sc->calif_True($this->answer[104]);
        $count += $this->sc->calif_False($this->answer[106]);
        $count += $this->sc->calif_True($this->answer[112]);
        $count += $this->sc->calif_True($this->answer[114]);
        $count += $this->sc->calif_False($this->answer[116]);
        $count += $this->sc->calif_True($this->answer[127]);
        $count += $this->sc->calif_False($this->answer[136]);
        $count += $this->sc->calif_False($this->answer[159]);
        $count += $this->sc->calif_False($this->answer[165]);
        $count += $this->sc->calif_False($this->answer[167]);
        $count += $this->sc->calif_True($this->answer[171]);
        $count += $this->sc->calif_True($this->answer[201]);
        $count += $this->sc->calif_True($this->answer[213]);
        $count += $this->sc->calif_True($this->answer[223]);
        $count += $this->sc->calif_True($this->answer[228]);
        $count += $this->sc->calif_True($this->answer[237]);
        $count += $this->sc->calif_False($this->answer[250]);
        $count += $this->sc->calif_True($this->answer[256]);
        $count += $this->sc->calif_True($this->answer[265]);
        $count += $this->sc->calif_True($this->answer[179]);
        $count += $this->sc->calif_False($this->answer[286]);
        $count += $this->sc->calif_False($this->answer[298]);
        $count += $this->sc->calif_False($this->answer[324]);
        $count += $this->sc->calif_True($this->answer[341]);
        $count += $this->sc->calif_True($this->answer[343]);
        $count += $this->sc->calif_True($this->answer[386]);
        $count += $this->sc->calif_True($this->answer[407]);
        $count += $this->sc->calif_True($this->answer[411]);
        $count += $this->sc->calif_True($this->answer[413]);
        $count += $this->sc->calif_True($this->answer[421]);
        $count += $this->sc->calif_True($this->answer[433]);
        $count += $this->sc->calif_True($this->answer[438]);
        $count += $this->sc->calif_True($this->answer[444]);
        $count += $this->sc->calif_True($this->answer[455]);
        $count += $this->sc->calif_True($this->answer[472]);
        $count += $this->sc->calif_True($this->answer[501]);
        $count += $this->sc->calif_True($this->answer[505]);
        $count += $this->sc->calif_True($this->answer[548]);
        return $count;
    }
}
?>