<?php
class collectorPercent{

    function collect_CS($count){
        $percent = $this->collectSix($count);
        return $percent;
    }

    function collect_DM($count){
        $percent = $this->collectTwo($count);
        return $percent;
    }

    function collect_IP($count){
        $op = ($count*0.125)*100;
        $percent = round($op);
        return $percent;
    }

    function collect_IR($count){
        $percent = $this->collectTwo($count);
        return $percent;
    }

    function collect_SF($count){
        $percent = $this->collectSix($count);
        return $percent;
    }

    private function collectTwo($count){
        $op = ($count*0.2)*100;
        $percent = round($op);
        return $percent;
    }

    private function collectSix($count){
        $op = ($count*0.1666)*100;
        $percent = round($op);
        return $percent;
    }

}

?>