<?php

class suggestions_BAE{
    function score($count){
        switch($count){
            
            case 0: $score = 33; break;
            case 1: $score = 37; break;
            case 2: $score = 41; break;   
            case 3: $score = 45; break;
            case 4: $score = 48; break;
            case 5: $score = 51; break; 
            case 6: $score = 54; break;
            case 7: $score = 56; break;
            case 8: $score = 59; break;      
            case 9: $score = 62; break;
            case 10: $score = 65; break;
            case 11: $score = 68; break; 
            case 12: $score = 71; break;
            case 13: $score = 73; break;
            case 14: $score = 76; break;   
            case 15: $score = 79; break;
            case 16: $score = 82; break;
            case 17: $score = 85; break; 
            default: $score = 87; break;
        }
        return $score;
    }
}

?>