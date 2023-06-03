<?php

class suggestions_FAM{
    function score($count){
        switch($count){
            case 0: $score = 30; break;
            case 1: $score = 33; break;
            case 2: $score = 36; break;   
            case 3: $score = 39; break;      
            case 4: $score = 41; break;
            case 5: $score = 43; break; 
            case 6: $score = 45; break;
            case 7: $score = 47; break;           
            case 8: $score = 49; break;   
            case 9: $score = 50; break;
            case 10: $score = 52; break;
            case 11: $score = 54; break; 
            case 12: $score = 56; break;
            case 13: $score = 57; break;
            case 14: $score = 59; break;   
            case 15: $score = 61; break;
            case 16: $score = 63; break;
            case 17: $score = 64; break; 
            case 18: $score = 66; break;
            case 19: $score = 70; break;
            case 20: $score = 72; break;   
            case 21: $score = 73; break;
            case 22: $score = 75; break;
            case 23: $score = 77; break;
            case 24: $score = 79; break;
            default: $score = 81; break;
        }
        return $score;
    }
}

?>