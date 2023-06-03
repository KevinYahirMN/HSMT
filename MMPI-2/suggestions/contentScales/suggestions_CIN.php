<?php

class suggestions_CIN{
    function score($count){
        switch($count){
            
            case 0: $score = 30; break;
            case 1: $score = 31; break;
            case 2: $score = 33; break;   
            case 3: $score = 35; break;
            case 4: $score = 39; break;
            case 5: $score = 40; break; 
            case 6: $score = 42; break;
            case 7: $score = 43; break;
            case 8: $score = 47; break;   
            case 9: $score = 49; break;
            case 10: $score = 50;break;
            case 11: $score = 52; break; 
            case 12: $score = 53; break;     
            case 13: $score = 55; break;
            case 15: $score = 57; break;
            case 16: $score = 60; break;
            case 17: $score = 62; break; 
            case 18: $score = 64; break;
            case 19: $score = 67; break;
            case 20: $score = 71; break;
            case 21: $score = 74; break;
            case 22: $score = 79; break;
            default: $score = 83; break;   
    
        }
        return $score;
    }
}

?>