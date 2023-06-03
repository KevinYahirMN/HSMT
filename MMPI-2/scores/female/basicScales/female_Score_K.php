<?php

class female_Score_K{
    function score($count){
        $score = ($count*2);
        switch($count){
            case $count < 16: $score += 17; break;
            case $count < 24: $score += 18; break;
            case $count < 32: $score += 19; break;
            case $count < 40: $score += 20; break;
            case $count < 42: $score += 21; break;
            default: $score += 22; break;
        }

        return $score;
    }
}

?>