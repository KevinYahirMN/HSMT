<?php

class male_Score_RTR{
    function score($count){
        switch($count){
            case 0: $score = 30; break;
            case 1: $score = 33; break;
            case 2: $score = 35; break;   
            case 3: $score = 38; break;
            case 4: $score = 40; break;
            case 5: $score = 42; break; 
            case 6: $score = 44; break;
            case 7: $score = 46; break;
            case 8: $score = 48; break;   
            case 9: $score = 50; break;
            case 10: $score = 52; break;
            case 11: $score = 55; break;     
            case 12: $score = 57; break;
            case 13: $score = 60; break;
            case 14: $score = 64; break;   
            case 15: $score = 67; break;
            case 16: $score = 70; break;
            case 17: $score = 73; break; 
            case 18: $score = 76; break;
            case 19: $score = 79; break;
            case 20: $score = 82; break;   
            case 21: $score = 85; break;
            case 22: $score = 87; break;
            case 23: $score = 90; break;
            case 24: $score = 93; break;
            case 25: $score = 96; break; 
            default: $score = 98; break; 
        }
        return $score;
    }
}

?>