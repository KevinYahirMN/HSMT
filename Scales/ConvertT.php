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
                    $counter[12] = $this->scale_ls($counter[12]);
                break;
            }
            $i++;
        }
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
            case $c < 12:
                $T += 18;
            break;
            case $c < 14:
                $T += 19;
            break;
            case $c < 16:
                $T += 20;
            break;
            case $c < 18:
                $T += 21;
            break;
            case $c < 27:
                $T += 22;
            break;
            default:
                $T += 23;
            break;
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
            case $c < 22:
                $T += 7;
            break;
            case $c < 27:
                $T += 8;
            break;
            case $c < 33:
                $T += 9;
            break;
            case $c < 40:
                $T += 10;
            break;
            case $c < 47:
                $T += 11;
            break;
            case $c < 53:
                $T += 12;
            break;
            default:
                $T += 13;
            break;            
        }
        
        return $T;
    }

    function scale_Dp($c){
        $T = ($c*2);
        switch($c){
            case $c < 23:
                $T += 2;
            break;
            case $c < 26:
                $T += 3;
            break;
            case $c < 28:
                $T += 4;
            break;
            case $c < 30:
                $T += 5;
            break;
            case $c < 32:
                $T += 6;
            break;
            case $c < 34:
                $T += 7;
            break;
            case $c < 36:
                $T += 8;
            break;
            case $c < 38:
                $T += 9;
            break;
            case $c < 41:
                $T += 10;
            break;
            case $c < 43:
                $T += 11;
            break;
            case $c < 45:
                $T += 12;
            break;
            default:
                $T += 13;
            break;
        }

        return $T;
    }

    function scale_Mf($c){
        return $T;
    }

    function scale_Pa($c){
        return $T;
    }

    function scale_Pt($c){
        return $T;
    }

    function scale_Es($c){
        return $T;
    }

    function scale_Ma($c){
        return $T;
    }

    function scale_ls($c){
        return $T;
    }
}
?>