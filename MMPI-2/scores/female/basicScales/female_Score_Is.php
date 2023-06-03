<?php

class female_Score_Is{
    function score($count){
        $score = $count;
        switch($count){
            case $count < 18: $score += 20; break;
            case $count < 22: $score += 21; break;
            case $count < 27: $score += 22; break;
            case $count < 32: $score += 23; break;
            case $count < 36: $score += 24; break;
            case $count < 41: $score += 25; break;
            case $count < 46: $score += 26; break;
            case $count < 50: $score += 27; break;
            case $count < 55: $score += 28; break;
            case $count < 60: $score += 29; break;
            case $count < 64: $score += 30; break;
            case $count < 69: $score += 31; break;
            default: $score -= 32; break;
        }
        return $score;
    }
}

?>