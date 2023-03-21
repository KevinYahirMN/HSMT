<?php
class ConvertT{

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
    }

    function scale_L($c){
        $T = 5*($c + 5);
        switch($c){
            case 0: $T = $c; break;
            case $c < 3: $T++; break;
            case $c < 6: break;
            case $c < 8: $T--; break;
            case 8: $T -= 2; break;
            case $c < 12: $T -= 3; break;
            case $c < 14: $T -= 4; break;
            default: $T -= 5; break;
        }

        return $T;
    }

    function scale_F($c){
        $T = ($c*3);
        switch($c){
            case $c < 5: $T += 34; break;
            case $c < 11: $T += 33; break;
            case $c < 17: $T += 32; break;
            case $c < 22: $T += 31; break;
            case $c < 28: $T += 30; break;
            default: $T += 29; break;
        }

        return $T;
    }

    function scale_K($c){
        $T = ($c*2);
        switch($c){
            case $c < 16: $T += 17; break;
            case $c < 24: $T += 18; break;
            case $c < 32: $T += 19; break;
            case $c < 40: $T += 20; break;
            case $c < 42: $T += 21; break;
            default: $T += 22; break;
        }

        return $T;
    }

    function scale_Hs($c){
        $T = ($c*2);
        switch($c){
            case $c < 16: $T += 17; break;
            case $c < 20: $T += 18; break;
            case $c < 25: $T += 19; break;
            case $c < 29: $T += 20; break;
            case $c < 34: $T += 21; break;
            case $c < 39: $T += 22; break;
            case $c < 44: $T += 23; break;
            default: $T += 24; break;
        }

        return $T;
    }

    function scale_D($c){
        $T = ($c*2);
        switch($c){
            case $c < 23: $T += 5; break;
            case $c < 31: $T += 6; break;
            case $c < 40: $T += 5; break;
            case $c < 49: $T += 4; break;
            default: $T += 3; break;
        }

        return $T;
    }

    function scale_Hi($c){
        $T = ($c*2);
        switch($c){
            case $c < 21: $T += 5; break;
            case $c < 26: $T += 4; break;
            case $c < 35: $T += 5; break;
            case $c < 43: $T += 6; break;
            case $c < 51: $T += 7; break;
            default: $T += 8; break;
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
            case 30: $T += 6; break;
            case $c < 33: $T += 7; break;
            case $c < 35: $T += 8; break;
            case $c < 37: $T += 9; break;
            case $c < 39: $T += 10; break;
            case $c < 41: $T += 11; break;
            case 41: $T += 12; break;
            case $c < 44: $T += 13; break;
            case $c < 46: $T += 14; break;
            case $c < 48: $T += 15; break;
            case $c < 50: $T += 16; break;
            default: $T += 17; break;
        }

        return $T;
    }

    function scale_Mf($c){
        switch($c){
            case 5: $T = 118; break;
            case 6: $T = 115; break;
            case 7: $T = 113; break;
            case 8: $T = 110; break;
            case 9: $T = 107; break;
            case 10: $T = 104; break;
            case 11: $T = 102; break;
            case 12: $T = 99; break;
            case 13: $T = 96; break;
            case 14: $T = 94; break;
            case 15: $T = 91; break;
            case 16: $T = 88; break;
            case 17: $T = 86; break;
            case 18: $T = 83; break;
            case 19: $T = 80; break;
            case 20: $T = 78; break;
            case 21: $T = 75; break;
            case 22: $T = 72; break;
            case 23: $T = 69; break;
            case 24: $T = 67; break;
            case 25: $T = 64; break;
            case 26: $T = 61; break;
            case 27: $T = 59; break;
            case 28: $T = 56; break;
            case 29: $T = 53; break;
            case 30: $T = 51; break;
            case 31: $T = 48; break;
            case 32: $T = 45; break;
            case 33: $T = 42; break;
            case 34: $T = 40; break;
            case 35: $T = 37; break;
            case 36: $T = 34; break;
            case 37: $T = 32; break;
            case 38: $T = 30; break;
            default:
                if($c < 5){
                    $T = 120;
                }else{
                    $T = 30;
                }
            break;
        }

        return $T;
    }

    function scale_Pa($c){
        $T = ($c*3);
        switch($c){
            case $c < 12: $T += 20; break;
            case $c < 14: $T += 21; break;
            case $c < 17: $T += 22; break;
            case $c < 20: $T += 23; break;
            case $c < 23: $T += 24; break;
            case $c < 25: $T += 25; break;
            case $c < 28: $T += 26; break;
            case $c < 30: $T += 27; break;
            default: $T += 28; break;
        }

        return $T;
    }

    function scale_Pt($c){
        $T = ($c*2);
        switch($c){
            case $c < 21: $T -= 6; break;
            case $c < 61: $T -= 7; break;
            default: $T -= 8; break;
        }
        return $T;
    }

    function scale_Es($c){
        $T = ($c*2);
        switch($c){
            case $c < 24: $T -= 6; break;
            case $c < 26: $T -= 7; break;
            case $c < 29: $T -= 8; break;
            case $c < 31: $T -= 9; break;
            case $c < 34: $T -= 10; break;
            case $c < 38: $T -= 11; break;
            case $c < 43: $T -= 12; break;
            case $c < 49: $T -= 13; break;
            case $c < 54: $T -= 14; break;
            case $c < 59: $T -= 15; break;
            case $c < 65: $T -= 16; break;
            default: $T -= 17; break;
        }

        return $T;
    }

    function scale_Ma($c){
        $T = ($c*2);
        switch($c){
            case $c < 18: $T += 5; break;
            case $c < 20: $T += 6; break;
            case 20: $T += 7; break;
            case $c < 23: $T += 8; break;
            case $c < 26: $T += $c - 14; break;
            case 26: $T += 11; break;
            case $c < 29: $T += $c - 15; break;
            case $c < 32: $T += $c - 16; break;
            case $c < 36: $T += $c - 17; break;
            case $c < 38: $T += $c - 18; break;
            case $c < 41: $T += $c - 19; break;
            case $c < 44: $T += $c - 20; break;
            default: $T += $c - 21; break;
        }
        return $T;
    }

    function scale_Is($c){
        $T = $c;
        switch($c){
            case $c < 18: $T += 20; break;
            case $c < 22: $T += 21; break;
            case $c < 27: $T += 22; break;
            case $c < 32: $T += 23; break;
            case $c < 36: $T += 24; break;
            case $c < 41: $T += 25; break;
            case $c < 46: $T += 26; break;
            case $c < 50: $T += 27; break;
            case $c < 55: $T += 28; break;
            case $c < 60: $T += 29; break;
            case $c < 64: $T += 30; break;
            case $c < 69: $T += 31; break;
            default: $T -= 32; break;
        }
        return $T;
    }
}
?>