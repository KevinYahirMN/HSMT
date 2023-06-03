<?php

class suggestions_ls1{
    function score($count){
        switch($count){
            case 0: $score = 35; break;
            case 1: $score = 39; break;
            case 2: $score = 42; break;   
            case 3: $score = 45; break;
            case 4: $score = 48; break;
            case 5: $score = 51; break; 
            case 6: $score = 55; break;
            case 7: $score = 58; break;
            case 8: $score = 61; break;   
            case 9: $score = 64; break;
            case 10: $score = 67; break;
            case 11: $score = 70; break; 
            case 12: $score = 74; break;
            case 13: $score = 77; break;
            default: $score = 80; break;
        }
        return $score;
    }
}

?>