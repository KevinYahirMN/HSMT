<?php

class female_Score_Hs{
    function score($count){
        $score = ($count*2);
        switch($count){
            case $count < 16: $score += 17; break;
            case $count < 20: $score += 18; break;
            case $count < 25: $score += 19; break;
            case $count < 29: $score += 20; break;
            case $count < 34: $score += 21; break;
            case $count < 39: $score += 22; break;
            case $count < 44: $score += 23; break;
            default: $score += 24; break;
        }

        return $score;
    }
}

?>