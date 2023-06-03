<?php

class female_Score_MIE{
    function score($count){
        switch($count){
            
            case 0: $score = 31; break;
            case 1: $score = 34; break;
            case 2: $score = 37; break;   
            case 3: $score = 39; break;
            case 4: $score = 42; break;
            case 5: $score = 43; break; 
            case 6: $score = 45; break;
            case 7: $score = 47; break;
            case 8: $score = 48; break;   
            case 9: $score = 50; break;
            case 10: $score = 52;break;
            case 11: $score = 53; break; 
            case 12: $score = 56; break;
            case 13: $score = 58; break;
            case 14: $score = 61; break;   
            case 15: $score = 64; break;   
            case 16: $score = 67; break;
            case 17: $score = 71; break;
            case 18: $score = 74; break; 
            case 19: $score = 77; break;
            case 20: $score = 80; break;
            case 21: $score = 83; break;
            case 22: $score = 87; break;   
            default: $score = 90; break;
           
        }
        return $score;
    }
}

?>