<?php
include_once('../revision/revision.php');
include_once('../interfaces/ICollector.php');

class collectorCount implements ICollectorOTIS{
    private $obj;

    function __construct(){
        if($this->obj == null){
            $this->obj = new revision();
        }
    }

    function collect($answer = array()){
        $count = $this->obj->answerCount($answer);
        return $count;
    }
}

?>