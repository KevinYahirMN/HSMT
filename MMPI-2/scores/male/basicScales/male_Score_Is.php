<?php

class male_Score_Is{
    function score($count){
        $score = ($count*2);
        switch($count){
            case $count < 20: $score += 4; break;
            case 20: $score += 3; break;
            case $count < 22: $score += 2; break;
            case 23: $score++; break;
            case $count < 26: break;
            case 26: $score--; break;
            case $count < 29: $score -= 2; break;
            case 29: $score -= 3; break;
            case $count < 32: $score -= 4; break;
            case 32: $score -= 5; break;
            case $count < 35: $score -= 6; break;
            case 35: $score -= 7; break;
            case $count < 38: $score -= 8; break;
            case 38: $score -= 9; break;
            case 39: $score -= 10; break;
            case $count < 42: $score -= 11; break;
            case 42: $score -= 12; break;
            case $count < 45: $score -= 13; break;
            case 45: $score -= 14; break;
            case $count < 48: $score -= 15; break;
            case 48: $score -= 16; break;
            case $count < 51: $score -= 17; break;
            case 51: $score -= 18; break;
            case $count < 54: $score -= 19; break;
            case 54: $score -= 20; break;
            case $count < 57: $score -= 21; break;
            case 57: $score -= 22; break;
            case $count < 60: $score -= 23; break;
            case 60: $score -= 24; break;
            case 61: $score -= 25; break;
            case $count < 64: $score -= 26; break;
            case 64: $score -= 27; break;
            case $count < 67: $score -= 28; break;
            case 67: $score -= 29; break;
            default: $score -= 30; break;
        }
        return $score;
    }
}

?>