<?php
include_once('../range/range_Count.php');
include_once('../range/range_Adaptability.php');

class collectorRange{

    private $adap;
    private $rcount;

    function __construct()
    {
        if($this->adap == null){
            $this->adap = new range_Adaptability;
            $this->rcount = new range_Count;
        }
        
    }

    function range_Adaptability($percent = 0){
        $range = $this->adap->range($percent);
        return $range;
    }

    function range_Count($count = 0){
        $range = $this->rcount->range($count);
        return $range;
    }
}

?>