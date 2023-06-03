<?php

class male_Score_Dpr{
    function score($count){
        switch($count){
            case 0: $score = 30; break;
            case 1: $score = 32; break;
            case 2: $score = 34; break;   
            case 3: $score = 35; break;
            case 4: $score = 37; break;
            case 5: $score = 39; break;
            case 6: $score = 40; break;
            case 7: $score = 42; break;   
            case 8: $score = 44; break;
            case 9: $score = 45; break;
            case 10: $score = 47; break;
            case 11: $score = 49; break;
            case 12: $score = 50; break;   
            case 13: $score = 52; break;
            case 14: $score = 54; break;
            case 15: $score = 56; break;
            case 16: $score = 57; break;
            case 17: $score = 59; break;   
            case 18: $score = 61; break;
            case 19: $score = 62; break;
            case 20: $score = 64; break;
            case 21: $score = 66; break;
            case 22: $score = 67; break;   
            case 23: $score = 69; break;
            case 24: $score = 71; break;
            case 25: $score = 72; break;
            case 26: $score = 74; break;
            case 27: $score = 76; break;   
            case 28: $score = 77; break;
            case 29: $score = 79; break;
            case 30: $score = 81; break;
            case 31: $score = 83; break;
            case 32: $score = 84; break;   
            case 33: $score = 86; break;
            case 34: $score = 88; break;
            case 35: $score = 89; break;
            case 36: $score = 91; break;
            case 37: $score = 93; break;   
            case 38: $score = 94; break;
            case 39: $score = 96; break;
            case 40: $score = 98; break;
            default: $score = 99; break;
        }
        return $score;
    }
}

?>