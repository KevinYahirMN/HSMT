<?php

class suggestions_Rs{
    function score($count){
        switch($count){
            case 0: $score = 0; break;
            case 14: $score = 32; break;
            case 15: $score = 35; break;
            case 16: $score = 37; break;   
            case 17: $score = 40; break;
            case 18: $score = 42; break;
            case 19: $score = 45; break;
            case 20: $score = 48; break;
            case 21: $score = 50; break;
            case 22: $score = 53; break;   
            case 23: $score = 56; break;
            case 24: $score = 58; break;
            case 25: $score = 61; break;
            case 26: $score = 63; break;
            case 27: $score = 66; break;
            case 28: $score = 69; break;   
            case 29: $score = 71; break; 
            default: $score = 74; break;
        }
        return $score;
    }
}

?>