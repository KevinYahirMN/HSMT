<?php

class male_Score_GM{
    function score($count){
        $score = ($count*2);
        switch($count){
            case 26: $score = 30; break;
            case 27: $score = 32; break;
            case 28: $score = 35; break;   
            case $count < 47: $score -= 21; break;
            default: $T = 73; break;
        }
        return $score;
    }
}

?>