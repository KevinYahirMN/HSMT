<?php

class female_Score_Pa{
    function score($count){
        $score = ($count*3);
        switch($count){
            case $count < 12: $score += 20; break;
            case $count < 14: $score += 21; break;
            case $count < 17: $score += 22; break;
            case $count < 20: $score += 23; break;
            case $count < 23: $score += 24; break;
            case $count < 25: $score += 25; break;
            case $count < 28: $score += 26; break;
            case $count < 30: $score += 27; break;
            default: $score += 28; break;
        }

        return $score;
    }
}

?>