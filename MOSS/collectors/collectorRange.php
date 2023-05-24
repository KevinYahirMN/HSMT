<?php

class collectorRange{
    function range_Adaptability($percent){
        $range = '';
        switch($percent){
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

    function range_Count($count){
        $range = '';
        switch($count){
            case $count < 8: $range = 'Deficiente'; break;
            case $count < 12: $range = 'Pobre'; break;
            case $count < 19: $range = 'Medio'; break;
            case $count < 24: $range = 'Bueno'; break;
            default: $range = 'Superior'; break;
        }

        return $range;
    }
}

?>