<?php

class male_Score_Hs{
    function score($count){
        $score = ($count*2);
        switch($count){
            case $count < 12: $score += 18; break;
            case $count < 14: $score += 19; break;
            case $count < 16: $score += 20; break;
            case $count < 18: $score += 21; break;
            case $count < 27: $score += 22; break;
            default: $score += 23; break;
        }

        return $score;
    }
}

?>