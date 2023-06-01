<?php
include_once('../scaleCount/scaleCount.php');
include_once('../template/scaleMMPI.php');
class scale_Mf_Male extends scaleMMPI{
    function __construct(){
        parent::initialiate();
    }

    function scale(){
        $count = 0;
        $count += $this->sc->calif_False($this->answer[0]);
        $count += $this->sc->calif_True($this->answer[3]);
        $count += $this->sc->calif_False($this->answer[18]);
        $count += $this->sc->calif_True($this->answer[24]);
        $count += $this->sc->calif_False($this->answer[25]);
        $count += $this->sc->calif_False($this->answer[26]);
        $count += $this->sc->calif_True($this->answer[61]);
        $count += $this->sc->calif_False($this->answer[62]);
        $count += $this->sc->calif_True($this->answer[63]);
        $count += $this->sc->calif_True($this->answer[66]);
        $count += $this->sc->calif_False($this->answer[67]);
        $count += $this->sc->calif_False($this->answer[68]);
        $count += $this->sc->calif_True($this->answer[73]);
        $count += $this->sc->calif_False($this->answer[75]);
        $count += $this->sc->calif_True($this->answer[79]);
        $count += $this->sc->calif_False($this->answer[85]);
        $count += $this->sc->calif_False($this->answer[102]);
        $count += $this->sc->calif_False($this->answer[103]);
        $count += $this->sc->calif_False($this->answer[106]);
        $count += $this->sc->calif_True($this->answer[111]);
        $count += $this->sc->calif_True($this->answer[118]);
        $count += $this->sc->calif_False($this->answer[119]);
        $count += $this->sc->calif_False($this->answer[120]);
        $count += $this->sc->calif_True($this->answer[121]);
        $count += $this->sc->calif_True($this->answer[127]);
        $count += $this->sc->calif_False($this->answer[131]);
        $count += $this->sc->calif_False($this->answer[132]);
        $count += $this->sc->calif_True($this->answer[136]);
        $count += $this->sc->calif_False($this->answer[162]);
        $count += $this->sc->calif_True($this->answer[165]);
        $count += $this->sc->calif_True($this->answer[176]);
        $count += $this->sc->calif_False($this->answer[183]);
        $count += $this->sc->calif_True($this->answer[186]);
        $count += $this->sc->calif_True($this->answer[190]);
        $count += $this->sc->calif_False($this->answer[192]);
        $count += $this->sc->calif_False($this->answer[193]);
        $count += $this->sc->calif_True($this->answer[195]);
        $count += $this->sc->calif_False($this->answer[196]);
        $count += $this->sc->calif_False($this->answer[198]);
        $count += $this->sc->calif_False($this->answer[200]);
        $count += $this->sc->calif_True($this->answer[204]);
        $count += $this->sc->calif_False($this->answer[206]);
        $count += $this->sc->calif_True($this->answer[208]);
        $count += $this->sc->calif_True($this->answer[218]);
        $count += $this->sc->calif_False($this->answer[230]);
        $count += $this->sc->calif_False($this->answer[234]);
        $count += $this->sc->calif_True($this->answer[235]);
        $count += $this->sc->calif_False($this->answer[236]);
        $count += $this->sc->calif_False($this->answer[238]);
        $count += $this->sc->calif_True($this->answer[250]);
        $count += $this->sc->calif_False($this->answer[253]);
        $count += $this->sc->calif_True($this->answer[255]);
        $count += $this->sc->calif_False($this->answer[256]);
        $count += $this->sc->calif_True($this->answer[267]);
        $count += $this->sc->calif_True($this->answer[270]);
        $count += $this->sc->calif_False($this->answer[271]);
        return $count;
    }
  
}
?>