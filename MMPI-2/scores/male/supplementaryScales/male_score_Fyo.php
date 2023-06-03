<?php

class male_Score_Fyo{
    function score($count){
        $score = ($count*2);
        switch($count){
            case $count < 31: $score -= 25; break;
            case $count < 38: $score -= 24; break;
            case $count < 44: $score -= 23; break;
            case $count < 50: $score -= 22; break;
            default: $score -= 21; break;

        }
        return $score;
    }
}

?>