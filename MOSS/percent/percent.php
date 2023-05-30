<?php
class percent{

    function percent_CS($count){
        $percent = $this->calculateSix($count);
        return $percent;
    }

    function percent_DM($count){
        $percent = $this->calculateTwo($count);
        return $percent;
    }

    function percent_IP($count){
        $op = ($count*0.125)*100;
        $percent = round($op);
        return $percent;
    }

    function percent_IR($count){
        $percent = $this->calculateTwo($count);
        return $percent;
    }

    function percent_SF($count){
        $percent = $this->calculateSix($count);
        return $percent;
    }

    private function calculateTwo($count){
        $op = ($count*0.2)*100;
        $percent = round($op);
        return $percent;
    }

    private function calculateSix($count){
        $op = ($count*0.1666)*100;
        $percent = round($op);
        return $percent;
    }

}

?>