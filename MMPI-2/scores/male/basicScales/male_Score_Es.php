<?php

class male_Score_Es{
    function score($count){
        $score = ($count*2);
        switch($count){
            case $count < 22: $score -= 5; break;
            case $count < 28: $score -= 6; break;
            case $count < 33: $score -= 7; break;
            case $count < 36: $score -= 8; break;
            case 36: $score -= 9; break;
            case $count < 39: $score -= 10; break;
            case $count < 41: $score -= 11; break;
            case $count < 43: $score -= 12; break;
            case $count < 45: $score -= 13; break;
            case 45: $score -= 14; break;
            case $count < 48: $score -= 16; break;
            case $count < 50: $score -= 17; break;
            case $count < 52: $score -= 18; break;
            case $count < 54: $score -= 19; break;
            case 56: $score -= 20; break;
            case $count < 59: $score -= 21; break;
            case $count < 61: $score -= 22; break;
            case $count < 63: $score -= 23; break;
            case $count < 65: $score -= 24; break;
            case $count < 67: $score -= 25; break;
            case 67: $score -= 26; break;
            case $count < 70: $score -= 27; break;
            case $count < 72: $score -= 28; break;
            case $count < 74: $score -= 29; break;
            default: $score -= 30; break;
        }

        return $score;
    }
}

?>