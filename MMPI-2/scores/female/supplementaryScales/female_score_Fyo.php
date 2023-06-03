<?php

class female_Score_Fyo{
    function score($count){
        $score = ($count*2);
        switch($count){
            case $count < 37: $score -= 18; break;
            case $count < 49: $score -= 19; break;
            default: $score -= 20; break;
        }
        return $score;
    }
}

?>