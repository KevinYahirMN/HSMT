<?php

class female_Score_GF{
    function score($count){
        switch($count){
            case 0: $score = 0; break;
            case 29: $score = 31; break;
            case 30: $score = 34; break;
            case 31: $score = 37; break;   
            case 32: $score = 40; break;
            case 33: $score = 43; break;
            case 34: $score = 46; break; 
            case 35: $score = 49; break;
            case 36: $score = 52; break;
            case 37: $score = 55; break;   
            case 38: $score = 58; break;
            case 39: $score = 61; break;
            case 40: $score = 64; break; 
            case 41: $score = 67; break;
            case 42: $score = 70; break;
            case 43: $score = 73; break;   
            case 44: $score = 76; break;
            case 45: $score = 79; break;
            default: $score = 82; break;
        }
        return $score;
    }
}

?>