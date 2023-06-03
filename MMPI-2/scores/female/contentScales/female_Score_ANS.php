<?php

class female_Score_ANS{
    function score($count){
        switch($count){
            case 0: $score= 33; break;
            case 1: $score= 37; break;
            case 2: $score= 40; break;   
            case 3: $score= 42; break;
            case 4: $score= 44; break;
            case 5: $score= 46; break; 
            case 6: $score= 48; break;
            case 7: $score= 50; break;
            case 8: $score= 52; break;   
            case 9: $score= 53; break;
            case 10: $score= 55;break;
            case 11: $score= 57; break; 
            case 12: $score= 60; break;
            case 13: $score= 62; break;
            case 14: $score= 65; break;   
            case 15: $score= 68; break;   
            case 16: $score= 71; break;
            case 17: $score= 74; break;
            case 18: $score= 76; break; 
            case 19: $score= 79; break;
            case 20: $score= 82; break;
            case 21: $score= 85; break;
            case 22: $score= 88; break;   
            default: $score= 90; break;
        }
        return $score;
    }
}

?>