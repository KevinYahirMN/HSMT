<?php

class female_Score_RTR{
    function scale_RTR($count){
        switch($count){
            case 0: $score = 34; break;
            case 1: $score = 39; break;
            case 2: $score = 43; break;   
            case 3: $score = 46; break;
            case 4: $score = 49; break;
            case 5: $score = 51; break; 
            case 6: $score = 54; break;
            case 7: $score = 56; break;
            case 8: $score = 58; break;   
            case 9: $score = 60; break;
            case 10: $score = 63; break;
            case 11: $score = 66; break; 
            case 12: $score = 69; break;
            case 13: $score = 72; break;
            case 14: $score = 75; break;   
            case 15: $score = 78; break;
            case 16: $score = 80; break;
            case 17: $score = 83; break; 
            case 18: $score = 86; break;
            case 19: $score = 89; break;
            case 20: $score = 92; break;   
            case 21: $score = 95; break;
            case 22: $score = 97; break;
            case 23: $score = 100; break;
            case 24: $score = 103; break;
            case 25: $score = 106; break; 
            default: $score = 109; break; 
        }
        return $score;
    }
}

?>