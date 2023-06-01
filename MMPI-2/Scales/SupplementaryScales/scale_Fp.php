<?php
include_once('../scaleCount/scaleCount.php');
include_once('../template/scaleMMPI.php');
class scale_Fp extends scaleMMPI{
    function __construct(){
        parent::initialiate();
    }

    function scale(){
        $count = 0;
        $count += $this->sc->calif_True($this->answer[280]);
        $count += $this->sc->calif_True($this->answer[290]);
        $count += $this->sc->calif_True($this->answer[302]);
        $count += $this->sc->calif_True($this->answer[310]);
        $count += $this->sc->calif_True($this->answer[316]);
        $count += $this->sc->calif_True($this->answer[318]);
        $count += $this->sc->calif_True($this->answer[321]);
        $count += $this->sc->calif_True($this->answer[322]);
        $count += $this->sc->calif_True($this->answer[328]);
        $count += $this->sc->calif_True($this->answer[331]);
        $count += $this->sc->calif_True($this->answer[332]);
        $count += $this->sc->calif_True($this->answer[333]);
        $count += $this->sc->calif_False($this->answer[382]);
        $count += $this->sc->calif_True($this->answer[386]);
        $count += $this->sc->calif_True($this->answer[394]);
        $count += $this->sc->calif_False($this->answer[403]);
        $count += $this->sc->calif_True($this->answer[406]);
        $count += $this->sc->calif_True($this->answer[430]);
        $count += $this->sc->calif_True($this->answer[449]);
        $count += $this->sc->calif_True($this->answer[453]);
        $count += $this->sc->calif_True($this->answer[462]);
        $count += $this->sc->calif_True($this->answer[467]);
        $count += $this->sc->calif_True($this->answer[475]);
        $count += $this->sc->calif_True($this->answer[477]);
        $count += $this->sc->calif_True($this->answer[483]);
        $count += $this->sc->calif_True($this->answer[488]);
        $count += $this->sc->calif_False($this->answer[500]);
        $count += $this->sc->calif_True($this->answer[505]);
        $count += $this->sc->calif_True($this->answer[515]);
        $count += $this->sc->calif_True($this->answer[516]);
        $count += $this->sc->calif_True($this->answer[519]);
        $count += $this->sc->calif_True($this->answer[523]);
        $count += $this->sc->calif_True($this->answer[524]);
        $count += $this->sc->calif_True($this->answer[525]);
        $count += $this->sc->calif_True($this->answer[527]);
        $count += $this->sc->calif_True($this->answer[529]);
        $count += $this->sc->calif_True($this->answer[538]);
        $count += $this->sc->calif_True($this->answer[539]);
        $count += $this->sc->calif_True($this->answer[543]);
        $count += $this->sc->calif_True($this->answer[554]);
        return $count;
    }
}
?>