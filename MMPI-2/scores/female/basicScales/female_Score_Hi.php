<?php

class female_Score_Hi{
    function score($count){
        $score = ($count*2);
        switch($count){
            case $count < 21: $score += 5; break;
            case $count < 26: $score += 4; break;
            case $count < 35: $score += 5; break;
            case $count < 43: $score += 6; break;
            case $count < 51: $score += 7; break;
            default: $score += 8; break;
        }
        
        return $score;
    }
}

?>