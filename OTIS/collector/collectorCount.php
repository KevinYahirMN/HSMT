<?php
include_once('../revision/revision.php');
include_once('../interfaces/ICollector.php');

class collectorCount implements ICollectorOTIS{
    function collect($answer){
        $count = new revision();
        $c = $count->answerCount($answer);
        return $c;
    }
    }
?>