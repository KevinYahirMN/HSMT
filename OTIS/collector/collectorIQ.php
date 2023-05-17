<?php
include_once('../interfaces/ICollector.php');
include_once('../calculateIQ/calculateIQ.php');

class collectorIQ implements ICollectorOTIS{
    function collect($count){
        $calculateIQ = new calculateIQ();
        $iq = $calculateIQ->calculate($count);
        return $iq;
    }
}

?>