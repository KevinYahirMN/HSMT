<?php

class female_Score_Fp{
    function score($count){
        switch($count){
            case 0: $score = 39; break;
            case 1: $score = 42; break;
            case 2: $score = 45; break;   
            case 3: $score = 49; break;
            case 4: $score = 52; break;
            case 5: $score = 53; break; 
            case 6: $score = 56; break;
            case 7: $score = 59; break;
            case 8: $score = 63; break;   
            case 9: $score = 66; break;
            case 10: $score = 70; break;
            case 11: $score = 73; break; 
            case 12: $score = 76; break;
            case 13: $score = 80; break;
            case 14: $score = 83; break;   
            case 15: $score = 87; break;
            case 16: $score = 90; break;
            case 17: $score = 93; break; 
            case 18: $score = 97; break;
            case 19: $score = 101; break;
            case 20: $score = 104; break;   
            case 21: $score = 107; break;
            case 22: $score = 111; break;
            case 23: $score = 114; break;
            default: $score = 118; break;
        }
        return $score;
    }
}

?>