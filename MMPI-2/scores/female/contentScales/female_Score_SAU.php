<?php

class female_Score_SAU{
    function score($count){
        switch($count){
            case 0: $score = 30; break;
            case 1: $score = 33; break;
            case 2: $score = 36; break;   
            case 3: $score = 39; break;
            case 4: $score = 42; break;
            case 5: $score = 45; break; 
            case 6: $score = 47; break;
            case 7: $score = 49; break;
            case 8: $score = 51; break;   
            case 9: $score = 53; break;
            case 10: $score =55; break;
            case 11: $score = 57; break; 
            case 12: $score = 59; break;
            case 13: $score = 61; break;
            case 14: $score = 62; break;   
            case 15: $score = 64; break;   
            case 16: $score = 66; break;
            case 17: $score = 68; break;
            case 18: $score = 70; break; 
            case 19: $score = 72; break;
            case 20: $score = 73; break;
            case 21: $score = 75; break;
            case 22: $score = 77; break;
            case 23: $score = 79; break;
            case 24: $score = 81; break;   
            case 25: $score = 83; break;   
            case 26: $score = 84; break;
            case 27: $score = 86; break;
            case 28: $score = 88; break; 
            case 29: $score = 90; break;
            case 30: $score = 92; break;
            case 31: $score = 94; break;
            case 32: $score = 96; break; 
            case 33: $score = 98; break;
            case 34: $score = 99; break;
            case 35: $score = 101; break;      
            default: $score = 103; break;
        }
        return $score;
    }
}

?>