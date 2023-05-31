<?php
include('../Suggestions/ModusVivendi/suggestions_T.php');
include('../Suggestions/ModusVivendi/suggestions_V.php');
include('../Suggestions/PowerLevel/suggestions_A.php');
include('../Suggestions/PowerLevel/suggestions_G.php');
include('../Suggestions/PowerLevel/suggestions_N.php');
class DVsuggestions{
    function collect($count = array()){
        $suggestions = array();
        
        array_push($suggestions, $this->positive_T($count[0]));
        array_push($suggestions, $this->negative_T($count[0]));
        array_push($suggestions, $this->positive_V($count[1]));
        array_push($suggestions, $this->negative_V($count[1]));
        array_push($suggestions, $this->positive_N($count[2]));
        array_push($suggestions, $this->negative_N($count[2]));
        array_push($suggestions, $this->positive_G($count[3]));
        array_push($suggestions, $this->negative_G($count[3]));
        array_push($suggestions, $this->positive_A($count[4]));
        array_push($suggestions, $this->negative_A($count[4]));
        
        return $suggestions;
    }

    private function positive_T($count = array()){
        $obj = new suggestions_T;
        switch($count){
            case $count < 3:
                $suggestion = $obj->lowPositive();
            break;
            case $count > 6:
                $suggestion = $obj->highPositive();
            break;
            default:
                $suggestion = "Puntuación normal";
            break;
        }
        return $suggestion;
    }

    private function negative_T($count = array()){
        $obj = new suggestions_T;
        switch($count){
            case $count < 3:
                $suggestion = $obj->lowNegative();
            break;
            case $count > 6:
                $suggestion = $obj->highNegative();
            break;
            default:
                $suggestion = "Puntuación normal";
            break;
        }
        return $suggestion;
    }

    private function positive_V($count = array()){
        $obj = new suggestions_V;
        switch($count){
            case $count < 3:
                $suggestion = $obj->lowPositive();
            break;
            case $count > 6:
                $suggestion = $obj->highPositive();
            break;
            default:
                $suggestion = "Puntuación normal";
            break;
        }
        return $suggestion;
    }

    private function negative_V($count = array()){
        $obj = new suggestions_V;
        switch($count){
            case $count < 3:
                $suggestion = $obj->lowNegative();
            break;
            case $count > 6:
                $suggestion = $obj->highNegative();
            break;
            default:
                $suggestion = "Puntuación normal";
            break;
        }
        return $suggestion;
    }

    private function positive_N($count = array()){
        $obj = new suggestions_N;
        switch($count){
            case $count < 3:
                $suggestion = $obj->lowPositive();
            break;
            case $count > 6:
                $suggestion = $obj->highPositive();
            break;
            default:
                $suggestion = "Puntuación normal";
            break;
        }
        return $suggestion;
    }

    private function negative_N($count = array()){
        $obj = new suggestions_N;
        switch($count){
            case $count < 3:
                $suggestion = $obj->lowNegative();
            break;
            case $count > 6:
                $suggestion = $obj->highNegative();
            break;
            default:
                $suggestion = "Puntuación normal";
            break;
        }
        return $suggestion;
    }

    private function positive_G($count = array()){
        $obj = new suggestions_G;
        switch($count){
            case $count < 3:
                $suggestion = $obj->lowPositive();
            break;
            case $count > 6:
                $suggestion = $obj->highPositive();
            break;
            default:
                $suggestion = "Puntuación normal";
            break;
        }
        return $suggestion;
    }

    private function negative_G($count = array()){
        $obj = new suggestions_G;
        switch($count){
            case $count < 3:
                $suggestion = $obj->lowNegative();
            break;
            case $count > 6:
                $suggestion = $obj->highNegative();
            break;
            default:
                $suggestion = "Puntuación normal";
            break;
        }
        return $suggestion;
    }

    private function positive_A($count = array()){
        $obj = new suggestions_A;
        switch($count){
            case $count < 3:
                $suggestion = $obj->lowPositive();
            break;
            case $count > 6:
                $suggestion = $obj->highPositive();
            break;
            default:
                $suggestion = "Puntuación normal";
            break;
        }
        return $suggestion;
    }

    private function negative_A($count = array()){
        $obj = new suggestions_A;
        switch($count){
            case $count < 3:
                $suggestion = $obj->lowNegative();
            break;
            case $count > 6:
                $suggestion = $obj->highNegative();
            break;
            default:
                $suggestion = "Puntuación normal";
            break;
        }
        return $suggestion;
    }
}
?>