<?php
class FactorK{
    function sumK($c, $K){
        $c += $K;
        
        return $c;
    }

    function sum5K($c, $K){
        $factorK = 0;
        if($K%2 == 0){
            $factorK = $K*0.5;
        }else{
            $factorK = (($K+1)*(0.5));
        }
        $c += $factorK;
        
        return $c;
    }

    function sum4K($c, $K){
        $factorK = 0;
        if($K%2.5 == 0){
            $factorK = $K*0.4;
        }else{
            if($K%2.5 >= 0.5){
                $factorK = round($K*0.4);
            }
            else{
                $factorK = intval($K*0.4);
            }
        }
        $c += $factorK;
        
        return $c;
    }

    function sum2K($c, $K){
        $factorK = 0;
        if($K%5 == 0){
            $factorK = ($K*0.2);
        }else{
            if($K%5 >= 3){
                $factorK = round($K*0.2);
            }
            else{
                $factorK = intval($K*0.2);
            }
        }
        $c += $factorK;

        return $c;
    }
}
?>