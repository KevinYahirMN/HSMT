<?php
class basicScalesFemale{
    private $c;

    //sumatoria de respuesta verdadero
    function calif_True($answer){
       if($answer == 'true'){
          $this->c++;
       }
    }
    
    //Sumatoria de respuesta falso
    function calif_False($answer){
      if($answer == 'false'){
          $this->c++;
      }
    }

    function scale_Mf_Female($answer = array()){
        $this->c = 0;
        $this->calif_False($answer[0]);
        $this->calif_True($answer[3]);
        $this->calif_False($answer[18]);
        $this->calif_True($answer[24]);
        $this->calif_False($answer[25]);
        $this->calif_False($answer[26]);
        $this->calif_True($answer[61]);
        $this->calif_False($answer[62]);
        $this->calif_True($answer[63]);
        $this->calif_True($answer[66]);
        $this->calif_False($answer[67]);
        $this->calif_False($answer[68]);
        $this->calif_True($answer[73]);
        $this->calif_False($answer[75]);
        $this->calif_True($answer[79]);
        $this->calif_False($answer[85]);
        $this->calif_False($answer[102]);
        $this->calif_False($answer[103]);
        $this->calif_False($answer[106]);
        $this->calif_True($answer[111]);
        $this->calif_True($answer[118]);
        $this->calif_False($answer[119]);
        $this->calif_True($answer[120]);
        $this->calif_True($answer[121]);
        $this->calif_True($answer[127]);
        $this->calif_False($answer[131]);
        $this->calif_False($answer[132]);
        $this->calif_True($answer[136]);
        $this->calif_False($answer[162]);
        $this->calif_False($answer[165]);
        $this->calif_True($answer[176]);
        $this->calif_False($answer[183]);
        $this->calif_True($answer[186]);
        $this->calif_True($answer[190]);
        $this->calif_False($answer[192]);
        $this->calif_False($answer[193]);
        $this->calif_True($answer[195]);
        $this->calif_False($answer[196]);
        $this->calif_False($answer[198]);
        $this->calif_False($answer[200]);
        $this->calif_True($answer[204]);
        $this->calif_False($answer[206]);
        $this->calif_False($answer[208]);
        $this->calif_True($answer[218]);
        $this->calif_False($answer[230]);
        $this->calif_False($answer[234]);
        $this->calif_True($answer[235]);
        $this->calif_False($answer[236]);
        $this->calif_False($answer[238]);
        $this->calif_True($answer[250]);
        $this->calif_False($answer[253]);
        $this->calif_True($answer[255]);
        $this->calif_False($answer[256]);
        $this->calif_False($answer[267]);
        $this->calif_True($answer[270]);
        $this->calif_False($answer[271]);
        return $this->c;
     }
}
?>