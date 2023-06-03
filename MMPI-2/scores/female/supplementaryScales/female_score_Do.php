<?php

class female_Score_Do{
    function score($count){
        switch($count){
            case 0: $score = 0; break;
            case 10: $score = 32; break;
            case 11: $score = 35; break;
            case 12: $score = 39; break;   
            case 13: $score = 42; break;
            case 14: $score = 45; break;
            case 15: $score = 49; break; 
            case 16: $score = 52; break;
            case 17: $score = 56; break;
            case 18: $score = 59; break;   
            case 19: $score = 62; break;
            case 20: $score = 66; break;
            case 21: $score = 69; break; 
            case 22: $score = 73; break;
            case 23: $score = 76; break;
            case 24: $score = 80; break;   
            default: $score = 83; break;
        }
        return $score;
    }
}

?>