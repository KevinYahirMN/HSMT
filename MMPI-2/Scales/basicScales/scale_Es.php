<?php
include_once('../scaleCount/scaleCount.php');
include_once('../template/scaleMMPI.php');
class scale_Es extends scaleMMPI{
    function __construct(){
        parent::initialiate();
    }

    function scale(){
        $count = 0;
        $count += $this->sc->calif_False($this->answer[5]);
        $count += $this->sc->calif_False($this->answer[8]);
        $count += $this->sc->calif_False($this->answer[11]);
        $count += $this->sc->calif_True($this->answer[15]);
        $count += $this->sc->calif_True($this->answer[16]);
        $count += $this->sc->calif_True($this->answer[20]);
        $count += $this->sc->calif_True($this->answer[21]);
        $count += $this->sc->calif_True($this->answer[22]);
        $count += $this->sc->calif_True($this->answer[30]);
        $count += $this->sc->calif_True($this->answer[31]);
        $count += $this->sc->calif_False($this->answer[33]);
        $count += $this->sc->calif_True($this->answer[34]);
        $count += $this->sc->calif_True($this->answer[37]);
        $count += $this->sc->calif_True($this->answer[41]);
        $count += $this->sc->calif_True($this->answer[43]);
        $count += $this->sc->calif_True($this->answer[45]);
        $count += $this->sc->calif_True($this->answer[47]);
        $count += $this->sc->calif_True($this->answer[64]);
        $count += $this->sc->calif_True($this->answer[84]);
        $count += $this->sc->calif_False($this->answer[89]);
        $count += $this->sc->calif_False($this->answer[90]);
        $count += $this->sc->calif_True($this->answer[91]);
        $count += $this->sc->calif_False($this->answer[105]);
        $count += $this->sc->calif_True($this->answer[137]);
        $count += $this->sc->calif_True($this->answer[144]);
        $count += $this->sc->calif_True($this->answer[146]);
        $count += $this->sc->calif_False($this->answer[164]);
        $count += $this->sc->calif_True($this->answer[165]);
        $count += $this->sc->calif_True($this->answer[167]);
        $count += $this->sc->calif_True($this->answer[169]);
        $count += $this->sc->calif_False($this->answer[176]);
        $count += $this->sc->calif_False($this->answer[178]);
        $count += $this->sc->calif_True($this->answer[179]);
        $count += $this->sc->calif_True($this->answer[181]);
        $count += $this->sc->calif_True($this->answer[189]);
        $count += $this->sc->calif_False($this->answer[191]);
        $count += $this->sc->calif_False($this->answer[209]);
        $count += $this->sc->calif_True($this->answer[217]);
        $count += $this->sc->calif_True($this->answer[220]);
        $count += $this->sc->calif_True($this->answer[228]);
        $count += $this->sc->calif_True($this->answer[232]);
        $count += $this->sc->calif_True($this->answer[233]);
        $count += $this->sc->calif_True($this->answer[241]);
        $count += $this->sc->calif_True($this->answer[246]);
        $count += $this->sc->calif_True($this->answer[251]);
        $count += $this->sc->calif_False($this->answer[254]);
        $count += $this->sc->calif_True($this->answer[255]);
        $count += $this->sc->calif_True($this->answer[267]);
        $count += $this->sc->calif_True($this->answer[272]);
        $count += $this->sc->calif_True($this->answer[273]);
        $count += $this->sc->calif_False($this->answer[275]);
        $count += $this->sc->calif_True($this->answer[276]);
        $count += $this->sc->calif_False($this->answer[277]);
        $count += $this->sc->calif_True($this->answer[278]);
        $count += $this->sc->calif_False($this->answer[279]);
        $count += $this->sc->calif_True($this->answer[280]);
        $count += $this->sc->calif_True($this->answer[286]);
        $count += $this->sc->calif_False($this->answer[289]);
        $count += $this->sc->calif_True($this->answer[290]);
        $count += $this->sc->calif_True($this->answer[291]);
        $count += $this->sc->calif_False($this->answer[294]);
        $count += $this->sc->calif_True($this->answer[295]);
        $count += $this->sc->calif_True($this->answer[297]);
        $count += $this->sc->calif_True($this->answer[298]);
        $count += $this->sc->calif_True($this->answer[302]);
        $count += $this->sc->calif_True($this->answer[306]);
        $count += $this->sc->calif_True($this->answer[310]);
        $count += $this->sc->calif_True($this->answer[315]);
        $count += $this->sc->calif_True($this->answer[318]);
        $count += $this->sc->calif_True($this->answer[319]);
        $count += $this->sc->calif_True($this->answer[321]);
        $count += $this->sc->calif_True($this->answer[322]);
        $count += $this->sc->calif_True($this->answer[324]);
        $count += $this->sc->calif_True($this->answer[328]);
        $count += $this->sc->calif_True($this->answer[331]);
        $count += $this->sc->calif_True($this->answer[332]);
        $count += $this->sc->calif_False($this->answer[342]);
        $count += $this->sc->calif_True($this->answer[354]);
        return $count;
    }
}
?>