<?php

class female_Score_ls3{
    function score($count){
        switch($count){
            case 0: $score = 33; break;
            case 1: $score = 36; break;
            case 2: $score = 39; break;   
            case 3: $score = 42; break;
            case 4: $score = 45; break;
            case 5: $score = 48; break; 
            case 6: $score = 51; break;
            case 7: $score = 54; break;
            case 8: $score = 57; break;   
            case 9: $score = 60; break;
            case 10: $score = 63; break;
            case 11: $score = 66; break; 
            case 12: $score = 68; break;
            case 13: $score = 71; break;
            case 14: $score = 74; break;   
            case 15: $score = 77; break;
            default: $score = 80; break;
        }
        return $score;
    }
}

?>