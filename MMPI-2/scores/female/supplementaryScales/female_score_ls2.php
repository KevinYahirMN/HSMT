<?php

class female_Score_ls2{
    function score($count){
        switch($count){
            case 0: $score = 35; break;
            case 1: $score = 41; break;
            case 2: $score = 46; break;   
            case 3: $score = 52; break;
            case 4: $score = 58; break;
            case 5: $score = 63; break; 
            case 6: $score = 69; break;
            case 7: $score = 75; break;
            default: $score = 80; break;
        }
        return $score;
    }
}

?>