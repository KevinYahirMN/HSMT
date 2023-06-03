<?php

class female_Score_DEL{
    function score($count){
        switch($count){
            case 0: $score = 37; break;
            case 1: $score = 44; break;
            case 2: $score = 49; break;   
            case 3: $score = 52; break;
            case 4: $score = 55; break;
            case 5: $score = 58; break; 
            case 6: $score = 62; break;
            case 7: $score = 65; break;
            case 8: $score = 69; break;   
            case 9: $score = 72; break;
            case 10: $score = 76;break;
            case 11: $score = 79; break; 
            case 12: $score = 83; break;
            case 13: $score = 86; break;
            case 14: $score = 90; break;   
            case 15: $score = 93; break;   
            case 16: $score = 97; break;
            case 17: $score = 100; break;
            case 18: $score = 104; break; 
            case 19: $score = 107; break;
            case 20: $score = 111; break;
            case 21: $score = 114; break;
            case 22: $score = 118; break;   
            default: $score = 120; break;
        }
        return $score;
    }
}

?>