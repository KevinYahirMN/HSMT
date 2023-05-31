<?php
include_once('../interfaces/ICollector.php');
include_once('../results/dx.php');

class collectorDx implements ICollectorOTIS{    
    private $obj;

    function __construct(){
        if($this->obj == null){
            $this->obj = new dx();
        }
    }

    function collect($iq = 0){
        $dx = $this->obj->result($iq);
        return $dx;
    }
}

?>