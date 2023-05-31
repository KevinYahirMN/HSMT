<?php
class range{
    function result($iq = 0){
        $res = "";
        switch ($iq){
            case 0: $res = "V-"; break;
            case $iq < 71: $res = "V-"; break;
            case $iq < 79: $res = "V+"; break;
            case $iq < 83: $res = "IV-"; break;
            case $iq < 89: $res = "IV+"; break;
            case $iq < 99: $res = "III-"; break;
            case 100: $res = "III"; break;
            case $iq < 109: $res = "III+"; break;
            case $iq < 115: $res = "II-"; break;
            case $iq < 119: $res = "II+"; break;
            case $iq < 125: $res = "I-"; break;
            default: $res = "I+"; break;
        }
        return $res;
    }
}

?>