<?php
class FactorK{

    /*Obtención de factor a sumar 
    mediante puntuación K*/
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
        $factorK = $K*0.4;
        
        if($K%2.5 >= 1.5){
            $factorK = round($factorK);
        }
        else{
            $factorK = intval($factorK);
        }

        $c += $factorK;
        
        return $c;
    }

    function sum2K($c, $K){
        $factorK = $K*0.2;

        if($K%5 >= 3){
            $factorK = round($factorK);
        }
        else{
            $factorK = intval($factorK);
        }
        
        $c += $factorK;

        return $c;
    }
}
?>