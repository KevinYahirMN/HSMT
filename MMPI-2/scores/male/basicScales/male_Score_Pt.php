<?php

class male_Score_Pt{
    function score($count){
        $score = ($count*2);
        switch($count){
            case $count < 25: $score -= 6; break;
            case $count < 28: $score -= 5; break;
            default: $score -= 4; break;
        }
        return $score;
    }
}

?>