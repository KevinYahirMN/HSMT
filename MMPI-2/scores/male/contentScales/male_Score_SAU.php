<?php

class male_Score_SAU{
    function score($count){
        switch($count){
            case 0: $score = 30; break;
            case 1: $score = 32; break;
            case 2: $score = 36; break;   
            case 3: $score = 40; break;
            case 4: $score = 43; break;
            case 5: $score = 45; break; 
            case 6: $score = 48; break;
            case 7: $score = 50; break;
            case 8: $score = 52; break;   
            case 9: $score = 54; break;
            case 10: $score =56; break;             
            case 11: $score = 58; break; 
            case 12: $score = 60; break;
            case 13: $score = 62; break;
            case 14: $score = 64; break;   
            case 15: $score = 66; break;   
            case 16: $score = 68; break;
            case 17: $score = 70; break;
            case 18: $score = 71; break; 
            case 19: $score = 73; break;
            case 20: $score = 75; break;
            case 21: $score = 77; break;
            case 22: $score = 79; break;
            case 23: $score = 81; break;
            case 24: $score = 83; break;   
            case 25: $score = 85; break;   
            case 26: $score = 87; break;
            case 27: $score = 89; break;
            case 28: $score = 91; break; 
            case 29: $score = 93; break;
            case 30: $score = 95; break;
            case 31: $score = 97; break;
            case 32: $score = 99; break; 
            case 33: $score = 101; break;
            case 34: $score = 103; break;
            case 35: $score = 105; break; 
            default: $score = 107; break;
        }
        return $score;
    }
}

?>