<?php

class female_Score_F{
    function score($count){
        $score = ($count*3);
        switch($count){
            case $count < 5: $score += 34; break;
            case $count < 11: $score += 33; break;
            case $count < 17: $score += 32; break;
            case $count < 22: $score += 31; break;
            case $count < 28: $score += 30; break;
            default: $score += 29; break;
        }

        return $score;
    }

}

?>