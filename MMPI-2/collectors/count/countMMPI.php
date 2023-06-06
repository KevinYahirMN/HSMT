<?php

abstract class countMMPI{

    abstract function collect();

    protected function revision($obj = null, $factorK = null){
        $count = 0;
        $class = get_Class($obj);
        switch($class){
            case 'scale_Hs':
                $count = $obj->scale() + $factorK->sum5K;
            break;
            case 'scale_Dp':
                $count = $obj->scale() + $factorK->sum4K;
            break;
            case 'scale_Pt':
                $count = $obj->scale() + $factorK->sumK;
            break;
            case 'scale_Es':
                $count = $obj->scale() + $factorK->sumK;
            break;
            case 'scale_Ma':
                $count = $obj->scale() + $factorK->sum2K;
            break;
            default: $count = $obj->scale(); break;
        }
        
        return $count;
    }
}

?>