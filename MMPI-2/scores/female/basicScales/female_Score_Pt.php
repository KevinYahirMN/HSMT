<?php

class female_Score_Pt{
    function score($count){
        $score = ($count*2);
        switch($count){
            case $count < 21: $score -= 6; break;
            case $count < 61: $score -= 7; break;
            default: $score -= 8; break;
        }
        return $score;
    }
}

?>