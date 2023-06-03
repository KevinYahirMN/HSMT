<?php

class male_Score_Dp{
    function score($count){
        $score = ($count*2);
        switch($count){
            case $count < 23: $score += 2; break;
            case $count < 26: $score += 3; break;
            case $count < 28: $score += 4; break;
            case $count < 30: $score += 5; break;
            case $count < 32: $score += 6; break;
            case $count < 34: $score += 7; break;
            case $count < 36: $score += 8; break;
            case $count < 38: $score += 9; break;
            case $count < 41: $score += 10; break;
            case $count < 43: $score += 11; break;
            case $count < 45: $score += 12; break;
            default: $score += 13; break;
        }

        return $score;
    }
}

?>