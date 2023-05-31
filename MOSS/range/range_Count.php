<?php

class range_Count{
    function range($count = 0){
        $range = '';
        switch($count){
            case 0: $range = 'Deficiente'; break;
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