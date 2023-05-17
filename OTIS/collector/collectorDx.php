<?php
include_once('../interfaces/ICollector.php');

class collectorDx implements ICollectorOTIS{
    function collect($iq){
        $dx = "";

        switch($iq){
            case $iq < 79: $dx = "Deficiente";
            case $iq < 89: $dx = "Inferior al termino medio";
            case $iq < 109: $dx = "Termino medio";
            case $iq < 119: $dx = "Superior al termino medio";
            default: $dx = "Superior";
        }
        
        return $dx;
    }
}

?>