<?php
include_once('../interfaces/ICollector.php');

class collectorDx implements ICollectorOTIS{
    function collect($iq){
        $dx = "";

        switch($iq){
            case $iq < 79: $dx = "Deficiente"; break;
            case $iq < 89: $dx = "Inferior al termino medio"; break;
            case $iq < 109: $dx = "Termino medio"; break;
            case $iq < 119: $dx = "Superior al termino medio"; break;
            default: $dx = "Superior"; break;
        }
        
        return $dx;
    }
}

?>