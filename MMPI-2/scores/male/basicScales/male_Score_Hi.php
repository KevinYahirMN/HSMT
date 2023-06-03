<?php

class male_Score_Hi{
    function score($count){
        $score = ($count*2);
        switch($count){
            case $count < 22: $score += 7; break;
            case $count < 27: $score += 8; break;
            case $count < 33: $score += 9; break;
            case $count < 40: $score += 10; break;
            case $count < 47: $score += 11; break;
            case $count < 53: $score += 12; break;
            default: $score += 13; break;            
        }
        
        return $score;
    }
}

?>