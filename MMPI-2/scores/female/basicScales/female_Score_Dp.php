<?php

class female_Score_Dp{
    function score($count){
        $score = ($count*2);
        switch($count){
            case $count < 23: $score += 2; break;
            case $count < 26: $score += 3; break;
            case $count < 28: $score += 4; break;
            case $count < 30: $score += 5; break;
            case 30: $score += 6; break;
            case $count < 33: $score += 7; break;
            case $count < 35: $score += 8; break;
            case $count < 37: $score += 9; break;
            case $count < 39: $score += 10; break;
            case $count < 41: $score += 11; break;
            case 41: $score += 12; break;
            case $count < 44: $score += 13; break;
            case $count < 46: $score += 14; break;
            case $count < 48: $score += 15; break;
            case $count < 50: $score += 16; break;
            default: $score += 17; break;
        }

        return $score;
    }
}

?>