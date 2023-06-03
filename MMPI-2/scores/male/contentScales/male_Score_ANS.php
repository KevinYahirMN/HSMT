<?php

class male_Score_ANS{
    function score($count){
        switch($count){
            case 0: $score = 31; break;
            case 1: $score = 35; break;
            case 2: $score = 38; break;   
            case 3: $score = 40; break;             
            case 4: $score = 43; break;
            case 5: $score = 45; break; 
            case 6: $score = 47; break;
            case 7: $score = 49; break;
            case 8: $score = 51; break;   
            case 9: $score = 54; break;
            case 10: $score = 56;break;
            case 11: $score = 59; break; 
            case 12: $score = 62; break;
            case 13: $score = 64; break;
            case 14: $score = 67; break;   
            case 15: $score = 70; break;   
            case 16: $score = 73; break;
            case 17: $score = 76; break;
            case 18: $score = 79; break; 
            case 19: $score = 81; break;
            case 20: $score = 84; break;
            case 21: $score = 87; break;
            case 22: $score = 89; break;   
            default: $score = 91; break;
        }
        return $score;
    }
}

?>