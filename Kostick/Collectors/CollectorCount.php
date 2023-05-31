<?php
include('Count/DAAcount.php');
include('Count/DVcount.php');
include('Count/SEScount.php');
include_once('../Interfaces/ICollector.php');

class CollectorCount implements ICollector{
    private $daa;
    private $dv;
    private $ses;

    function __construct(){
        if($this->daa == null){
            $this->daa = new DAAcount;
            $this->dv = new DVcount;
            $this->ses = new SEScount;
        }
    }

    function DAA($answer = array()){
        $count = $this->revision($answer, $this->daa);
        return $count;
    }

    function DV($answer = array()){
        $count = $this->revision($answer, $this->dv);
        return $count;
    }

    function SES($answer = array()){
        $count = $this->revision($answer, $this->ses);
        return $count;
    }

    private function revision($answer = array(), $obj = null){
        $count = $obj->collect($answer);
        return $count;
    }
}

?>