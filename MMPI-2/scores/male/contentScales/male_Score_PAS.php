<?php

class male_Score_PAS{
    function score($count){
       
        switch($count){
            case 0: $score = 33; break;
            case 1: $score = 37; break;
            case 2: $score = 39; break;   
            case 3: $score = 40; break;
            case 4: $score = 43; break;
            case 5: $score = 45; break; 
            case 6: $score = 47; break;
            case 7: $score = 49; break;
            case 8: $score = 52; break;   
            case 10: $score = 54;break;
            case 11: $score = 56; break; 
            case 12: $score = 60; break;
            case 13: $score = 64; break;
            case 14: $score = 68; break;
            case 15: $score = 72; break;
            case 16: $score = 75; break; 
            case 17: $score = 79; break;
            case 18: $score = 80; break;
            case 19: $score = 85; break;
            case 20: $score = 87; break;
            case 21: $score = 90; break;
            default: $score = 93; break;
        }
        return $score;
    }
}

?>