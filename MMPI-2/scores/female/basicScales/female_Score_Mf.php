<?php

class female_Score_Mf{
    function score($count){
        switch($count){
            case 5: $score = 118; break;
            case 6: $score = 115; break;
            case 7: $score = 113; break;
            case 8: $score = 110; break;
            case 9: $score = 107; break;
            case 10: $score = 104; break;
            case 11: $score = 102; break;
            case 12: $score = 99; break;
            case 13: $score = 96; break;
            case 14: $score = 94; break;
            case 15: $score = 91; break;
            case 16: $score = 88; break;
            case 17: $score = 86; break;
            case 18: $score = 83; break;
            case 19: $score = 80; break;
            case 20: $score = 78; break;
            case 21: $score = 75; break;
            case 22: $score = 72; break;
            case 23: $score = 69; break;
            case 24: $score = 67; break;
            case 25: $score = 64; break;
            case 26: $score = 61; break;
            case 27: $score = 59; break;
            case 28: $score = 56; break;
            case 29: $score = 53; break;
            case 30: $score = 51; break;
            case 31: $score = 48; break;
            case 32: $score = 45; break;
            case 33: $score = 42; break;
            case 34: $score = 40; break;
            case 35: $score = 37; break;
            case 36: $score = 34; break;
            case 37: $score = 32; break;
            case 38: $score = 30; break;
            default:
                $score = $count < 5 ? $score = 120 : $score = 30;
            break;
        }

        return $score;
    }
}

?>