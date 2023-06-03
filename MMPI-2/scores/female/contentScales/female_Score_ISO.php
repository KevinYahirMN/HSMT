<?php

class female_Score_ISO{
    function score($count){
        switch($count){
            case 0: $score = 30; break;
            case 1: $score = 34; break;
            case 2: $score = 37; break;   
            case 3: $score = 41; break;
            case 4: $score = 44; break;
            case 5: $score = 46; break; 
            case 6: $score = 48; break;
            case 7: $score = 50; break;
            case 8: $score = 52; break;   
            case 9: $score = 54; break;
            case 10: $score = 57; break;
            case 11: $score = 59; break; 
            case 12: $score = 61; break;
            case 13: $score = 64; break;
            case 14: $score = 67; break;   
            case 15: $score = 69; break;
            case 16: $score = 72; break;
            case 17: $score = 75; break; 
            case 18: $score = 77; break;
            case 19: $score = 81; break;
            case 20: $score = 84; break;   
            case 21: $score = 85; break;
            case 22: $score = 88; break;
            case 23: $score = 90; break;
            default: $score = 93; break;
        }
        return $score;
    }
}

?>