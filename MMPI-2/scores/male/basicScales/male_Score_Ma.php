<?php

class male_Score_Ma{
    function score($count){
        $score = ($count*2);
        switch($count){
            case $count < 20: $score += 5; break;
            case $count < 23: $score += 6; break;
            case $count < 25: $score += 7; break;
            case $count < 29: $score += $count - 17; break;
            case $count < 31: $score += 12; break;
            default: $score += $count - 17; break;
        }
        return $score;
    }
}

?>