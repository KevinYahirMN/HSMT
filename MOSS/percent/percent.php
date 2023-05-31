<?php
class percent{

    function percent_CS($count = 0){
        $percent = $this->calculateSix($count);
        return $percent;
    }

    function percent_DM($count = 0){
        $percent = $this->calculateTwo($count);
        return $percent;
    }

    function percent_IP($count = 0){
        $op = ($count*0.125)*100;
        $percent = round($op);
        return $percent;
    }

    function percent_IR($count = 0){
        $percent = $this->calculateTwo($count);
        return $percent;
    }

    function percent_SF($count = 0){
        $percent = $this->calculateSix($count);
        return $percent;
    }

    private function calculateTwo($count = 0){
        $op = ($count*0.2)*100;
        $percent = round($op);
        return $percent;
    }

    private function calculateSix($count = 0){
        $op = ($count*0.1666)*100;
        $percent = round($op);
        return $percent;
    }

}

?>