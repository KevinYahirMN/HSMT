<?php
include_once('../percent/percent.php');

class collectorPercent{

    private $obj;

    function __construct()
    {
        if($this->obj == null){
            $this->obj = new percent;
        }
    }

    function collect_CS($count = 0){
        $res = $this->obj->percent_CS($count);
        return $res;
    }

    function collect_DM($count = 0){
        $res = $this->obj->percent_DM($count);
        return $res;
    }

    function collect_IP($count = 0){
        $res = $this->obj->percent_IP($count);
        return $res;
    }

    function collect_IR($count = 0){
        $res = $this->obj->percent_IR($count);
        return $res;
    }

    function collect_SF($count = 0){
        $res = $this->obj->percent_SF($count);
        return $res;
    }

}

?>