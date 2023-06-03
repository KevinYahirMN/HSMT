<?php

class male_Score_PTA{
    function score($count){
        switch($count){
            case 0: $score = 30; break;
            case 1: $score = 32; break;
            case 2: $score = 35; break;   
            case 3: $score = 37; break;
            case 4: $score = 39; break;
            case 5: $score = 42; break; 
            case 6: $score = 44; break;
            case 7: $score = 46; break;  
            case 8: $score = 49; break;   
            case 9: $score = 51; break;
            case 10: $score = 54;break;
            case 11: $score = 60; break; 
            case 12: $score = 63; break;
            case 13: $score = 66; break;
            case 14: $score = 69; break;   
            case 15: $score = 70; break;   
            case 16: $score = 73; break;
            case 17: $score = 77; break;   
            case 18: $score = 80; break;   
            default: $score = 83; break;
        }
        return $score;
    }
}

?>