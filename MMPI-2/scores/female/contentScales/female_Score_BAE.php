<?php

class female_Score_BAE{
    function score($count){
        switch($count){
            
            case 0: $score = 35; break;
            case 1: $score = 39; break;
            case 2: $score = 43; break;   
            case 3: $score = 47; break;
            case 4: $score = 50; break;
            case 5: $score = 53; break; 
            case 6: $score = 55; break;
            case 7: $score = 58; break;
            case 8: $score = 60; break;   
            case 9: $score = 62; break;
            case 10: $score = 65; break;
            case 11: $score = 67; break; 
            case 12: $score = 70; break;
            case 13: $score = 72; break;
            case 14: $score = 75; break;   
            case 15: $score = 77; break;
            case 16: $score = 79; break;
            case 17: $score = 82; break; 
            case 18: $score = 84; break;
            case 19: $score = 87; break;
            case 20: $score = 89; break;   
            case 21: $score = 91; break;
            case 22: $score = 95; break;
            case 23: $score = 97; break;
            default: $score = 99; break;
        }
        return $score;
    }
}

?>