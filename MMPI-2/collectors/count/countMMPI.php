<?php

abstract class countMMPI{

    abstract function collect();

    protected function revision($obj = null, $factorK = null, $k = 0){
        $count = 0;
        $class = get_Class($obj);
        switch($class){
            case 'scale_Hs':
                $count = $obj->scale();
                $count += $factorK->sum5K($count, $k);
            break;
            case 'scale_Dp':
                $count = $obj->scale();
                $count += $factorK->sum4K($count, $k);
            break;
            case 'scale_Pt':
                $count = $obj->scale();
                $count += $factorK->sumK($count, $k);
            break;
            case 'scale_Es':
                $count = $obj->scale();
                $count += $factorK->sumK($count, $k);
            break;
            case 'scale_Ma':
                $count = $obj->scale();
                $count += $factorK->sum2K($count, $k);
            break;
            default: $count = $obj->scale(); break;
        }
        
        return $count;
    }
}

?>