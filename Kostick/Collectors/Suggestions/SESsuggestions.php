<?php
include('../Suggestions/Emotionality/suggestions_E.php');
include('../Suggestions/Emotionality/suggestions_K.php');
include('../Suggestions/Emotionality/suggestions_Z.php');
include('../Suggestions/SocialNature/suggestions_X.php');
include('../Suggestions/SocialNature/suggestions_S.php');
include('../Suggestions/SocialNature/suggestions_B.php');
include('../Suggestions/SocialNature/suggestions_O.php');
class SESsuggestions{
    function collect($count = array()){
        $suggestions = array();
        
        array_push($suggestions, $this->positive_X($count[0]));
        array_push($suggestions, $this->negative_X($count[0]));
        array_push($suggestions, $this->positive_S($count[1]));
        array_push($suggestions, $this->negative_S($count[1]));
        array_push($suggestions, $this->positive_B($count[2]));
        array_push($suggestions, $this->negative_B($count[2]));
        array_push($suggestions, $this->positive_O($count[3]));
        array_push($suggestions, $this->negative_O($count[3]));
        array_push($suggestions, $this->positive_K($count[4]));
        array_push($suggestions, $this->negative_K($count[4]));
        array_push($suggestions, $this->positive_E($count[5]));
        array_push($suggestions, $this->negative_E($count[5]));
        array_push($suggestions, $this->positive_Z($count[6]));
        array_push($suggestions, $this->negative_Z($count[6]));
        
        return $suggestions;
    }

    private function positive_X($count = array()){
        $obj = new suggestions_X;
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

    private function negative_X($count = array()){
        $obj = new suggestions_X;
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

    private function positive_S($count = array()){
        $obj = new suggestions_S;
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

    private function negative_S($count = array()){
        $obj = new suggestions_S;
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

    private function positive_B($count = array()){
        $obj = new suggestions_B;
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

    private function negative_B($count = array()){
        $obj = new suggestions_B;
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

    private function positive_O($count = array()){
        $obj = new suggestions_O;
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

    private function negative_O($count = array()){
        $obj = new suggestions_O;
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

    private function positive_K($count = array()){
        $obj = new suggestions_K;
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

    private function negative_K($count = array()){
        $obj = new suggestions_K;
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

    private function positive_E($count = array()){
        $obj = new suggestions_E;
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

    private function negative_E($count = array()){
        $obj = new suggestions_E;
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

    private function positive_Z($count = array()){
        $obj = new suggestions_Z;
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

    private function negative_Z($count = array()){
        $obj = new suggestions_Z;
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