<?php

class male_Score_Do{
    function score($count){
        switch($count){
            case 0: $score = 0; break;
            case 10: $score = 30; break;
            case 11: $score = 34; break;
            case 12: $score = 38; break;   
            case 13: $score = 41; break;
            case 14: $score = 44; break;
            case 15: $score = 48; break;
            case 16: $score = 51; break;
            case 17: $score = 55; break;
            case 18: $score = 58; break;   
            case 19: $score = 61; break;
            case 20: $score = 65; break;
            case 21: $score = 68; break; 
            case 22: $score = 72; break;
            case 23: $score = 75; break;
            case 24: $score = 79; break;
            default: $score = 82; break;
        }
        return $score;
    }
}

?>