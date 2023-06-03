<?php

class male_Score_ls2{
    function score($count){
        switch($count){
            case 0: $score = 34; break;
            case 1: $score = 39; break;
            case 2: $score = 45; break;   
            case 3: $score = 50; break;
            case 4: $score = 56; break;
            case 5: $score = 60; break; 
            case 6: $score = 67; break;
            case 7: $score = 72; break;
            default: $score = 77; break;
        }
        return $score;
    }
}

?>