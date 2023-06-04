<?php

abstract class collectorMMPI{

    abstract function collect_Basic();
    abstract function collect_Content();
    abstract function collect_Supplementary();

    protected function collector($obj = null, $array = array()){
        
        $var = array();

        if(get_Class($obj) == 'collectorCount'){
            $var = $obj->collect();
        }else{
            $var = $obj->collect($array);
        }

        return $var;
    }
}

?>