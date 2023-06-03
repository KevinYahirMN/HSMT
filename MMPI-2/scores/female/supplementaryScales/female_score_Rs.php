<?php

class female_Score_Rs{
    function score($count){
        switch($count){
            case 0: $score = 0; break;
            case 16: $score = 32; break;
            case 17: $score = 35; break;
            case 18: $score = 38; break;   
            case 19: $score = 41; break;
            case 20: $score = 44; break;
            case 21: $score = 47; break; 
            case 22: $score = 50; break;
            case 23: $score = 53; break;
            case 24: $score = 56; break;   
            case 25: $score = 59; break;
            case 26: $score = 62; break;
            case 27: $score = 65; break; 
            case 28: $score = 68; break;
            case 29: $score = 71; break;   
            default: $score = 74; break;
        }
        return $score;
    }
}

?>