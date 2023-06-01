<?php
include_once('../scaleCount/scaleCount.php');
include_once('../template/scaleMMPI.php');
class scale_Fyo extends scaleMMPI{
    function __construct(){
        parent::initialiate();
    }

    function scale(){
        $count = 0;
        $count += $this->sc->calif_True($this->answer[1]);
        $count += $this->sc->calif_False($this->answer[22]);
        $count += $this->sc->calif_False($this->answer[30]);
        $count += $this->sc->calif_False($this->answer[31]);
        $count += $this->sc->calif_True($this->answer[32]);
        $count += $this->sc->calif_False($this->answer[35]);
        $count += $this->sc->calif_False($this->answer[38]);
        $count += $this->sc->calif_True($this->answer[44]);
        $count += $this->sc->calif_False($this->answer[52]);
        $count += $this->sc->calif_False($this->answer[59]);
        $count += $this->sc->calif_False($this->answer[69]);
        $count += $this->sc->calif_False($this->answer[81]);
        $count += $this->sc->calif_False($this->answer[86]);
        $count += $this->sc->calif_True($this->answer[97]);
        $count += $this->sc->calif_False($this->answer[118]);
        $count += $this->sc->calif_False($this->answer[127]);
        $count += $this->sc->calif_True($this->answer[140]);
        $count += $this->sc->calif_True($this->answer[158]);
        $count += $this->sc->calif_True($this->answer[168]);
        $count += $this->sc->calif_False($this->answer[174]);
        $count += $this->sc->calif_True($this->answer[176]);
        $count += $this->sc->calif_True($this->answer[178]);
        $count += $this->sc->calif_True($this->answer[188]);
        $count += $this->sc->calif_False($this->answer[195]);
        $count += $this->sc->calif_True($this->answer[198]);
        $count += $this->sc->calif_True($this->answer[208]);
        $count += $this->sc->calif_True($this->answer[212]);
        $count += $this->sc->calif_False($this->answer[214]);
        $count += $this->sc->calif_False($this->answer[220]);
        $count += $this->sc->calif_False($this->answer[224]);
        $count += $this->sc->calif_False($this->answer[228]);
        $count += $this->sc->calif_True($this->answer[229]);
        $count += $this->sc->calif_False($this->answer[235]);
        $count += $this->sc->calif_True($this->answer[244]);
        $count += $this->sc->calif_False($this->answer[245]);
        $count += $this->sc->calif_False($this->answer[306]);
        $count += $this->sc->calif_False($this->answer[309]);
        $count += $this->sc->calif_False($this->answer[315]);
        $count += $this->sc->calif_True($this->answer[322]);
        $count += $this->sc->calif_False($this->answer[327]);
        $count += $this->sc->calif_True($this->answer[384]);
        $count += $this->sc->calif_False($this->answer[390]);
        $count += $this->sc->calif_False($this->answer[393]);
        $count += $this->sc->calif_True($this->answer[405]);
        $count += $this->sc->calif_True($this->answer[412]);
        $count += $this->sc->calif_True($this->answer[424]);
        $count += $this->sc->calif_false($this->answer[440]);
        $count += $this->sc->calif_false($this->answer[446]);
        $count += $this->sc->calif_false($this->answer[457]);
        $count += $this->sc->calif_false($this->answer[463]);
        $count += $this->sc->calif_false($this->answer[468]);
        $count += $this->sc->calif_false($this->answer[470]);
        return $count;
    }
}
?>