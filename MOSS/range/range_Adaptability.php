<?php

class range_Adaptability{
    function range($percent = 0){
        $range = '';
        switch($percent){
            case 0: $range = 'Deficiente'; break;
            case $percent < 7: $range = 'Deficiente'; break;
            case $percent < 27: $range = 'Inferior'; break;
            case $percent < 42: $range = 'Medio Inferior'; break;
            case $percent < 64: $range = 'Promedio'; break;
            case $percent < 83: $range = 'Medio Superior'; break;
            case $percent < 98: $range = 'Superior'; break;
            default: $range = 'Muy Superior'; break;
        }

        return $range;
    }
}

?>