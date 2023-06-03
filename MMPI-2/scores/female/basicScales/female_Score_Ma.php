<?php

class female_Score_Ma{
    function score($count){
        $score = ($count*2);
        switch($count){
            case $count < 18: $score += 5; break;
            case $count < 20: $score += 6; break;
            case 20: $score += 7; break;
            case $count < 23: $score += 8; break;
            case $count < 26: $score += $count - 14; break;
            case 26: $score += 11; break;
            case $count < 29: $score += $count - 15; break;
            case $count < 32: $score += $count - 16; break;
            case $count < 36: $score += $count - 17; break;
            case $count < 38: $score += $count - 18; break;
            case $count < 41: $score += $count - 19; break;
            case $count < 44: $score += $count - 20; break;
            default: $score += $count - 21; break;
        }
        return $score;
    }
}

?>