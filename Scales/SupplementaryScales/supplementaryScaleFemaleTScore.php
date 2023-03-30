<?php
class supplementaryScoreTFemale{

    function valuesT($counter = array()){
        $i = 0;
        while($i < count($counter)){
            switch($i){
                case 0:
                    $counter[0] = $this->scale_A($counter[0]);
                break;
                case 1:
                    $counter[1] = $this->scale_R($counter[1]);
                break;
                case 2:
                    $counter[2] = $this->scale_Fyo($counter[2]);
                break;
                case 3:
                    $counter[3] = $this->scale_AMAC($counter[3]);
                break;
                case 4:
                    $counter[4] = $this->scale_HR($counter[4]);
                break;
                case 5:
                    $counter[5] = $this->scale_Do($counter[5]);
                break;
                case 6:
                    $counter[6] = $this->scale_Rs($counter[6]);
                break;
                case 7:
                    $counter[7] = $this->scale_Dpr($counter[7]);
                break;
                case 8:
                    $counter[8] = $this->scale_GM($counter[8]);
                break;
                case 9:
                    $counter[9] = $this->scale_GF($counter[9]);
                break;
                case 10:
                    $counter[10] = $this->scale_EPK($counter[10]);
                break;
                case 11:
                    $counter[11] = $this->scale_EPS($counter[11]);
                break;
                case 12:
                    $counter[12] = $this->scale_ls1($counter[12]);
                break;
                case 13:
                    $counter[13] = $this->scale_ls2($counter[13]);
                break;
                case 14:
                    $counter[14] = $this->scale_ls3($counter[14]);
                break;
                case 15:
                    $counter[15] = $this->scale_Fp($counter[15]);
                break;           
            }
            $i++;
        }
        return $counter;
    }
 
    function scale_A($c){
        switch($c){
            
            case 0: $T = 34; break;
            case 1: $T = 36; break;
            case 2: $T = 37; break;   
            case 3: $T = 38; break;
            case 4: $T = 40; break;
            case 5: $T = 41; break; 
            case 6: $T = 42; break;
            case 7: $T = 44; break;
            case 8: $T = 45; break;   
            case 9: $T = 47; break;
            case 10: $T = 48 ; break;
            case 11: $T = 49; break; 
            case 12: $T = 51; break;
            case 13: $T = 52; break;
            case 14: $T = 53; break;   
            case 15: $T = 55; break;   
            case 16: $T = 56; break;
            case 17: $T = 58; break;
            case 18: $T = 59; break; 
            case 19: $T = 60; break;
            case 20: $T = 62; break;
            case 21: $T = 63; break;
            case 22: $T = 64; break;   
            case 23: $T = 66; break;
            case 24: $T = 67; break;
            case 25: $T = 69; break; 
            case 26: $T = 70; break;
            case 27: $T = 71; break;
            case 28: $T = 73; break;   
            case 29: $T = 74; break;
            case 30: $T = 75; break;
            case 31: $T = 77; break; 
            case 32: $T = 78; break;
            case 33: $T = 80; break;
            case 34: $T = 81; break;   
            case 35: $T = 82; break;
            case 36: $T = 84; break;
            case 37: $T = 85; break; 
            case 38: $T = 86; break;
            default: $T = 88; break;
        }
        return $T;
    }

    function scale_R($c){
        switch($c){
            
            case 11: $T = 30; break;
            case 12: $T = 33; break;
            case 13: $T = 35; break;   
            case 14: $T = 38; break;
            case 15: $T = 41; break;
            case 16: $T = 43; break;
            case 17: $T = 46; break;   
            case 18: $T = 48; break;
            case 19: $T = 51; break;
            case 20: $T = 53; break;
            case 21: $T = 56; break;   
            case 22: $T = 58; break;
            case 23: $T = 61; break;
            case 24: $T = 63; break;
            case 25: $T = 66; break;   
            case 26: $T = 68; break;
            case 27: $T = 71; break;
            case 28: $T = 73; break;
            case 29: $T = 76; break;   
            case 30: $T = 78; break;
            case 31: $T = 81; break;
            case 32: $T = 83; break;
            case 33: $T = 86; break;   
            case 34: $T = 88; break;
            case 35: $T = 91; break;
            case 36: $T = 93; break; 
            default: $T = 96; break;
        }
        return $T;
    }

    function scale_Fyo($c){
        $T = ($c*2);
        switch($c){
            //que hacer si patron de 2 en 2 baja a 1 en un punto.
            case $c < 37: $T -= 18; break;
            case $c < 49: $T -= 19; break;
            default: $T -= 20; break;
        }
        return $T;
    }
   
    function scale_AMAC($c){
        switch($c){

            case 13: $T = 30; break;
            case 14: $T = 33; break;
            case 15: $T = 36; break;
            case 16: $T = 38; break;
            case 17: $T = 41; break;
            case 18: $T = 44; break;
            case 19: $T = 47; break;
            case 20: $T = 50; break;
            case 21: $T = 53; break;
            case 22: $T = 55; break;
            case 23: $T = 58; break;
            case 24: $T = 61; break;
            case 25: $T = 64; break;
            case 26: $T = 67; break;
            case 27: $T = 69; break;
            case 28: $T = 72; break;
            case 29: $T = 75; break;
            case 30: $T = 78; break;
            case 31: $T = 81; break;
            case 32: $T = 83; break;
            case 33: $T = 86; break;
            case 34: $T = 89; break;
            case 35: $T = 92; break;
            case 36: $T = 95; break;
            case 37: $T = 98; break;
            case 38: $T = 100; break;
            case 39: $T = 103; break;
            case 40: $T = 106; break;
            case 41: $T = 109; break;
            case 42: $T = 112; break;
            case 43: $T = 114; break;
            case 44: $T = 117; break;
            default: $T = 120; break;
        }
        return $T;
    }

    function scale_HR($c){
        switch($c){

            case 10: $T = 31; break;
            case 11: $T = 35; break;
            case 12: $T = 38; break;   
            case 13: $T = 42; break;
            case 14: $T = 45; break;
            case 15: $T = 49; break;        
            case 16: $T = 52; break;
            case 17: $T = 56; break;
            case 18: $T = 59; break;   
            case 19: $T = 63; break;
            case 20: $T = 66; break;
            case 21: $T = 70; break;           
            case 22: $T = 73; break;
            case 23: $T = 77; break;
            case 24: $T = 80; break;   
            case 25: $T = 84; break;
            case 26: $T = 87; break;
            case 27: $T = 91; break; 
            default: $T = 94; break;
        }
        return $T;
    }

    function scale_Do($c){
        switch($c){
            
            case 10: $T = 32; break;
            case 11: $T = 35; break;
            case 12: $T = 39; break;   
            case 13: $T = 42; break;
            case 14: $T = 45; break;
            case 15: $T = 49; break; 
            case 16: $T = 52; break;
            case 17: $T = 56; break;
            case 18: $T = 59; break;   
            case 19: $T = 62; break;
            case 20: $T = 66; break;
            case 21: $T = 69; break; 
            case 22: $T = 73; break;
            case 23: $T = 76; break;
            case 24: $T = 80; break;   
            default: $T = 83; break;
        }
        return $T;
}
    function scale_Rs($c){
        switch($c){
            
            case 16: $T = 32; break;
            case 17: $T = 35; break;
            case 18: $T = 38; break;   
            case 19: $T = 41; break;
            case 20: $T = 44; break;
            case 21: $T = 47; break; 
            case 22: $T = 50; break;
            case 23: $T = 53; break;
            case 24: $T = 56; break;   
            case 25: $T = 59; break;
            case 26: $T = 62; break;
            case 27: $T = 65; break; 
            case 28: $T = 68; break;
            case 29: $T = 71; break;   
            default: $T = 74; break;
        }
        return $T;
}
    function scale_Dpr($c){
        switch($c){
            
            case 2: $T = 31; break;
            case 3: $T = 32; break;
            case 4: $T = 34; break;   
            case 5: $T = 36; break;
            case 6: $T = 37; break;
            case 7: $T = 39; break; 
            case 8: $T = 41; break;
            case 9: $T = 42; break;
            case 10: $T = 44; break;   
            case 11: $T = 45; break;
            case 12: $T = 47; break;
            case 13: $T = 49; break; 
            case 14: $T = 50; break;
            case 15: $T = 52; break;
            case 16: $T = 54; break;   
            case 17: $T = 55; break;
            case 18: $T = 57; break;
            case 19: $T = 59; break; 
            case 20: $T = 60; break;
            case 21: $T = 62; break;
            case 22: $T = 64; break;   
            case 23: $T = 65; break;
            case 24: $T = 67; break;
            case 25: $T = 68; break; 
            case 26: $T = 70; break;
            case 27: $T = 72; break;
            case 28: $T = 73; break;   
            case 29: $T = 75; break;
            case 30: $T = 77; break;
            case 31: $T = 78; break; 
            case 32: $T = 80; break;
            case 33: $T = 82; break;
            case 34: $T = 83; break;   
            case 35: $T = 85; break;
            case 36: $T = 86; break;
            case 37: $T = 88; break; 
            case 38: $T = 90; break;
            case 39: $T = 91; break;
            case 40: $T = 93; break;   
            default: $T = 95; break;
        }
        return $T;
    }

    function scale_GM($c){
        $T = ($c*2);
        switch($c){
            
            case 18: $T = 30; break;
            case 19: $T = 32; break;
            case 20: $T = 34; break;   
            case 21: $T = 35; break;
            case 22: $T = 37; break;
            case 23: $T = 39; break; 
            case 24: $T = 41; break;
            case 25: $T = 42; break;
            case 26: $T = 44; break;   
            case 27: $T = 46; break;
            case 28: $T = 47; break;
            case 29: $T = 49; break; 
            case 30: $T = 51; break;
            case 31: $T = 53; break;
            case 32: $T = 54; break;   
            case 33: $T = 56; break;
            case 34: $T = 58; break;
            case 35: $T = 60; break; 
            case 36: $T = 61; break;
            case 37: $T = 63; break;
            case 38: $T = 65; break;   
            case 39: $T = 66; break;
            case 40: $T = 68; break;
            case 41: $T = 70; break; 
            case 42: $T = 72; break;
            case 43: $T = 73; break;
            case 44: $T = 75; break;   
            case 45: $T = 77; break;
            case 46: $T = 78; break;
            default: $T = 80; break;
        }
        return $T;
    }

    function scale_GF($c){
        switch($c){
            
            case 29: $T = 31; break;
            case 30: $T = 34; break;
            case 31: $T = 37; break;   
            case 32: $T = 40; break;
            case 33: $T = 43; break;
            case 34: $T = 46; break; 
            case 35: $T = 49; break;
            case 36: $T = 52; break;
            case 37: $T = 55; break;   
            case 38: $T = 58; break;
            case 39: $T = 61; break;
            case 40: $T = 64; break; 
            case 41: $T = 67; break;
            case 42: $T = 70; break;
            case 43: $T = 73; break;   
            case 44: $T = 76; break;
            case 45: $T = 79; break;
            default: $T = 82; break;
        }
        return $T;
    }
    function scale_EPK($c){
        switch($c){
            
            case 0: $T = 36; break;
            case 1: $T = 37; break;
            case 2: $T = 39; break;   
            case 3: $T = 41; break;
            case 4: $T = 42; break;
            case 5: $T = 44; break; 
            case 6: $T = 45; break;
            case 7: $T = 47; break;
            case 8: $T = 49; break;   
            case 9: $T = 50; break;
            case 10: $T = 52; break;
            case 11: $T = 53; break; 
            case 12: $T = 55; break;
            case 13: $T = 57; break;
            case 14: $T = 58; break;   
            case 15: $T = 60; break;
            case 16: $T = 61; break;
            case 17: $T = 63; break; 
            case 18: $T = 65; break;
            case 19: $T = 66; break;
            case 20: $T = 68; break;   
            case 21: $T = 69; break;
            case 22: $T = 71; break;
            case 23: $T = 73; break; 
            case 24: $T = 74; break;
            case 25: $T = 76; break;
            case 26: $T = 77; break;   
            case 27: $T = 79; break;
            case 28: $T = 81; break;
            case 29: $T = 82; break; 
            case 30: $T = 84; break;
            case 31: $T = 85; break;
            case 32: $T = 87; break;   
            case 33: $T = 89; break;
            case 34: $T = 90; break;
            case 35: $T = 92; break; 
            case 36: $T = 93; break;
            case 37: $T = 95; break;
            case 38: $T = 96; break;   
            case 39: $T = 98; break;
            case 40: $T = 100; break;
            case 41: $T = 101; break; 
            case 42: $T = 103; break;
            case 43: $T = 104; break;
            case 44: $T = 106; break;   
            case 45: $T = 108; break;   
            default: $T = 109; break;
        }
        return $T;
    }

    function scale_EPS($c){
        switch($c){
            
            case 0: $T = 35; break;
            case 1: $T = 36; break;
            case 2: $T = 37; break;   
            case 3: $T = 39; break;
            case 4: $T = 40; break;
            case 5: $T = 41; break; 
            case 6: $T = 42; break;
            case 7: $T = 43; break;
            case 8: $T = 44; break;   
            case 9: $T = 46; break;
            case 10: $T = 47; break;
            case 11: $T = 48; break; 
            case 12: $T = 49; break;
            case 13: $T = 50; break;
            case 14: $T = 51; break;   
            case 15: $T = 53; break;
            case 16: $T = 54; break;
            case 17: $T = 55; break; 
            case 18: $T = 56; break;
            case 19: $T = 57; break;
            case 20: $T = 58; break;   
            case 21: $T = 60; break;
            case 22: $T = 61; break;
            case 23: $T = 62; break; 
            case 24: $T = 63; break;
            case 25: $T = 64; break;
            case 26: $T = 65; break;   
            case 27: $T = 67; break;
            case 28: $T = 68; break;
            case 29: $T = 69; break; 
            case 30: $T = 70; break;
            case 31: $T = 71; break;
            case 32: $T = 72; break;   
            case 33: $T = 74; break;
            case 34: $T = 75; break;
            case 35: $T = 76; break; 
            case 36: $T = 77; break;
            case 37: $T = 78; break;
            case 38: $T = 79; break;   
            case 39: $T = 81; break;
            case 40: $T = 82; break;
            case 41: $T = 83; break; 
            case 42: $T = 84; break;
            case 43: $T = 85; break;
            case 44: $T = 86; break;   
            case 45: $T = 88; break;
            case 46: $T = 89; break;
            case 47: $T = 90; break; 
            case 48: $T = 91; break;
            case 49: $T = 92; break;
            case 50: $T = 93; break;   
            case 51: $T = 95; break;
            case 52: $T = 96; break;
            case 53: $T = 97; break; 
            case 54: $T = 98; break;
            case 55: $T = 99; break;
            case 56: $T = 100; break;   
            case 57: $T = 102; break;
            case 58: $T = 103; break;
            case 59: $T = 104; break;
            default: $T = 105; break;
        }
        return $T;
    }

    function scale_ls1($c){
        switch($c){
            
            case 0: $T = 35; break;
            case 1: $T = 38; break;
            case 2: $T = 41; break;   
            case 3: $T = 44; break;
            case 4: $T = 47; break;
            case 5: $T = 50; break; 
            case 6: $T = 53; break;
            case 7: $T = 56; break;
            case 8: $T = 59; break;   
            case 9: $T = 62; break;
            case 10: $T = 65; break;
            case 11: $T = 67; break; 
            case 12: $T = 70; break;
            case 13: $T = 73; break;
            default: $T = 76; break;
        }
        return $T;
    }

    function scale_ls2($c){
        switch($c){
            
            case 0: $T = 35; break;
            case 1: $T = 41; break;
            case 2: $T = 46; break;   
            case 3: $T = 52; break;
            case 4: $T = 58; break;
            case 5: $T = 63; break; 
            case 6: $T = 69; break;
            case 7: $T = 75; break;
            default: $T = 80; break;
        }
        return $T;
    }

    function scale_ls3($c){
        switch($c){
            
            case 0: $T = 33; break;
            case 1: $T = 36; break;
            case 2: $T = 39; break;   
            case 3: $T = 42; break;
            case 4: $T = 45; break;
            case 5: $T = 48; break; 
            case 6: $T = 51; break;
            case 7: $T = 54; break;
            case 8: $T = 57; break;   
            case 9: $T = 60; break;
            case 10: $T = 63; break;
            case 11: $T = 66; break; 
            case 12: $T = 68; break;
            case 13: $T = 71; break;
            case 14: $T = 74; break;   
            case 15: $T = 77; break;
            default: $T = 80; break;
        }
        return $T;
    }

    function scale_Fp($c){
        switch($c){
            
            case 0: $T = 39; break;
            case 1: $T = 42; break;
            case 2: $T = 45; break;   
            case 3: $T = 49; break;
            case 4: $T = 52; break;
            case 5: $T = 53; break; 
            case 6: $T = 56; break;
            case 7: $T = 59; break;
            case 8: $T = 63; break;   
            case 9: $T = 66; break;
            case 10: $T = 70; break;
            case 11: $T = 73; break; 
            case 12: $T = 76; break;
            case 13: $T = 80; break;
            case 14: $T = 83; break;   
            case 15: $T = 87; break;
            case 16: $T = 90; break;
            case 17: $T = 93; break; 
            case 18: $T = 97; break;
            case 19: $T = 101; break;
            case 20: $T = 104; break;   
            case 21: $T = 107; break;
            case 22: $T = 111; break;
            case 22: $T = 114; break;
            default: $T = 118; break;
        }
        return $T;
    }
}
?>