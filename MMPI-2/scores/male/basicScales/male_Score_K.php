<?php

class male_Score_K{
    function score($count){
        $score = ($count*2) + 16;

        $score = $count > 20 ? $score++ : $score;

        return $score;
    }
}

?>