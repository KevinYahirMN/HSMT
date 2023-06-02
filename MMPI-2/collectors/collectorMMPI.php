<?php

abstract class collectorMMPI{

    abstract function collect_Basic();
    abstract function collect_Content();
    abstract function collect_Supplementary();

    protected function collector($obj = null){
        $count = array();
        $count = $obj->collect();
        return $count;
    }
}

?>