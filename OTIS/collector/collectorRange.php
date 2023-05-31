<?php
include_once('../interfaces/ICollector.php');
include_once('../results/range.php');

class collectorRange implements ICollectorOTIS{
    private $obj;

    function __construct(){
        if($this->obj == null){
            $this->obj = new range();
        }
    }

    function collect($iq = 0){
        $range = $this->obj->result($iq);
        return $range;
    }
}

?>