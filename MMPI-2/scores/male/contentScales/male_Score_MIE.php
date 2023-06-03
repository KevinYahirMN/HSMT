<?php

class male_Score_MIE{
    function score($count){
        switch($count){
            
            case 0: $score = 32; break;
            case 1: $score = 36; break;
            case 2: $score = 40; break;   
            case 3: $score = 43; break;
            case 4: $score = 46; break;
            case 5: $score = 50; break; 
            case 6: $score = 53; break;   
            case 7: $score = 57; break;
            case 8: $score = 61; break;   
            case 9: $score = 66; break;
            case 10: $score = 70;break;
            case 11: $score = 75; break; 
            case 12: $score = 79; break;
            case 13: $score = 83; break;
            case 14: $score = 88; break;   
            case 15: $score = 92; break;   
            default: $score = 96; break;  
           
        }
        return $score;
    }
}

?>