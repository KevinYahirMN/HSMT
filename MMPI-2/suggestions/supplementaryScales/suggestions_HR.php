<?php

class suggestions_HR{
    function score($count){
        switch($count){
            case 9: $score = 30; break;
            case 10: $score = 33; break;
            case 11: $score = 36; break;
            case 12: $score = 39; break;
            case 13: $score = 43; break;
            case 14: $score = 46; break; 
            case 15: $score = 49; break;
            case 16: $score = 53; break;
            case 17: $score = 56; break;
            case 18: $score = 59; break;
            case 19: $score = 63; break;
            case 20: $score = 66; break;         
            case 21: $score = 69; break;
            case 22: $score = 72; break;
            case 23: $score = 76; break;
            case 24: $score = 79; break;
            case 25: $score = 82; break;
            case 26: $score = 86; break;   
            case 27: $score = 89; break;
            case 28: $score = 92; break;
            case 29: $score = 96; break;
            case 30: $score = 99; break;
            case 31: $score = 102; break;
            case 32: $score = 105; break;   
            case 33: $score = 109; break;
            case 34: $score = 112; break;
            case 35: $score = 115; break; 
            default: $score = 119; break;
        }
        return $score;
    }
}

?>