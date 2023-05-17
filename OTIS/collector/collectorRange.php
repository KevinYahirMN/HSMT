<?php
include_once('../interfaces/ICollector.php');

class collectorRange implements ICollectorOTIS{
    function collect($iq){
        $range = "";
        switch ($iq){
            case $iq < 71: $range = "V-";
            case $iq < 79: $range = "V+";
            case $iq < 83: $range = "IV-";
            case $iq < 89: $range = "IV+";
            case $iq < 99: $range = "III-";
            case 100: $range = "III";
            case $iq < 109: $range = "III+";
            case $iq < 115: $range = "II-";
            case $iq < 119: $range = "II+";
            case $iq < 125: $range = "I-";
            default: $range = "I+";
        }
        return $range;
    }
}

?>