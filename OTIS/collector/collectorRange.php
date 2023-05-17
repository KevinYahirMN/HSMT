<?php
include_once('../interfaces/ICollector.php');

class collectorRange implements ICollectorOTIS{
    function collect($iq){
        $range = "";
        switch ($iq){
            case $iq < 71: $range = "V-"; break;
            case $iq < 79: $range = "V+"; break;
            case $iq < 83: $range = "IV-"; break;
            case $iq < 89: $range = "IV+"; break;
            case $iq < 99: $range = "III-"; break;
            case 100: $range = "III"; break;
            case $iq < 109: $range = "III+"; break;
            case $iq < 115: $range = "II-"; break;
            case $iq < 119: $range = "II+"; break;
            case $iq < 125: $range = "I-"; break;
            default: $range = "I+"; break;
        }
        return $range;
    }
}

?>