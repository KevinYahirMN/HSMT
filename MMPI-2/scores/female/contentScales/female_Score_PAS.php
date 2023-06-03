<?php

class female_Score_PAS{
    function score($count){
       
        switch($count){
            case 0: $score = 30; break;
            case 1: $score = 31; break;
            case 2: $score = 35; break;   
            case 3: $score = 37; break;
            case 4: $score = 39; break;
            case 5: $score = 42; break; 
            case 6: $score = 44; break;
            case 7: $score = 46; break;
            case 8: $score = 48; break;   
            case 10: $score = 53;break;
            case 11: $score = 56; break; 
            case 12: $score = 60; break;
            case 13: $score = 64; break;
            case 14: $score = 69; break;
            case 15: $score = 74; break;
            case 16: $score = 77; break; 
            case 17: $score = 81; break;
            case 18: $score = 85; break;
            case 19: $score = 90; break;
            case 20: $score = 95; break;
            case 21: $score = 97; break;
            default: $score = 102; break;  
        }
        return $score;
    }
}

?>