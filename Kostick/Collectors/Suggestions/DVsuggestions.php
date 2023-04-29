<?php
include('../../Suggestions/ModusVivendi/suggestions_T.php');
include('../../Suggestions/ModusVivendi/suggestions_V.php');
include('../../Suggestions/PowerLevel/suggestions_A.php');
include('../../Suggestions/PowerLevel/suggestions_G.php');
include('../../Suggestions/PowerLevel/suggestions_N.php');
class DVsuggestions{
    function collect($answer){
        $c = array();
        
        array_push($suggestions, $this->positive_T($c[0]));
        array_push($suggestions, $this->negative_T($c[1]));
        array_push($suggestions, $this->positive_V($c[2]));
        array_push($suggestions, $this->negative_V($c[3]));
        array_push($suggestions, $this->positive_N($c[4]));
        array_push($suggestions, $this->negative_N($c[5]));
        array_push($suggestions, $this->positive_G($c[6]));
        array_push($suggestions, $this->negative_G($c[7]));
        array_push($suggestions, $this->positive_A($c[8]));
        array_push($suggestions, $this->negative_A($c[9]));
        
        return $c;
    }

    private function positive_T($c){
        $obj = new suggestions_T;
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

    private function negative_T($c){
        $obj = new suggestions_T;
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

    private function positive_V($c){
        $obj = new suggestions_V;
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

    private function negative_V($c){
        $obj = new suggestions_V;
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

    private function positive_N($c){
        $obj = new suggestions_N;
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

    private function negative_N($c){
        $obj = new suggestions_N;
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

    private function positive_G($c){
        $obj = new suggestions_G;
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

    private function negative_G($c){
        $obj = new suggestions_G;
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

    private function positive_A($c){
        $obj = new suggestions_A;
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

    private function negative_A($c){
        $obj = new suggestions_A;
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