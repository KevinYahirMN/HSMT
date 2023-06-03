<?php

class female_Score_ENJ{
    function score($count){
        switch($count){
            case 0: $score = 33; break;
            case 1: $score = 37; break;
            case 2: $score = 41; break;   
            case 3: $score = 44; break;
            case 4: $score = 47; break;
            case 5: $score = 49; break; 
            case 6: $score = 52; break;
            case 7: $score = 55; break;
            case 8: $score = 58; break;   
            case 9: $score = 63; break;
            case 10: $score = 66;break;
            case 11: $score = 70; break; 
            case 12: $score = 73; break;
            case 13: $score = 78; break;
            case 14: $score = 83; break;   
            case 15: $score = 87; break;   
            default: $score = 91; break;
        }
        return $score;
    }
}

?>