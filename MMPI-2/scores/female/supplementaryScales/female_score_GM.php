<?php

class female_Score_GM{
    function score($count){
        $score = ($count*2);
        switch($count){
            case 18: $score = 30; break;
            case 19: $score = 32; break;
            case 20: $score = 34; break;   
            case 21: $score = 35; break;
            case 22: $score = 37; break;
            case 23: $score = 39; break; 
            case 24: $score = 41; break;
            case 25: $score = 42; break;
            case 26: $score = 44; break;   
            case 27: $score = 46; break;
            case 28: $score = 47; break;
            case 29: $score = 49; break; 
            case 30: $score = 51; break;
            case 31: $score = 53; break;
            case 32: $score = 54; break;   
            case 33: $score = 56; break;
            case 34: $score = 58; break;
            case 35: $score = 60; break; 
            case 36: $score = 61; break;
            case 37: $score = 63; break;
            case 38: $score = 65; break;   
            case 39: $score = 66; break;
            case 40: $score = 68; break;
            case 41: $score = 70; break; 
            case 42: $score = 72; break;
            case 43: $score = 73; break;
            case 44: $score = 75; break;   
            case 45: $score = 77; break;
            case 46: $score = 78; break;
            default: $score = 80; break;
        }
        return $score;
    }
}

?>