<?php

class suggestions_Fp{
    function score($count){
        switch($count){
            case 0: $score = 40; break;
            case 1: $score = 44; break;
            case 2: $score = 47; break;   
            case 3: $score = 51; break;
            case 4: $score = 54; break;
            case 5: $score = 58; break; 
            case 6: $score = 61; break;
            case 7: $score = 65; break;
            case 8: $score = 68; break;   
            case 9: $score = 72; break;
            case 10: $score = 76; break;
            case 11: $score = 79; break; 
            case 12: $score = 83; break;
            case 13: $score = 86; break;
            case 14: $score = 90; break;   
            case 15: $score = 93; break;
            case 16: $score = 97; break;
            case 17: $score = 100; break; 
            case 18: $score = 104; break;
            case 19: $score = 108; break;
            case 20: $score = 111; break;   
            case 21: $score = 115; break;
            default: $score = 118; break;
        }
        return $score;
    }
}

?>