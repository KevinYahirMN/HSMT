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
    function collect($c){
        $suggestions = array();
        
        array_push($suggestions, $this->positive_L($c[0]));
        array_push($suggestions, $this->negative_L($c[0]));
        array_push($suggestions, $this->positive_P($c[1]));
        array_push($suggestions, $this->negative_P($c[1]));
        array_push($suggestions, $this->positive_I($c[2]));
        array_push($suggestions, $this->negative_I($c[2]));
        array_push($suggestions, $this->positive_F($c[3]));
        array_push($suggestions, $this->negative_F($c[3]));
        array_push($suggestions, $this->positive_W($c[4]));
        array_push($suggestions, $this->negative_W($c[4]));
        array_push($suggestions, $this->positive_C($c[5]));
        array_push($suggestions, $this->negative_C($c[5]));
        array_push($suggestions, $this->positive_D($c[6]));
        array_push($suggestions, $this->negative_D($c[6]));
        array_push($suggestions, $this->positive_R($c[7]));
        array_push($suggestions, $this->negative_R($c[7]));
        
        return $suggestions;
    }

    private function positive_L($c){
        $obj = new suggestions_L;
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

    private function negative_L($c){
        $obj = new suggestions_L;
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

    private function positive_P($c){
        $obj = new suggestions_P;
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

    private function negative_P($c){
        $obj = new suggestions_P;
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

    private function positive_I($c){
        $obj = new suggestions_I;
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

    private function negative_I($c){
        $obj = new suggestions_I;
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

    private function positive_F($c){
        $obj = new suggestions_F;
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

    private function negative_F($c){
        $obj = new suggestions_F;
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

    private function positive_W($c){
        $obj = new suggestions_W;
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

    private function negative_W($c){
        $obj = new suggestions_W;
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

    private function positive_C($c){
        $obj = new suggestions_C;
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

    private function negative_C($c){
        $obj = new suggestions_C;
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

    private function positive_D($c){
        $obj = new suggestions_D;
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

    private function negative_D($c){
        $obj = new suggestions_D;
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

    private function positive_R($c){
        $obj = new suggestions_R;
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

    private function negative_R($c){
        $obj = new suggestions_R;
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