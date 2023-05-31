<?php
include_once('../count/count.php');

class revision{
    private $obj;

    function __construct(){
        if($this->obj == null){
            $this->obj = new count();
        }
    }

    function answerCount($answer = array()){
        $count = 0;
        $count += $this->obj->calif_D($answer[0]);
        $count += $this->obj->calif_C($answer[1]);
        $count += $this->obj->calif_D($answer[2]);
        $count += $this->obj->calif_D($answer[3]);
        $count += $this->obj->calif_Forty($answer[4]);
        $count += $this->obj->calif_A($answer[5]);
        $count += $this->obj->calif_E($answer[6]);
        $count += $this->obj->calif_E($answer[7]);
        $count += $this->obj->calif_A($answer[8]);
        $count += $this->obj->calif_C($answer[9]);
        $count += $this->obj->calif_H($answer[10]);
        $count += $this->obj->calif_B($answer[11]);
        $count += $this->obj->calif_E($answer[12]);
        $count += $this->obj->calif_B($answer[13]);
        $count += $this->obj->calif_D($answer[14]);
        $count += $this->obj->calif_D($answer[15]);
        $count += $this->obj->calif_A($answer[16]);
        $count += $this->obj->calif_E($answer[17]);
        $count += $this->obj->calif_B($answer[18]);
        $count += $this->obj->calif_C($answer[19]);
        $count += $this->obj->calif_L($answer[20]);
        $count += $this->obj->calif_C($answer[21]);
        $count += $this->obj->calif_C($answer[22]);
        $count += $this->obj->calif_D($answer[23]);
        $count += $this->obj->calif_E($answer[24]);
        $count += $this->obj->calif_C($answer[25]);
        $count += $this->obj->calif_E($answer[26]);
        $count += $this->obj->calif_B($answer[27]);
        $count += $this->obj->calif_E($answer[28]);
        $count += $this->obj->calif_E($answer[29]);
        $count += $this->obj->calif_Seven($answer[30]);
        $count += $this->obj->calif_C($answer[31]);
        $count += $this->obj->calif_B($answer[32]);
        $count += $this->obj->calif_D($answer[33]);
        $count += $this->obj->calif_O($answer[34]);
        $count += $this->obj->calif_Ten($answer[35]);
        $count += $this->obj->calif_B($answer[36]);
        $count += $this->obj->calif_B($answer[37]);
        $count += $this->obj->calif_D($answer[38]);
        $count += $this->obj->calif_A($answer[39]);
        $count += $this->obj->calif_C($answer[40]);
        $count += $this->obj->calif_Q($answer[41]);
        $count += $this->obj->calif_A($answer[42]);
        $count += $this->obj->calif_E($answer[43]);
        $count += $this->obj->calif_T($answer[44]);
        $count += $this->obj->calif_C($answer[45]);
        $count += $this->obj->calif_B($answer[46]);
        $count += $this->obj->calif_T($answer[47]);
        $count += $this->obj->calif_Thirteen($answer[48]);
        $count += $this->obj->calif_B($answer[49]);
        $count += $this->obj->calif_G($answer[50]);
        $count += $this->obj->calif_A($answer[51]);
        $count += $this->obj->calif_A($answer[52]);
        $count += $this->obj->calif_C($answer[53]);
        $count += $this->obj->calif_C($answer[54]);
        $count += $this->obj->calif_D($answer[55]);
        $count += $this->obj->calif_C($answer[56]);
        $count += $this->obj->calif_Three($answer[57]);
        $count += $this->obj->calif_E($answer[58]);
        $count += $this->obj->calif_E($answer[59]);
        $count += $this->obj->calif_Four($answer[60]);
        $count += $this->obj->calif_D($answer[61]);
        $count += $this->obj->calif_A($answer[62]);
        $count += $this->obj->calif_Sixteen($answer[63]);
        $count += $this->obj->calif_D($answer[64]);
        $count += $this->obj->calif_C($answer[65]);
        $count += $this->obj->calif_A($answer[66]);
        $count += $this->obj->calif_D($answer[67]);
        $count += $this->obj->calif_Zero($answer[68]);
        $count += $this->obj->calif_M($answer[69]);
        $count += $this->obj->calif_F($answer[70]);
        $count += $this->obj->calif_A($answer[71]);
        $count += $this->obj->calif_Seventeen($answer[72]);
        $count += $this->obj->calif_Five($answer[73]);
        $count += $this->obj->calif_Eight($answer[74]);
        return $count;
    }

}


?>