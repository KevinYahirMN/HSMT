<?php
class basicscoreTMale{

    function valuesT($counter = array()){
        $i = 0;
        while($i < count($counter)){
            switch($i){
                case 0:
                    $counter[0] = $this->scale_L($counter[0]);
                break;
                case 1:
                    $counter[1] = $this->scale_F($counter[1]);
                break;
                case 2:
                    $counter[2] = $this->scale_K($counter[2]);
                break;
                case 3:
                    $counter[3] = $this->scale_Hs($counter[3]);
                break;
                case 4:
                    $counter[4] = $this->scale_D($counter[4]);
                break;
                case 5:
                    $counter[5] = $this->scale_Hi($counter[5]);
                break;
                case 6:
                    $counter[6] = $this->scale_Dp($counter[6]);
                break;
                case 7:
                    $counter[7] = $this->scale_Mf($counter[7]);
                break;
                case 8:
                    $counter[8] = $this->scale_Pa($counter[8]);
                break;
                case 9:
                    $counter[9] = $this->scale_Pt($counter[9]);
                break;
                case 10:
                    $counter[10] = $this->scale_Es($counter[10]);
                break;
                case 11:
                    $counter[11] = $this->scale_Ma($counter[11]);
                break;
                case 12:
                    $counter[12] = $this->scale_Is($counter[12]);
                break;
            }
            $i++;
        }
        return $counter;
    }

    function scale_L($c){
        if($c == 10){
            $T = 38;
        }else{
            $T = $c*58;
            if($T%15 > 8){
                $T = round($T/15);
            }else{
                $T = intval($T/15);
            }
        }
        $T += 30;
        return $T;
    }

    function scale_F($c){
        if($c < 15){
            $T = (($c-1)*84);
            if($T%30 == 0){
                $T = round(($c*84)/30);
            }else{
                $T = intval(($c*84)/30);
            }
        }else{
            switch($c){
                case 17:
                    $T = intval(($c*84)/30);
                break;
                case 18:
                    $T = intval(($c*84)/30);
                break;
                case 19:
                    $T = intval(($c*84)/30);
                break;
                case 23:
                    $T = intval(($c*84)/30);
                break;
                case 24:
                    $T = intval(($c*84)/30);
                break;
                case 28:
                    $T = intval(($c*84)/30);
                break;
                case 29:
                    $T = intval(($c*84)/30);
                break;
                default:
                    $T = round(($c*84)/30);
                break;
            }
        }
        $T += 35;
        return $T;
    }

    function scale_K($c){
        $T = ($c*2) + 16;
        if($c > 20){
            $T++;
        }
        return $T;
    }

    function scale_Hs($c){
        $T = ($c*2);
        switch($c){
            case $c < 12: $T += 18; break;
            case $c < 14: $T += 19; break;
            case $c < 16: $T += 20; break;
            case $c < 18: $T += 21; break;
            case $c < 27: $T += 22; break;
            default: $T += 23; break;
        }

        return $T;
    }

    function scale_D($c){
        $T = ($c*2) + 9;
        if($c < 23){
            $T++;
        }else{
            $T += 2;
        }
        return $T;
    }

    function scale_Hi($c){
        $T = ($c*2);
        switch($c){
            case $c < 22: $T += 7; break;
            case $c < 27: $T += 8; break;
            case $c < 33: $T += 9; break;
            case $c < 40: $T += 10; break;
            case $c < 47: $T += 11; break;
            case $c < 53: $T += 12; break;
            default: $T += 13; break;            
        }
        
        return $T;
    }

    function scale_Dp($c){
        $T = ($c*2);
        switch($c){
            case $c < 23: $T += 2; break;
            case $c < 26: $T += 3; break;
            case $c < 28: $T += 4; break;
            case $c < 30: $T += 5; break;
            case $c < 32: $T += 6; break;
            case $c < 34: $T += 7; break;
            case $c < 36: $T += 8; break;
            case $c < 38: $T += 9; break;
            case $c < 41: $T += 10; break;
            case $c < 43: $T += 11; break;
            case $c < 45: $T += 12; break;
            default: $T += 13; break;
        }

        return $T;
    }

    function scale_Mf($c){
        $T = ($c*2);
        switch($c){
            case $c < 17: $T--; break;
            case $c < 20: break;
            case $c < 22: $T++; break;
            case $c < 24: $T += 2; break;
            case $c < 27: $T += 3; break;
            case $c < 29: $T += 4; break;
            case $c < 31: $T += 5; break;
            case $c < 33: $T += 6; break;
            case $c < 36: $T += 7; break;
            case $c < 38: $T += 8; break;
            case $c < 41: $T += 9; break;
            case $c < 43: $T += 10; break;
            case $c < 45: $T += 11; break;
            case $c < 48: $T += 12; break;
            case $c < 50: $T += 13; break;
            case $c < 52: $T += 14; break;
            default: $T += 15; break;
        }

        return $T;
    }

    function scale_Pa($c){
        $T = ($c*3);
        switch($c){
            case $c < 7: $T += 21; break;
            case $c < 10: $T += 21; break;
            case $c < 13: $T += 23; break;
            case $c < 25: $T += 24; break;
            case $c < 26: $T += 25; break;
            case $c < 31: $T += 26; break;
            default: $T += 27; break;
        }

        return $T;
    }

    function scale_Pt($c){
        $T = ($c*2);
        switch($c){
            case $c < 25: $T -= 6; break;
            case $c < 28: $T -= 5; break;
            default: $T -= 4; break;
        }
        return $T;
    }

    function scale_Es($c){
        $T = ($c*2);
        switch($c){
            case $c < 22: $T -= 5; break;
            case $c < 28: $T -= 6; break;
            case $c < 33: $T -= 7; break;
            case $c < 36: $T -= 8; break;
            case 36: $T -= 9; break;
            case $c < 39: $T -= 10; break;
            case $c < 41: $T -= 11; break;
            case $c < 43: $T -= 12; break;
            case $c < 45: $T -= 13; break;
            case 45: $T -= 14; break;
            case $c < 48: $T -= 16; break;
            case $c < 50: $T -= 17; break;
            case $c < 52: $T -= 18; break;
            case $c < 54: $T -= 19; break;
            case 56: $T -= 20; break;
            case $c < 59: $T -= 21; break;
            case $c < 61: $T -= 22; break;
            case $c < 63: $T -= 23; break;
            case $c < 65: $T -= 24; break;
            case $c < 67: $T -= 25; break;
            case 67: $T -= 26; break;
            case $c < 70: $T -= 27; break;
            case $c < 72: $T -= 28; break;
            case $c < 74: $T -= 29; break;
            default: $T -= 30; break;
        }

        return $T;
    }

    function scale_Ma($c){
        $T = ($c*2);
        switch($c){
            case $c < 20: $T += 5; break;
            case $c < 23: $T += 6; break;
            case $c < 25: $T += 7; break;
            case $c < 29: $T += $c - 17; break;
            case $c < 31: $T += 12; break;
            default: $T += $c - 17; break;
        }
        return $T;
    }

    function scale_Is($c){
        $T = ($c*2);
        switch($c){
            case $c < 20: $T += 4; break;
            case 20: $T += 3; break;
            case $c < 22: $T += 2; break;
            case 23: $T++; break;
            case $c < 26: break;
            case 26: $T--; break;
            case $c < 29: $T -= 2; break;
            case 29: $T -= 3; break;
            case $c < 32: $T -= 4; break;
            case 32: $T -= 5; break;
            case $c < 35: $T -= 6; break;
            case 35: $T -= 7; break;
            case $c < 38: $T -= 8; break;
            case 38: $T -= 9; break;
            case 39: $T -= 10; break;
            case $c < 42: $T -= 11; break;
            case 42: $T -= 12; break;
            case $c < 45: $T -= 13; break;
            case 45: $T -= 14; break;
            case $c < 48: $T -= 15; break;
            case 48: $T -= 16; break;
            case $c < 51: $T -= 17; break;
            case 51: $T -= 18; break;
            case $c < 54: $T -= 19; break;
            case 54: $T -= 20; break;
            case $c < 57: $T -= 21; break;
            case 57: $T -= 22; break;
            case $c < 60: $T -= 23; break;
            case 60: $T -= 24; break;
            case 61: $T -= 25; break;
            case $c < 64: $T -= 26; break;
            case 64: $T -= 27; break;
            case $c < 67: $T -= 28; break;
            case 67: $T -= 29; break;
            default: $T -= 30; break;
        }
        return $T;
    }
}
?>