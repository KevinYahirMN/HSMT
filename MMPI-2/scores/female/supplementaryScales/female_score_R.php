<?php

class female_Score_R{
    function score($count){
        switch($count){
            case 0: $score = 0; break;
            case 11: $score = 30; break;
            case 12: $score = 33; break;
            case 13: $score = 35; break;   
            case 14: $score = 38; break;
            case 15: $score = 41; break;
            case 16: $score = 43; break;
            case 17: $score = 46; break;   
            case 18: $score = 48; break;
            case 19: $score = 51; break;
            case 20: $score = 53; break;
            case 21: $score = 56; break;   
            case 22: $score = 58; break;
            case 23: $score = 61; break;
            case 24: $score = 63; break;
            case 25: $score = 66; break;   
            case 26: $score = 68; break;
            case 27: $score = 71; break;
            case 28: $score = 73; break;
            case 29: $score = 76; break;   
            case 30: $score = 78; break;
            case 31: $score = 81; break;
            case 32: $score = 83; break;
            case 33: $score = 86; break;   
            case 34: $score = 88; break;
            case 35: $score = 91; break;
            case 36: $score = 93; break; 
            default: $score = 96; break;
        }
        return $score;
    }
}

?>