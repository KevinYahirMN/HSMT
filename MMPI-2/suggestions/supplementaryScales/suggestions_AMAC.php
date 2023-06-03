<?php

class suggestions_AMAC{
    function score($count){
        switch($count){
            case 0: $score = 0; break;
            case 13: $score = 30; break;
            case 14: $score = 33; break;
            case 15: $score = 35; break;
            case 16: $score = 38; break;
            case 17: $score = 40; break;
            case 18: $score = 43; break;
            case 19: $score = 45; break;
            case 20: $score = 48; break;
            case 21: $score = 50; break;
            case 22: $score = 53; break;
            case 23: $score = 55; break;
            case 24: $score = 58; break;
            case 25: $score = 60; break;
            case 26: $score = 63; break;
            case 27: $score = 65; break;
            case 28: $score = 68; break;
            case 29: $score = 71; break;
            case 30: $score = 73; break;
            case 31: $score = 76; break;
            case 32: $score = 78; break;
            case 33: $score = 81; break;
            case 34: $score = 83; break;
            case 35: $score = 86; break;
            case 36: $score = 88; break;
            case 37: $score = 91; break;
            case 38: $score = 93; break;
            case 39: $score = 96; break;
            case 40: $score = 98; break;
            case 41: $score = 101; break;
            case 42: $score = 103; break;
            case 43: $score = 106; break;
            case 44: $score = 108; break;
            case 45: $score = 111; break;
            case 46: $score = 113; break;
            case 47: $score = 116; break;
            default: $score = 118; break;
        }
        return $score;
    }
}

?>