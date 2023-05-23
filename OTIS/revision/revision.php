<?php
include_once('../count/count.php');

class revision{
    
    function answerCount($answer){
        $count = new count();
        $c = 0;
        $c += $count->calif_D($answer[0]);
        $c += $count->calif_C($answer[1]);
        $c += $count->calif_D($answer[2]);
        $c += $count->calif_D($answer[3]);
        $c += $count->calif_Forty($answer[4]);
        $c += $count->calif_A($answer[5]);
        $c += $count->calif_E($answer[6]);
        $c += $count->calif_E($answer[7]);
        $c += $count->calif_A($answer[8]);
        $c += $count->calif_C($answer[9]);
        $c += $count->calif_H($answer[10]);
        $c += $count->calif_B($answer[11]);
        $c += $count->calif_E($answer[12]);
        $c += $count->calif_B($answer[13]);
        $c += $count->calif_D($answer[14]);
        $c += $count->calif_D($answer[15]);
        $c += $count->calif_A($answer[16]);
        $c += $count->calif_E($answer[17]);
        $c += $count->calif_B($answer[18]);
        $c += $count->calif_C($answer[19]);
        $c += $count->calif_L($answer[20]);
        $c += $count->calif_C($answer[21]);
        $c += $count->calif_C($answer[22]);
        $c += $count->calif_D($answer[23]);
        $c += $count->calif_E($answer[24]);
        $c += $count->calif_C($answer[25]);
        $c += $count->calif_E($answer[26]);
        $c += $count->calif_B($answer[27]);
        $c += $count->calif_E($answer[28]);
        $c += $count->calif_E($answer[29]);
        $c += $count->calif_Seven($answer[30]);
        $c += $count->calif_C($answer[31]);
        $c += $count->calif_B($answer[32]);
        $c += $count->calif_D($answer[33]);
        $c += $count->calif_O($answer[34]);
        $c += $count->calif_Ten($answer[35]);
        $c += $count->calif_B($answer[36]);
        $c += $count->calif_B($answer[37]);
        $c += $count->calif_D($answer[38]);
        $c += $count->calif_A($answer[39]);
        $c += $count->calif_C($answer[40]);
        $c += $count->calif_Q($answer[41]);
        $c += $count->calif_A($answer[42]);
        $c += $count->calif_E($answer[43]);
        $c += $count->calif_T($answer[44]);
        $c += $count->calif_C($answer[45]);
        $c += $count->calif_B($answer[46]);
        $c += $count->calif_T($answer[47]);
        $c += $count->calif_Thirteen($answer[48]);
        $c += $count->calif_B($answer[49]);
        $c += $count->calif_G($answer[50]);
        $c += $count->calif_A($answer[51]);
        $c += $count->calif_A($answer[52]);
        $c += $count->calif_C($answer[53]);
        $c += $count->calif_C($answer[54]);
        $c += $count->calif_D($answer[55]);
        $c += $count->calif_C($answer[56]);
        $c += $count->calif_Three($answer[57]);
        $c += $count->calif_E($answer[58]);
        $c += $count->calif_E($answer[59]);
        $c += $count->calif_Four($answer[60]);
        $c += $count->calif_D($answer[61]);
        $c += $count->calif_A($answer[62]);
        $c += $count->calif_Sixteen($answer[63]);
        $c += $count->calif_D($answer[64]);
        $c += $count->calif_C($answer[65]);
        $c += $count->calif_A($answer[66]);
        $c += $count->calif_D($answer[67]);
        $c += $count->calif_Zero($answer[68]);
        $c += $count->calif_M($answer[69]);
        $c += $count->calif_F($answer[70]);
        $c += $count->calif_A($answer[71]);
        $c += $count->calif_Seventeen($answer[72]);
        $c += $count->calif_Five($answer[73]);
        $c += $count->calif_Eight($answer[74]);
        return $c;
    }

}


?>