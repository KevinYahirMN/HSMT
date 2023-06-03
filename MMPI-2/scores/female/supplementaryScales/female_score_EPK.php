<?php

class female_Score_EPK{
    function score($count){
        switch($count){
            case 0: $score = 36; break;
            case 1: $score = 37; break;
            case 2: $score = 39; break;   
            case 3: $score = 41; break;
            case 4: $score = 42; break;
            case 5: $score = 44; break; 
            case 6: $score = 45; break;
            case 7: $score = 47; break;
            case 8: $score = 49; break;   
            case 9: $score = 50; break;
            case 10: $score = 52; break;
            case 11: $score = 53; break; 
            case 12: $score = 55; break;
            case 13: $score = 57; break;
            case 14: $score = 58; break;   
            case 15: $score = 60; break;
            case 16: $score = 61; break;
            case 17: $score = 63; break; 
            case 18: $score = 65; break;
            case 19: $score = 66; break;
            case 20: $score = 68; break;   
            case 21: $score = 69; break;
            case 22: $score = 71; break;
            case 23: $score = 73; break; 
            case 24: $score = 74; break;
            case 25: $score = 76; break;
            case 26: $score = 77; break;   
            case 27: $score = 79; break;
            case 28: $score = 81; break;
            case 29: $score = 82; break; 
            case 30: $score = 84; break;
            case 31: $score = 85; break;
            case 32: $score = 87; break;   
            case 33: $score = 89; break;
            case 34: $score = 90; break;
            case 35: $score = 92; break; 
            case 36: $score = 93; break;
            case 37: $score = 95; break;
            case 38: $score = 96; break;   
            case 39: $score = 98; break;
            case 40: $score = 100; break;
            case 41: $score = 101; break; 
            case 42: $score = 103; break;
            case 43: $score = 104; break;
            case 44: $score = 106; break;   
            case 45: $score = 108; break;   
            default: $score = 109; break;
        }
        return $score;
    }
}

?>