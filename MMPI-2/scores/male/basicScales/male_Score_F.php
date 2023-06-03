<?php

class male_Score_F{
    function score($count){
        if($count < 15){
            $score = (($count-1)*84);
            if($score%30 == 0){
                $score = round(($count*84)/30);
            }else{
                $score = intval(($count*84)/30);
            }
        }else{
            switch($count){
                case 17:
                    $score = intval(($count*84)/30);
                break;
                case 18:
                    $score = intval(($count*84)/30);
                break;
                case 19:
                    $score = intval(($count*84)/30);
                break;
                case 23:
                    $score = intval(($count*84)/30);
                break;
                case 24:
                    $score = intval(($count*84)/30);
                break;
                case 28:
                    $score = intval(($count*84)/30);
                break;
                case 29:
                    $score = intval(($count*84)/30);
                break;
                default:
                    $score = round(($count*84)/30);
                break;
            }
        }
        $score += 35;
        return $score;
    }
}

?>