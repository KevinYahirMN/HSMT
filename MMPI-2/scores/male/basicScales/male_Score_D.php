<?php

class male_Score_D{
    function score($count){
        $score = ($count*2) + 9;

        $score = $count < 23 ? $score++ : $score += 2;

        return $score;
    }
}

?>