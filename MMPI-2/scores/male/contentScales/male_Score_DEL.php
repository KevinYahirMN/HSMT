<?php

class male_Score_DEL{
    function score($count){
        switch($count){
            case 0: $score = 33; break;
            case 1: $score = 38; break;
            case 2: $score = 42; break;   
            case 3: $score = 46; break;
            case 4: $score = 49; break;
            case 5: $score = 52; break; 
            case 6: $score = 55; break;
            case 7: $score = 58; break;
            case 8: $score = 61; break;   
            case 9: $score = 64; break;   
            case 10: $score = 70; break;
            case 11: $score = 73; break; 
            case 12: $score = 76; break;
            case 13: $score = 78; break;
            case 14: $score = 81; break;   
            case 15: $score = 83; break;   
            case 16: $score = 86; break;
            case 17: $score = 89; break;
            case 18: $score = 92; break;
            case 19: $score = 95; break;
            case 20: $score = 98; break;
            case 21: $score = 100; break;
            case 22: $score = 103; break;     
            default: $score = 105; break;
        }
        return $score;
    }
}

?>