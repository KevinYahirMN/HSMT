<?php

class calculateIQ{
    function calculate($count = 0){
        $iq = 0;
        switch($count){
            case 0: $iq = 65; break;
            case $count < 17: $iq = 65; break;
            case $count < 32: $iq = $count + 49; break;
            case $count < 49: $iq = $count + 50; break;
            case $count < 66: $iq = $count + 51; break;
            default: $iq = $count + 52; break;
        }
        
        return $iq;
    }
}

?>