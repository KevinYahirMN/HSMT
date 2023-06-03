<?php

class male_Score_GF{
    function score($count){
        switch($count){
            case 21: $score = 32; break;
            case 22: $score = 35; break;
            case 23: $score = 37; break;   
            case 24: $score = 40; break;
            case 25: $score = 43; break;
            case 26: $score = 45; break; 
            case 27: $score = 48; break;
            case 28: $score = 50; break;
            case 29: $score = 53; break;   
            case 30: $score = 56; break;
            case 31: $score = 58; break;
            case 32: $score = 61; break; 
            case 33: $score = 64; break;
            case 34: $score = 66; break;
            case 35: $score = 69; break;   
            case 36: $score = 72; break;
            case 37: $score = 74; break;
            case 38: $score = 77; break;
            case 39: $score = 79; break;   
            case 40: $score = 82; break;
            case 41: $score = 85; break;
            case 42: $score = 87; break; 
            case 43: $score = 90; break;
            case 44: $score = 93; break;
            case 45: $score = 95; break;   
            default: $score = 98; break;
        }
        return $score;
    }
}

?>