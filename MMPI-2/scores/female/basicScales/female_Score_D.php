<?php

class female_Score_D{
    function score($count){
        $score = ($count*2);
        switch($count){
            case $count < 23: $score += 5; break;
            case $count < 31: $score += 6; break;
            case $count < 40: $score += 5; break;
            case $count < 49: $score += 4; break;
            default: $score += 3; break;
        }

        return $score;
    }
}

?>