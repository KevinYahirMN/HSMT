<?php

class suggestions_ls3{
    function score($count){
        switch($count){
            case 0: $score = 34; break;
            case 1: $score = 37; break;
            case 2: $score = 40; break;   
            case 3: $score = 43; break;
            case 4: $score = 46; break;
            case 5: $score = 49; break; 
            case 6: $score = 52; break;
            case 7: $score = 55; break;
            case 8: $score = 58; break;   
            case 9: $score = 61; break;
            case 10: $score = 64; break;
            case 11: $score= 67; break; 
            case 12: $score= 70; break;
            case 13: $score= 74; break;
            case 14: $score= 77; break;   
            case 15: $score= 80; break;
            default: $score= 83; break;
        }
        return $score;
    }
}

?>