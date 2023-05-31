<?php
include_once('../interfaces/ICollector.php');
include_once('../calculateIQ/calculateIQ.php');

class collectorIQ implements ICollectorOTIS{
    private $obj;
    
    function __construct(){
        if($this->obj == null){
            $this->obj = new calculateIQ();
        }
    }

    function collect($count = 0){
        $iq = $this->obj->calculate($count);
        return $iq;
    }
}

?>