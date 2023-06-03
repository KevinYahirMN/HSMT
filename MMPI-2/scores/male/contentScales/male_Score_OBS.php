<?php

class male_Score_OBS{
    function score($count){
        switch($count){
            case 0: $score = 30; break;
            case 1: $score = 33; break;
            case 2: $score = 36; break;   
            case 3: $score = 39; break;
            case 4: $score = 42; break;
            case 5: $score = 45; break;        
            case 6: $score = 47; break;
            case 7: $score = 50; break;
            case 8: $score = 53; break;   
            case 9: $score = 57; break;
            case 10: $score = 61;break;
            case 11: $score = 65; break; 
            case 12: $score = 69; break;
            case 13: $score = 73; break;
            case 14: $score = 77; break;
            case 15: $score = 79; break;
            default: $score = 81; break;
        }
        return $score;
    }
}

?>