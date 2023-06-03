<?php

class female_Score_Dpr{
    function score($count){
        switch($count){
            case 0: $score = 0; break;
            case 2: $score = 31; break;
            case 3: $score = 32; break;
            case 4: $score = 34; break;   
            case 5: $score = 36; break;
            case 6: $score = 37; break;
            case 7: $score = 39; break; 
            case 8: $score = 41; break;
            case 9: $score = 42; break;
            case 10: $score = 44; break;   
            case 11: $score = 45; break;
            case 12: $score = 47; break;
            case 13: $score = 49; break; 
            case 14: $score = 50; break;
            case 15: $score = 52; break;
            case 16: $score = 54; break;   
            case 17: $score = 55; break;
            case 18: $score = 57; break;
            case 19: $score = 59; break; 
            case 20: $score = 60; break;
            case 21: $score = 62; break;
            case 22: $score = 64; break;   
            case 23: $score = 65; break;
            case 24: $score = 67; break;
            case 25: $score = 68; break; 
            case 26: $score = 70; break;
            case 27: $score = 72; break;
            case 28: $score = 73; break;   
            case 29: $score = 75; break;
            case 30: $score = 77; break;
            case 31: $score = 78; break; 
            case 32: $score = 80; break;
            case 33: $score = 82; break;
            case 34: $score = 83; break;   
            case 35: $score = 85; break;
            case 36: $score = 86; break;
            case 37: $score = 88; break; 
            case 38: $score = 90; break;
            case 39: $score = 91; break;
            case 40: $score = 93; break;   
            default: $score = 95; break;
        }
        return $score;
    }
}

?>