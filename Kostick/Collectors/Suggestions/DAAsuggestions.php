<?php
include('../Suggestions/Leadership/suggestions_L.php');
include('../Suggestions/Leadership/suggestions_P.php');
include('../Suggestions/Leadership/suggestions_I.php');
include('../Suggestions/AdaptabiltyAtWork/suggestions_C.php');
include('../Suggestions/AdaptabiltyAtWork/suggestions_D.php');
include('../Suggestions/AdaptabiltyAtWork/suggestions_R.php');
include('../Suggestions/Subordination/suggestions_F.php');
include('../Suggestions/Subordination/suggestions_W.php');
class DAAsuggestions{
    function collect($count = array()){
        $suggestions = array();
        
        array_push($suggestions, $this->positive_L($count[0]));
        array_push($suggestions, $this->negative_L($count[0]));
        array_push($suggestions, $this->positive_P($count[1]));
        array_push($suggestions, $this->negative_P($count[1]));
        array_push($suggestions, $this->positive_I($count[2]));
        array_push($suggestions, $this->negative_I($count[2]));
        array_push($suggestions, $this->positive_F($count[3]));
        array_push($suggestions, $this->negative_F($count[3]));
        array_push($suggestions, $this->positive_W($count[4]));
        array_push($suggestions, $this->negative_W($count[4]));
        array_push($suggestions, $this->positive_C($count[5]));
        array_push($suggestions, $this->negative_C($count[5]));
        array_push($suggestions, $this->positive_D($count[6]));
        array_push($suggestions, $this->negative_D($count[6]));
        array_push($suggestions, $this->positive_R($count[7]));
        array_push($suggestions, $this->negative_R($count[7]));
        
        return $suggestions;
    }

    private function positive_L($count = array()){
        $obj = new suggestions_L;
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

    private function negative_L($count = array()){
        $obj = new suggestions_L;
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

    private function positive_P($count = array()){
        $obj = new suggestions_P;
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

    private function negative_P($count = array()){
        $obj = new suggestions_P;
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

    private function positive_I($count = array()){
        $obj = new suggestions_I;
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

    private function negative_I($count = array()){
        $obj = new suggestions_I;
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

    private function positive_F($count = array()){
        $obj = new suggestions_F;
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

    private function negative_F($count = array()){
        $obj = new suggestions_F;
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

    private function positive_W($count = array()){
        $obj = new suggestions_W;
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

    private function negative_W($count = array()){
        $obj = new suggestions_W;
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

    private function positive_C($count = array()){
        $obj = new suggestions_C;
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

    private function negative_C($count = array()){
        $obj = new suggestions_C;
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

    private function positive_D($count = array()){
        $obj = new suggestions_D;
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

    private function negative_D($count = array()){
        $obj = new suggestions_D;
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

    private function positive_R($count = array()){
        $obj = new suggestions_R;
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

    private function negative_R($count = array()){
        $obj = new suggestions_R;
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