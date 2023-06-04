<?php

class male_Score_L{
    function score($count){
        if($count == 10){
            $score = 38;
        }else{
            $score = $count*58;
            if($score%15 > 8){
                $score = round($score/15);
            }else{
                $score = intval($score/15);
            }
        }
        $score += 30;
        return $score;
    }
}

?>