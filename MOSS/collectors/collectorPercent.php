<?php
include_once('../percent/percent.php');

class collectorPercent{

    private $percent;

    function __construct()
    {
        if($this->percent == null){
            $this->percent = new percent;
        }
    }

    function collect_CS($count){
        $res = $this->percent->percent_CS($count);
        return $res;
    }

    function collect_DM($count){
        $res = $this->percent->percent_DM($count);
        return $res;
    }

    function collect_IP($count){
        $res = $this->percent->percent_IP($count);
        return $res;
    }

    function collect_IR($count){
        $res = $this->percent->percent_IR($count);
        return $res;
    }

    function collect_SF($count){
        $res = $this->percent->percent_SF($count);
        return $res;
    }

}

?>