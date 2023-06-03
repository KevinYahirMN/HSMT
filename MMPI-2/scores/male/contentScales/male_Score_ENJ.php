<?php

class male_Score_ENJ{
    function score($count){
        switch($count){
            case 0: $score = 30; break;
            case 1: $score = 31; break;
            case 2: $score = 34; break;   
            case 3: $score = 37; break;
            case 4: $score = 40; break;
            case 5: $score = 42; break;   
            case 6: $score = 44; break;
            case 7: $score = 47; break;
            case 8: $score = 49; break;   
            case 9: $score = 52; break;
            case 10: $score = 56;break;
            case 11: $score = 59; break; 
            case 12: $score = 63; break;
            case 13: $score = 67; break;
            case 14: $score = 71; break;   
            case 15: $score = 75; break;  
            default: $score = 78; break;
        }
        return $score;
    }
}

?>