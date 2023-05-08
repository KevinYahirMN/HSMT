<?php
include_once('../count/count.php');

class answer{
    
    function anwerCount($answer){
        $count = new count();
        $c = 0;
        $c += $count->calif_D($answer[0]);
        $c += $count->calif_C($answer[1]);
        $c += $count->calif_D($answer[2]);
        $c += $count->calif_D($answer[3]);
        $c += $count->calif_($answer[4]);
        $c += $count->calif_A($answer[5]);
        $c += $count->calif_E($answer[6]);
        $c += $count->calif_E($answer[7]);
        $c += $count->calif_A($answer[8]);
        $c += $count->calif_C($answer[9]);
        $c += $count->calif_H($answer[10]);
        $c += $count->calif_B($answer[11]);
        $c += $count->calif_E($answer[12]);
        $c += $count->calif_($answer[13]);
        $c += $count->calif_($answer[14]);
        $c += $count->calif_($answer[15]);
        $c += $count->calif_($answer[]);
        $c += $count->calif_($answer[]);
        $c += $count->calif_($answer[]);
        $c += $count->calif_($answer[]);
        $c += $count->calif_($answer[]);
        $c += $count->calif_($answer[]);
        $c += $count->calif_($answer[]);
        $c += $count->calif_($answer[]);
        $c += $count->calif_($answer[]);
        $c += $count->calif_($answer[]);
        $c += $count->calif_($answer[]);
        $c += $count->calif_($answer[]);
        $c += $count->calif_($answer[]);
        $c += $count->calif_($answer[]);
        $c += $count->calif_($answer[]);
        $c += $count->calif_($answer[]);
        $c += $count->calif_($answer[]);
        $c += $count->calif_($answer[]);
        $c += $count->calif_($answer[]);
        $c += $count->calif_($answer[]);
        $c += $count->calif_($answer[]);
        $c += $count->calif_($answer[]);
        $c += $count->calif_($answer[]);
        $c += $count->calif_($answer[]);
        $c += $count->calif_($answer[]);
        $c += $count->calif_($answer[]);
        $c += $count->calif_($answer[]);
        $c += $count->calif_($answer[]);
        $c += $count->calif_($answer[]);
        $c += $count->calif_($answer[]);
        $c += $count->calif_($answer[]);
        $c += $count->calif_($answer[]);
        $c += $count->calif_($answer[]);
        $c += $count->calif_($answer[]);
        $c += $count->calif_($answer[]);
        $c += $count->calif_($answer[]);
        $c += $count->calif_($answer[]);
        $c += $count->calif_($answer[]);
        $c += $count->calif_($answer[]);
        $c += $count->calif_($answer[]);
        $c += $count->calif_($answer[]);
        $c += $count->calif_($answer[]);
        $c += $count->calif_($answer[]);
        return $c;
    }

}


?>