<?php

class female_Score_DTR{
    function score($count){
        switch($count){
            case 0: $score = 34; break;
            case 1: $score = 37; break;
            case 2: $score = 40; break;   
            case 3: $score = 43; break;
            case 4: $score = 45; break;
            case 5: $score = 47; break; 
            case 6: $score = 49; break;
            case 7: $score = 51; break;
            case 8: $score = 52; break;   
            case 9: $score = 54; break;
            case 10: $score = 55; break;
            case 11: $score = 57; break; 
            case 12: $score = 59; break;
            case 13: $score = 61; break;
            case 14: $score = 63; break;   
            case 15: $score = 66; break;
            case 16: $score = 68; break;
            case 17: $score = 70; break; 
            case 18: $score = 72; break;
            case 19: $score = 74; break;
            case 20: $score = 76; break;   
            case 21: $score = 78; break;
            case 22: $score = 81; break;
            case 23: $score = 83; break;
            case 24: $score = 85; break;
            case 25: $score = 87; break;   
            case 26: $score = 89; break;
            case 27: $score = 91; break;
            case 28: $score = 94; break;
            case 29: $score = 96; break;
            case 30: $score = 98; break;   
            case 31: $score = 100; break;
            case 32: $score = 102; break;
            default: $score = 104; break;
        }
        return $score;
    }
}

?>