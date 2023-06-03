<?php

class female_Score_DEP{
    function score($count){
        switch($count){

            case 0: $score = 32; break;
            case 1: $score = 36; break;
            case 2: $score = 39; break;   
            case 3: $score = 42; break;
            case 4: $score = 45; break;
            case 5: $score = 48; break; 
            case 6: $score = 50; break;
            case 7: $score = 53; break;
            case 8: $score = 55; break;   
            case 9: $score = 57; break;
            case 10: $score =59; break;
            case 11: $score = 61; break; 
            case 12: $score = 63; break;
            case 13: $score = 65; break;
            case 14: $score = 68; break;   
            case 15: $score = 70; break;   
            case 16: $score = 72; break;
            case 17: $score = 74; break;
            case 18: $score = 76; break; 
            case 19: $score = 79; break;
            case 20: $score = 80; break;
            case 21: $score = 82; break;
            case 22: $score = 84; break;
            case 23: $score = 86; break;
            case 24: $score = 88; break;   
            case 25: $score = 91; break;   
            case 26: $score = 93; break;
            case 27: $score = 95; break;
            case 28: $score = 97; break; 
            case 29: $score = 99; break;
            case 30: $score = 101; break;
            case 31: $score = 103; break;
            case 32: $score = 105; break;     
            default: $score = 107; break;
        }
        return $score;
    }
}

?>