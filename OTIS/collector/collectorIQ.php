<?php
include_once('../interfaces/ICollector.php');

class collectorIQ implements ICollectorOTIS{
    function collect($count){
        $calculateIQ = new calculateIQ();
        $iq = $calculateIQ->calculate($count);
        return $iq;
    }
}

?>