<?php
class contentScoreTFemale{

    function valuesT($counter = array()){
        $i = 0;
        while($i < count($counter)){
            switch($i){
                case 0:
                    $counter[0] = $this->scale_ANS($counter[0]);
                break;
                case 1:
                    $counter[1] = $this->scale_MIE($counter[1]);
                break;
                case 2:
                    $counter[2] = $this->scale_OBS($counter[2]);
                break;
                case 3:
                    $counter[3] = $this->scale_DEP($counter[3]);
                break;
                case 4:
                    $counter[4] = $this->scale_SAU($counter[4]);
                break;
                case 5:
                    $counter[5] = $this->scale_DEL($counter[5]);
                break;
                case 6:
                    $counter[6] = $this->scale_ENJ($counter[6]);
                break;
                case 7:
                    $counter[7] = $this->scale_CIN($counter[7]);
                break;
                case 8:
                    $counter[8] = $this->scale_PAS($counter[8]);
                break;
                case 9:
                    $counter[9] = $this->scale_PTA($counter[9]);
                break;
                case 10:
                    $counter[10] = $this->scale_BAE($counter[10]);
                break;
                case 11:
                    $counter[11] = $this->scale_ISO($counter[11]);
                break;
                case 12:
                    $counter[12] = $this->scale_FAM($counter[12]);
                break;
                case 13:
                    $counter[13] = $this->scale_DTR($counter[13]);
                break;
                case 14:
                    $counter[14] = $this->scale_RTR($counter[14]);
                break;          
            }
            $i++;
        }
        return $counter;
    }
 
    function scale_ANS($c){
        switch($c){
            
            case 0: $T = 33; break;
            case 1: $T = 37; break;
            case 2: $T = 40; break;   
            case 3: $T = 42; break;
            case 4: $T = 44; break;
            case 5: $T = 46; break; 
            case 6: $T = 48; break;
            case 7: $T = 50; break;
            case 8: $T = 52; break;   
            case 9: $T = 53; break;
            case 10: $T = 55;break;
            case 11: $T = 57; break; 
            case 12: $T = 60; break;
            case 13: $T = 62; break;
            case 14: $T = 65; break;   
            case 15: $T = 68; break;   
            case 16: $T = 71; break;
            case 17: $T = 74; break;
            case 18: $T = 76; break; 
            case 19: $T = 79; break;
            case 20: $T = 82; break;
            case 21: $T = 85; break;
            case 22: $T = 88; break;   
            default: $T = 90; break;
        }
        return $T;
    }

    function scale_MIE($c){
        switch($c){
            
            case 0: $T = 31; break;
            case 1: $T = 34; break;
            case 2: $T = 37; break;   
            case 3: $T = 39; break;
            case 4: $T = 42; break;
            case 5: $T = 43; break; 
            case 6: $T = 45; break;
            case 7: $T = 47; break;
            case 8: $T = 48; break;   
            case 9: $T = 50; break;
            case 10: $T = 52;break;
            case 11: $T = 53; break; 
            case 12: $T = 56; break;
            case 13: $T = 58; break;
            case 14: $T = 61; break;   
            case 15: $T = 64; break;   
            case 16: $T = 67; break;
            case 17: $T = 71; break;
            case 18: $T = 74; break; 
            case 19: $T = 77; break;
            case 20: $T = 80; break;
            case 21: $T = 83; break;
            case 22: $T = 87; break;   
            default: $T = 90; break;
        }
        return $T;
    }

    function scale_OBS($c){
        
        switch($c){
            case 0: $T = 33; break;
            case 1: $T = 37; break;
            case 2: $T = 41; break;   
            case 3: $T = 44; break;
            case 4: $T = 47; break;
            case 5: $T = 50; break; 
            case 6: $T = 53; break;
            case 7: $T = 56; break;
            case 8: $T = 59; break;   
            case 9: $T = 63; break;
            case 10: $T = 67;break;
            case 11: $T = 70; break; 
            case 12: $T = 74; break;
            case 13: $T = 78; break;
            case 14: $T = 81; break;   
            case 15: $T = 85; break;   
            default: $T = 89; break;
        }
        return $T;
    }
   
    function scale_DEP($c){
        switch($c){

            case 0: $T = 32; break;
            case 1: $T = 36; break;
            case 2: $T = 39; break;   
            case 3: $T = 42; break;
            case 4: $T = 45; break;
            case 5: $T = 48; break; 
            case 6: $T = 50; break;
            case 7: $T = 53; break;
            case 8: $T = 55; break;   
            case 9: $T = 57; break;
            case 10: $T =59; break;
            case 11: $T = 61; break; 
            case 12: $T = 63; break;
            case 13: $T = 65; break;
            case 14: $T = 68; break;   
            case 15: $T = 70; break;   
            case 16: $T = 72; break;
            case 17: $T = 74; break;
            case 18: $T = 76; break; 
            case 19: $T = 79; break;
            case 20: $T = 80; break;
            case 21: $T = 82; break;
            case 22: $T = 84; break;
            case 23: $T = 86; break;
            case 24: $T = 88; break;   
            case 25: $T = 91; break;   
            case 26: $T = 93; break;
            case 27: $T = 95; break;
            case 28: $T = 97; break; 
            case 29: $T = 99; break;
            case 30: $T = 101; break;
            case 31: $T = 103; break;
            case 32: $T = 105; break;     
            default: $T = 107; break;
        }
        return $T;
    }

    function scale_SAU($c){
        switch($c){

            case 0: $T = 30; break;
            case 1: $T = 33; break;
            case 2: $T = 36; break;   
            case 3: $T = 39; break;
            case 4: $T = 42; break;
            case 5: $T = 45; break; 
            case 6: $T = 47; break;
            case 7: $T = 49; break;
            case 8: $T = 51; break;   
            case 9: $T = 53; break;
            case 10: $T =55; break;
            case 11: $T = 57; break; 
            case 12: $T = 59; break;
            case 13: $T = 61; break;
            case 14: $T = 62; break;   
            case 15: $T = 64; break;   
            case 16: $T = 66; break;
            case 17: $T = 68; break;
            case 18: $T = 70; break; 
            case 19: $T = 72; break;
            case 20: $T = 73; break;
            case 21: $T = 75; break;
            case 22: $T = 77; break;
            case 23: $T = 79; break;
            case 24: $T = 81; break;   
            case 25: $T = 83; break;   
            case 26: $T = 84; break;
            case 27: $T = 86; break;
            case 28: $T = 88; break; 
            case 29: $T = 90; break;
            case 30: $T = 92; break;
            case 31: $T = 94; break;
            case 32: $T = 96; break; 
            case 33: $T = 98; break;
            case 34: $T = 99; break;
            case 35: $T = 101; break;      
            default: $T = 103; break;
        }
        return $T;
    }

    function scale_DEL($c){
        switch($c){
            
            case 0: $T = 37; break;
            case 1: $T = 44; break;
            case 2: $T = 49; break;   
            case 3: $T = 52; break;
            case 4: $T = 55; break;
            case 5: $T = 58; break; 
            case 6: $T = 62; break;
            case 7: $T = 65; break;
            case 8: $T = 69; break;   
            case 9: $T = 72; break;
            case 10: $T = 76;break;
            case 11: $T = 79; break; 
            case 12: $T = 83; break;
            case 13: $T = 86; break;
            case 14: $T = 90; break;   
            case 15: $T = 93; break;   
            case 16: $T = 97; break;
            case 17: $T = 100; break;
            case 18: $T = 104; break; 
            case 19: $T = 107; break;
            case 20: $T = 111; break;
            case 21: $T = 114; break;
            case 22: $T = 118; break;   
            default: $T = 120; break;
        }
        return $T;
}
    function scale_ENJ($c){
        switch($c){
            
            case 0: $T = 33; break;
            case 1: $T = 37; break;
            case 2: $T = 41; break;   
            case 3: $T = 44; break;
            case 4: $T = 47; break;
            case 5: $T = 49; break; 
            case 6: $T = 52; break;
            case 7: $T = 55; break;
            case 8: $T = 58; break;   
            case 9: $T = 63; break;
            case 10: $T = 66;break;
            case 11: $T = 70; break; 
            case 12: $T = 73; break;
            case 13: $T = 78; break;
            case 14: $T = 83; break;   
            case 15: $T = 87; break;   
            default: $T = 91; break;
        }
        return $T;
}
    function scale_CIN($c){
        switch($c){
            
            case 0: $T = 30; break;
            case 1: $T = 33; break;
            case 2: $T = 35; break;   
            case 3: $T = 37; break;
            case 4: $T = 39; break;
            case 5: $T = 40; break; 
            case 6: $T = 41; break;
            case 7: $T = 43; break;
            case 8: $T = 44; break;   
            case 9: $T = 45; break;
            case 10: $T = 46;break;
            case 11: $T = 47; break; 
            case 12: $T = 49; break;
            case 13: $T = 52; break;
            case 15: $T = 55; break;
            case 16: $T = 56; break;
            case 17: $T = 61; break; 
            case 18: $T = 64; break;
            case 19: $T = 67; break;
            case 20: $T = 71; break;
            case 21: $T = 74; break;
            case 22: $T = 79; break;
            default: $T = 83; break;   
    
        }
        return $T;
    }

    function scale_PAS($c){
       
        switch($c){

            case 0: $T = 30; break;
            case 1: $T = 31; break;
            case 2: $T = 35; break;   
            case 3: $T = 37; break;
            case 4: $T = 39; break;
            case 5: $T = 42; break; 
            case 6: $T = 44; break;
            case 7: $T = 46; break;
            case 8: $T = 48; break;   
            case 10: $T = 53;break;
            case 11: $T = 56; break; 
            case 12: $T = 60; break;
            case 13: $T = 64; break;
            case 14: $T = 69; break;
            case 15: $T = 74; break;
            case 16: $T = 77; break; 
            case 17: $T = 81; break;
            case 18: $T = 85; break;
            case 19: $T = 90; break;
            case 20: $T = 95; break;
            case 21: $T = 97; break;
            default: $T = 102; break;  
            
        }
        return $T;
    }

    function scale_PTA($c){
        switch($c){
            
            case 0: $T = 30; break;
            case 1: $T = 32; break;
            case 2: $T = 35; break;   
            case 3: $T = 37; break;
            case 4: $T = 39; break;
            case 5: $T = 42; break; 
            case 6: $T = 44; break;
            case 7: $T = 46; break;
            case 8: $T = 48; break;   
            case 9: $T = 51; break;
            case 10: $T = 54;break;
            case 11: $T = 57; break; 
            case 12: $T = 61; break;
            case 13: $T = 66; break;
            case 14: $T = 70; break;   
            case 15: $T = 74; break;   
            case 16: $T = 79; break;
            case 17: $T = 83; break;   
            case 18: $T = 88; break;   
            default: $T = 92; break;
        }
        return $T;
    }
    function scale_BAE($c){
        switch($c){
            
            case 0: $T = 35; break;
            case 1: $T = 39; break;
            case 2: $T = 43; break;   
            case 3: $T = 47; break;
            case 4: $T = 50; break;
            case 5: $T = 53; break; 
            case 6: $T = 55; break;
            case 7: $T = 58; break;
            case 8: $T = 60; break;   
            case 9: $T = 62; break;
            case 10: $T = 65; break;
            case 11: $T = 67; break; 
            case 12: $T = 70; break;
            case 13: $T = 72; break;
            case 14: $T = 75; break;   
            case 15: $T = 77; break;
            case 16: $T = 79; break;
            case 17: $T = 82; break; 
            case 18: $T = 84; break;
            case 19: $T = 87; break;
            case 20: $T = 89; break;   
            case 21: $T = 91; break;
            case 22: $T = 95; break;
            case 23: $T = 97; break;
            default: $T = 99; break;
        }
        return $T;
    }

    function scale_ISO($c){
        switch($c){
            
            case 0: $T = 30; break;
            case 1: $T = 34; break;
            case 2: $T = 37; break;   
            case 3: $T = 41; break;
            case 4: $T = 44; break;
            case 5: $T = 46; break; 
            case 6: $T = 48; break;
            case 7: $T = 50; break;
            case 8: $T = 52; break;   
            case 9: $T = 54; break;
            case 10: $T = 57; break;
            case 11: $T = 59; break; 
            case 12: $T = 61; break;
            case 13: $T = 64; break;
            case 14: $T = 67; break;   
            case 15: $T = 69; break;
            case 16: $T = 72; break;
            case 17: $T = 75; break; 
            case 18: $T = 77; break;
            case 19: $T = 81; break;
            case 20: $T = 84; break;   
            case 21: $T = 85; break;
            case 22: $T = 88; break;
            case 23: $T = 90; break;
            default: $T = 93; break;
        }
        return $T;
    }

    function scale_FAM($c){
        switch($c){
            
            case 0: $T = 34; break;
            case 1: $T = 37; break;
            case 2: $T = 40; break;   
            case 3: $T = 43; break;
            case 4: $T = 45; break;
            case 5: $T = 47; break; 
            case 6: $T = 50; break;
            case 7: $T = 52; break;
            case 8: $T = 55; break;   
            case 9: $T = 57; break;
            case 10: $T = 59; break;
            case 11: $T = 62; break; 
            case 12: $T = 64; break;
            case 13: $T = 67; break;
            case 14: $T = 69; break;   
            case 15: $T = 72; break;
            case 16: $T = 74; break;
            case 17: $T = 77; break; 
            case 18: $T = 79; break;
            case 19: $T = 82; break;
            case 20: $T = 84; break;   
            case 21: $T = 87; break;
            case 22: $T = 90; break;
            case 23: $T = 92; break;
            case 24: $T = 95; break;
            default: $T = 97; break;
        }
        return $T;
    }

    function scale_DTR($c){
        switch($c){
            case 0: $T = 34; break;
            case 1: $T = 37; break;
            case 2: $T = 40; break;   
            case 3: $T = 43; break;
            case 4: $T = 45; break;
            case 5: $T = 47; break; 
            case 6: $T = 49; break;
            case 7: $T = 51; break;
            case 8: $T = 52; break;   
            case 9: $T = 54; break;
            case 10: $T = 55; break;
            case 11: $T = 57; break; 
            case 12: $T = 59; break;
            case 13: $T = 61; break;
            case 14: $T = 63; break;   
            case 15: $T = 66; break;
            case 16: $T = 68; break;
            case 17: $T = 70; break; 
            case 18: $T = 72; break;
            case 19: $T = 74; break;
            case 20: $T = 76; break;   
            case 21: $T = 78; break;
            case 22: $T = 81; break;
            case 23: $T = 83; break;
            case 24: $T = 85; break;
            case 25: $T = 87; break;   
            case 26: $T = 89; break;
            case 27: $T = 91; break;
            case 28: $T = 94; break;
            case 29: $T = 96; break;
            case 30: $T = 98; break;   
            case 31: $T = 100; break;
            case 32: $T = 102; break;
            default: $T = 104; break;
           
        }
        return $T;
    }

    function scale_RTR($c){
        switch($c){
            case 0: $T = 34; break;
            case 1: $T = 39; break;
            case 2: $T = 43; break;   
            case 3: $T = 46; break;
            case 4: $T = 49; break;
            case 5: $T = 51; break; 
            case 6: $T = 54; break;
            case 7: $T = 56; break;
            case 8: $T = 58; break;   
            case 9: $T = 60; break;
            case 10: $T = 63; break;
            case 11: $T = 66; break; 
            case 12: $T = 69; break;
            case 13: $T = 72; break;
            case 14: $T = 75; break;   
            case 15: $T = 78; break;
            case 16: $T = 80; break;
            case 17: $T = 83; break; 
            case 18: $T = 86; break;
            case 19: $T = 89; break;
            case 20: $T = 92; break;   
            case 21: $T = 95; break;
            case 22: $T = 97; break;
            case 23: $T = 100; break;
            case 24: $T = 103; break;
            case 25: $T = 106; break; 
            default: $T = 109; break; 

          
        }
        return $T;
    }

    
}
?>
