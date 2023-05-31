<?php
include('Suggestions/DAAsuggestions.php');
include('Suggestions/DVsuggestions.php');
include('Suggestions/SESsuggestions.php');
include_once('../Interfaces/ICollector.php');

class CollectorSuggestions implements ICollector{
    private $daa;
    private $dv;
    private $ses;

    function __construct(){
        if($this->daa == null){
            $this->daa = new DAAsuggestions;
            $this->dv = new DVsuggestions;
            $this->ses = new SESsuggestions;
        }
    }

    function DAA($count = array()){
        $text = $this->suggestions($count, $this->daa);
        return $text;
    }

    function DV($count = array()){
        $text = $this->suggestions($count, $this->dv);
        return $text;
    }

    function SES($count = array()){
        $text = $this->suggestions($count, $this->ses);
        return $text;
    }

    private function suggestions($count = array(), $obj = null){
        $text = $obj->collect($count);
        return $text;
    }
}

?>