<?php
include_once('../scaleCount/scaleCount.php');
include_once('../template/scaleMMPI.php');
class scale_RTR extends scaleMMPI{
    function __construct(){
        parent::initialiate();
    }

    function scale(){
        $count = 0;
        $count += $this->sc->calif_True($this->answer[21]);
        $count += $this->sc->calif_True($this->answer[91]);
        $count += $this->sc->calif_True($this->answer[273]);
        $count += $this->sc->calif_True($this->answer[305]);
        $count += $this->sc->calif_True($this->answer[363]);
        $count += $this->sc->calif_True($this->answer[367]);
        $count += $this->sc->calif_True($this->answer[372]);
        $count += $this->sc->calif_True($this->answer[374]);
        $count += $this->sc->calif_True($this->answer[375]);
        $count += $this->sc->calif_True($this->answer[376]);
        $count += $this->sc->calif_True($this->answer[390]);
        $count += $this->sc->calif_True($this->answer[398]);
        $count += $this->sc->calif_True($this->answer[481]);
        $count += $this->sc->calif_True($this->answer[487]);
        $count += $this->sc->calif_True($this->answer[490]);
        $count += $this->sc->calif_False($this->answer[492]);
        $count += $this->sc->calif_False($this->answer[493]);
        $count += $this->sc->calif_True($this->answer[494]);
        $count += $this->sc->calif_True($this->answer[496]);
        $count += $this->sc->calif_True($this->answer[498]);
        $count += $this->sc->calif_True($this->answer[499]);
        $count += $this->sc->calif_False($this->answer[500]);
        $count += $this->sc->calif_True($this->answer[503]);
        $count += $this->sc->calif_True($this->answer[527]);
        $count += $this->sc->calif_True($this->answer[538]);
        $count += $this->sc->calif_True($this->answer[553]);
        return $count;
    }
}
?>