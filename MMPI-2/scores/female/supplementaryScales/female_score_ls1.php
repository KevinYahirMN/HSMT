<?php

class female_Score_ls1{
    function score($count){
        switch($count){
            case 0: $score = 35; break;
            case 1: $score = 38; break;
            case 2: $score = 41; break;   
            case 3: $score = 44; break;
            case 4: $score = 47; break;
            case 5: $score = 50; break; 
            case 6: $score = 53; break;
            case 7: $score = 56; break;
            case 8: $score = 59; break;   
            case 9: $score = 62; break;
            case 10: $score = 65; break;
            case 11: $score = 67; break; 
            case 12: $score = 70; break;
            case 13: $score = 73; break;
            default: $score = 76; break;
        }
        return $score;
    }
}

?>