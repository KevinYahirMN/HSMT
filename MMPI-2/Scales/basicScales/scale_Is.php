<?php
include_once('../scaleCount/scaleCount.php');
include_once('../template/scaleMMPI.php');
class scale_Is extends scaleMMPI{
    function __construct(){
        parent::initialiate();
    }

    function scale(){
        $count = 0;
        $count += $this->sc->calif_False($this->answer[24]);
        $count += $this->sc->calif_True($this->answer[30]);
        $count += $this->sc->calif_False($this->answer[31]);
        $count += $this->sc->calif_False($this->answer[48]);
        $count += $this->sc->calif_True($this->answer[55]);
        $count += $this->sc->calif_True($this->answer[69]);
        $count += $this->sc->calif_False($this->answer[78]);
        $count += $this->sc->calif_False($this->answer[85]);
        $count += $this->sc->calif_True($this->answer[99]);
        $count += $this->sc->calif_True($this->answer[103]);
        $count += $this->sc->calif_False($this->answer[105]);
        $count += $this->sc->calif_True($this->answer[109]);
        $count += $this->sc->calif_False($this->answer[111]);
        $count += $this->sc->calif_True($this->answer[126]);
        $count += $this->sc->calif_False($this->answer[130]);
        $count += $this->sc->calif_True($this->answer[134]);
        $count += $this->sc->calif_True($this->answer[157]);
        $count += $this->sc->calif_True($this->answer[160]);
        $count += $this->sc->calif_True($this->answer[166]);
        $count += $this->sc->calif_False($this->answer[180]);
        $count += $this->sc->calif_True($this->answer[184]);
        $count += $this->sc->calif_False($this->answer[188]);
        $count += $this->sc->calif_False($this->answer[206]);
        $count += $this->sc->calif_False($this->answer[208]);
        $count += $this->sc->calif_True($this->answer[214]);
        $count += $this->sc->calif_False($this->answer[230]);
        $count += $this->sc->calif_False($this->answer[236]);
        $count += $this->sc->calif_True($this->answer[242]);
        $count += $this->sc->calif_True($this->answer[250]);
        $count += $this->sc->calif_False($this->answer[254]);
        $count += $this->sc->calif_False($this->answer[261]);
        $count += $this->sc->calif_True($this->answer[264]);
        $count += $this->sc->calif_False($this->answer[266]);
        $count += $this->sc->calif_True($this->answer[274]);
        $count += $this->sc->calif_False($this->answer[279]);
        $count += $this->sc->calif_True($this->answer[283]);
        $count += $this->sc->calif_True($this->answer[288]);
        $count += $this->sc->calif_True($this->answer[295]);
        $count += $this->sc->calif_True($this->answer[301]);
        $count += $this->sc->calif_True($this->answer[307]);
        $count += $this->sc->calif_False($this->answer[320]);
        $count += $this->sc->calif_True($this->answer[325]);
        $count += $this->sc->calif_False($this->answer[327]);
        $count += $this->sc->calif_False($this->answer[334]);
        $count += $this->sc->calif_True($this->answer[336]);
        $count += $this->sc->calif_True($this->answer[337]);
        $count += $this->sc->calif_False($this->answer[339]);
        $count += $this->sc->calif_False($this->answer[341]);
        $count += $this->sc->calif_False($this->answer[343]);
        $count += $this->sc->calif_False($this->answer[344]);
        $count += $this->sc->calif_True($this->answer[346]);
        $count += $this->sc->calif_True($this->answer[347]);
        $count += $this->sc->calif_False($this->answer[349]);
        $count += $this->sc->calif_True($this->answer[350]);
        $count += $this->sc->calif_True($this->answer[351]);
        $count += $this->sc->calif_False($this->answer[352]);
        $count += $this->sc->calif_False($this->answer[353]);
        $count += $this->sc->calif_True($this->answer[356]);
        $count += $this->sc->calif_False($this->answer[357]);
        $count += $this->sc->calif_False($this->answer[358]);
        $count += $this->sc->calif_False($this->answer[359]);
        $count += $this->sc->calif_False($this->answer[361]);
        $count += $this->sc->calif_False($this->answer[362]);
        $count += $this->sc->calif_True($this->answer[363]);
        $count += $this->sc->calif_False($this->answer[365]);
        $count += $this->sc->calif_True($this->answer[366]);
        $count += $this->sc->calif_True($this->answer[367]);
        $count += $this->sc->calif_True($this->answer[368]);
        $count += $this->sc->calif_False($this->answer[369]);
        return $count;
    }
}
?>