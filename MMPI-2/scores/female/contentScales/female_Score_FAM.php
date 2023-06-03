<?php

class female_Score_FAM{
    function score($count){
        switch($count){
            case 0: $score = 34; break;
            case 1: $score = 37; break;
            case 2: $score = 40; break;   
            case 3: $score = 43; break;
            case 4: $score = 45; break;
            case 5: $score = 47; break; 
            case 6: $score = 50; break;
            case 7: $score = 52; break;
            case 8: $score = 55; break;   
            case 9: $score = 57; break;
            case 10: $score = 59; break;
            case 11: $score = 62; break; 
            case 12: $score = 64; break;
            case 13: $score = 67; break;
            case 14: $score = 69; break;   
            case 15: $score = 72; break;
            case 16: $score = 74; break;
            case 17: $score = 77; break; 
            case 18: $score = 79; break;
            case 19: $score = 82; break;
            case 20: $score = 84; break;   
            case 21: $score = 87; break;
            case 22: $score = 90; break;
            case 23: $score = 92; break;
            case 24: $score = 95; break;
            default: $score = 97; break;
        }
        return $score;
    }
}

?>