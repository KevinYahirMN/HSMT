<?php

class male_Score_DEP{
    function score($count){
        switch($count){

            case 0: $score = 30; break;
            case 1: $score = 33; break;
            case 2: $score = 36; break;   
            case 3: $score = 39; break;
            case 4: $score = 42; break;
            case 5: $score = 45; break; 
            case 6: $score = 48; break;
            case 7: $score = 50; break;
            case 8: $score = 52; break;   
            case 9: $score = 55; break;
            case 10: $score =57; break;          
            case 11: $score = 58; break; 
            case 12: $score = 60; break;
            case 13: $score = 62; break;
            case 14: $score = 64; break;   
            case 15: $score = 66; break;   
            case 16: $score = 67; break;
            case 17: $score = 69; break;
            case 18: $score = 71; break; 
            case 19: $score = 73; break;
            case 20: $score = 74; break;
            case 21: $score = 76; break;
            case 22: $score = 78; break;
            case 23: $score = 80; break;
            case 24: $score = 82; break;   
            case 25: $score = 83; break;
            case 26: $score = 85; break;
            case 27: $score = 87; break;
            case 28: $score = 90; break;
            case 29: $score = 93; break;
            case 30: $score = 96; break;   
            case 31: $score = 98; break;
            case 32: $score = 101; break;         
            default: $score = 104; break;
        }
        return $score;
    }
}

?>