<?php

class male_Score_Pa{
    function score($count){
        $score = ($count*3);
        switch($count){
            case $count < 7: $score += 21; break;
            case $count < 10: $score += 21; break;
            case $count < 13: $score += 23; break;
            case $count < 25: $score += 24; break;
            case $count < 26: $score += 25; break;
            case $count < 31: $score += 26; break;
            default: $score += 27; break;
        }

        return $score;
    }
}

?>