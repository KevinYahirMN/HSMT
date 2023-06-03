<?php

class male_Score_Mf{
    function score($count){
        $score = ($count*2);
        switch($count){
            case $count < 17: $score--; break;
            case $count < 20: break;
            case $count < 22: $score++; break;
            case $count < 24: $score += 2; break;
            case $count < 27: $score += 3; break;
            case $count < 29: $score += 4; break;
            case $count < 31: $score += 5; break;
            case $count < 33: $score += 6; break;
            case $count < 36: $score += 7; break;
            case $count < 38: $score += 8; break;
            case $count < 41: $score += 9; break;
            case $count < 43: $score += 10; break;
            case $count < 45: $score += 11; break;
            case $count < 48: $score += 12; break;
            case $count < 50: $score += 13; break;
            case $count < 52: $score += 14; break;
            default: $score += 15; break;
        }

        return $score;
    }
}

?>