<?php

class female_Score_AMAC{
    function score($count){
        switch($count){
            case 0: $score = 0; break;
            case 13: $score = 30; break;
            case 14: $score = 33; break;
            case 15: $score = 36; break;
            case 16: $score = 38; break;
            case 17: $score = 41; break;
            case 18: $score = 44; break;
            case 19: $score = 47; break;
            case 20: $score = 50; break;
            case 21: $score = 53; break;
            case 22: $score = 55; break;
            case 23: $score = 58; break;
            case 24: $score = 61; break;
            case 25: $score = 64; break;
            case 26: $score = 67; break;
            case 27: $score = 69; break;
            case 28: $score = 72; break;
            case 29: $score = 75; break;
            case 30: $score = 78; break;
            case 31: $score = 81; break;
            case 32: $score = 83; break;
            case 33: $score = 86; break;
            case 34: $score = 89; break;
            case 35: $score = 92; break;
            case 36: $score = 95; break;
            case 37: $score = 98; break;
            case 38: $score = 100; break;
            case 39: $score = 103; break;
            case 40: $score = 106; break;
            case 41: $score = 109; break;
            case 42: $score = 112; break;
            case 43: $score = 114; break;
            case 44: $score = 117; break;
            default: $score = 120; break;
        }
        return $score;
    }
}

?>