<?php

class female_Score_L{
    function score($count){
        $score = 5*($count + 5);
        switch($count){
            case 0: $score = $count; break;
            case $count < 3: $score++; break;
            case $count < 6: break;
            case $count < 8: $score--; break;
            case 8: $score -= 2; break;
            case $count < 12: $score -= 3; break;
            case $count < 14: $score -= 4; break;
            default: $score -= 5; break;
        }

        return $score;
    }
}

?>