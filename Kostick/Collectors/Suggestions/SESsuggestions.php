<?php
include('../Suggestions/Emotionality/suggestions_E.php');
include('../Suggestions/Emotionality/suggestions_K.php');
include('../Suggestions/Emotionality/suggestions_Z.php');
include('../Suggestions/SocialNature/suggestions_X.php');
include('../Suggestions/SocialNature/suggestions_S.php');
include('../Suggestions/SocialNature/suggestions_B.php');
include('../Suggestions/SocialNature/suggestions_O.php');
class SESsuggestions{
    function collect($c){
        $suggestions = array();
        
        array_push($suggestions, $this->positive_X($c[0]));
        array_push($suggestions, $this->negative_X($c[0]));
        array_push($suggestions, $this->positive_S($c[1]));
        array_push($suggestions, $this->negative_S($c[1]));
        array_push($suggestions, $this->positive_B($c[2]));
        array_push($suggestions, $this->negative_B($c[2]));
        array_push($suggestions, $this->positive_O($c[3]));
        array_push($suggestions, $this->negative_O($c[3]));
        array_push($suggestions, $this->positive_K($c[4]));
        array_push($suggestions, $this->negative_K($c[4]));
        array_push($suggestions, $this->positive_E($c[5]));
        array_push($suggestions, $this->negative_E($c[5]));
        array_push($suggestions, $this->positive_Z($c[6]));
        array_push($suggestions, $this->negative_Z($c[6]));
        
        return $suggestions;
    }

    private function positive_X($c){
        $obj = new suggestions_X;
        switch($c){
            case $c < 3:
                $suggestion = $obj->lowPositive();
            break;
            case $c > 6:
                $suggestion = $obj->highPositive();
            break;
            default:
                $suggestion = "Puntuación normal";
            break;
        }
        return $suggestion;
    }

    private function negative_X($c){
        $obj = new suggestions_X;
        switch($c){
            case $c < 3:
                $suggestion = $obj->lowNegative();
            break;
            case $c > 6:
                $suggestion = $obj->highNegative();
            break;
            default:
                $suggestion = "Puntuación normal";
            break;
        }
        return $suggestion;
    }

    private function positive_S($c){
        $obj = new suggestions_S;
        switch($c){
            case $c < 3:
                $suggestion = $obj->lowPositive();
            break;
            case $c > 6:
                $suggestion = $obj->highPositive();
            break;
            default:
                $suggestion = "Puntuación normal";
            break;
        }
        return $suggestion;
    }

    private function negative_S($c){
        $obj = new suggestions_S;
        switch($c){
            case $c < 3:
                $suggestion = $obj->lowNegative();
            break;
            case $c > 6:
                $suggestion = $obj->highNegative();
            break;
            default:
                $suggestion = "Puntuación normal";
            break;
        }
        return $suggestion;
    }

    private function positive_B($c){
        $obj = new suggestions_B;
        switch($c){
            case $c < 3:
                $suggestion = $obj->lowPositive();
            break;
            case $c > 6:
                $suggestion = $obj->highPositive();
            break;
            default:
                $suggestion = "Puntuación normal";
            break;
        }
        return $suggestion;
    }

    private function negative_B($c){
        $obj = new suggestions_B;
        switch($c){
            case $c < 3:
                $suggestion = $obj->lowNegative();
            break;
            case $c > 6:
                $suggestion = $obj->highNegative();
            break;
            default:
                $suggestion = "Puntuación normal";
            break;
        }
        return $suggestion;
    }

    private function positive_O($c){
        $obj = new suggestions_O;
        switch($c){
            case $c < 3:
                $suggestion = $obj->lowPositive();
            break;
            case $c > 6:
                $suggestion = $obj->highPositive();
            break;
            default:
                $suggestion = "Puntuación normal";
            break;
        }
        return $suggestion;
    }

    private function negative_O($c){
        $obj = new suggestions_O;
        switch($c){
            case $c < 3:
                $suggestion = $obj->lowNegative();
            break;
            case $c > 6:
                $suggestion = $obj->highNegative();
            break;
            default:
                $suggestion = "Puntuación normal";
            break;
        }
        return $suggestion;
    }

    private function positive_K($c){
        $obj = new suggestions_K;
        switch($c){
            case $c < 3:
                $suggestion = $obj->lowPositive();
            break;
            case $c > 6:
                $suggestion = $obj->highPositive();
            break;
            default:
                $suggestion = "Puntuación normal";
            break;
        }
        return $suggestion;
    }

    private function negative_K($c){
        $obj = new suggestions_K;
        switch($c){
            case $c < 3:
                $suggestion = $obj->lowNegative();
            break;
            case $c > 6:
                $suggestion = $obj->highNegative();
            break;
            default:
                $suggestion = "Puntuación normal";
            break;
        }
        return $suggestion;
    }

    private function positive_E($c){
        $obj = new suggestions_E;
        switch($c){
            case $c < 3:
                $suggestion = $obj->lowPositive();
            break;
            case $c > 6:
                $suggestion = $obj->highPositive();
            break;
            default:
                $suggestion = "Puntuación normal";
            break;
        }
        return $suggestion;
    }

    private function negative_E($c){
        $obj = new suggestions_E;
        switch($c){
            case $c < 3:
                $suggestion = $obj->lowNegative();
            break;
            case $c > 6:
                $suggestion = $obj->highNegative();
            break;
            default:
                $suggestion = "Puntuación normal";
            break;
        }
        return $suggestion;
    }

    private function positive_Z($c){
        $obj = new suggestions_Z;
        switch($c){
            case $c < 3:
                $suggestion = $obj->lowPositive();
            break;
            case $c > 6:
                $suggestion = $obj->highPositive();
            break;
            default:
                $suggestion = "Puntuación normal";
            break;
        }
        return $suggestion;
    }

    private function negative_Z($c){
        $obj = new suggestions_Z;
        switch($c){
            case $c < 3:
                $suggestion = $obj->lowNegative();
            break;
            case $c > 6:
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