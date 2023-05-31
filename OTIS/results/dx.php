<?php
class dx{
    function result($iq = 0){
        $res = "";

        switch($iq){
            case 0: $res = "Deficiente"; break;
            case $iq < 79: $res = "Deficiente"; break;
            case $iq < 89: $res = "Inferior al termino medio"; break;
            case $iq < 109: $res = "Termino medio"; break;
            case $iq < 119: $res = "Superior al termino medio"; break;
            default: $res = "Superior"; break;
        }
        
        return $res;
    }
}

?>