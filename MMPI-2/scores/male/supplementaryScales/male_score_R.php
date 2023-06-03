<?php

class male_Score_R{
    function score($count){
        switch($count){
            case 0: $score = 0; break;
            case 9: $score = 31; break;
            case 10: $score = 34; break;
            case 11: $score = 36; break;   
            case 12: $score = 38; break;
            case 13: $score = 40; break;
            case 14: $score = 43; break; 
            case 15: $score = 45; break;
            case 16: $score = 47; break;   
            case 17: $score = 49; break;
            case 18: $score = 52; break;
            case 19: $score = 54; break; 
            case 20: $score = 56; break;
            case 21: $score = 59; break;   
            case 22: $score = 61; break;
            case 23: $score = 63; break;
            case 24: $score = 65; break; 
            case 25: $score = 68; break;
            case 26: $score = 70; break;   
            case 27: $score = 72; break;
            case 28: $score = 74; break;
            case 29: $score = 77; break; 
            case 30: $score = 79; break;
            case 31: $score = 81; break;   
            case 32: $score = 83; break;
            case 33: $score = 86; break;
            case 34: $score = 88; break; 
            case 35: $score = 90; break;
            case 36: $score = 93; break;   
            default: $score = 95; break;
        }
        return $score;
    }
}

?>