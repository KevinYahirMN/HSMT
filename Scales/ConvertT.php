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
        }
    }

    function scale_L($c){
        if($c == 10){
            $T = 38;
        }else{
            $T = $c*58;
            if($T%15 >= 9){
                $T = round($T/15);
            }else{
                $T = intval($T/15);
            }
        }
        return $T;
    }

    function scale_F($c){
        return $T;
    }

    function scale_K($c){
        return $T;
    }

    function scale_Hs($c){
        return $T;
    }

    function scale_D($c){
        return $T;
    }

    function scale_Hi($c){
        return $T;
    }

    function scale_Dp($c){
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