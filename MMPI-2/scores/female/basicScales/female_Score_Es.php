<?php

class female_Score_Es{
    function score($count){
        $score = ($count*2);
        switch($count){
            case $count < 24: $score -= 6; break;
            case $count < 26: $score -= 7; break;
            case $count < 29: $score -= 8; break;
            case $count < 31: $score -= 9; break;
            case $count < 34: $score -= 10; break;
            case $count < 38: $score -= 11; break;
            case $count < 43: $score -= 12; break;
            case $count < 49: $score -= 13; break;
            case $count < 54: $score -= 14; break;
            case $count < 59: $score -= 15; break;
            case $count < 65: $score -= 16; break;
            default: $score -= 17; break;
        }

        return $score;
    }
}

?>