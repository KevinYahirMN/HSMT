<?php

abstract class scoreMMPI{

    abstract function collect($count = array());

    protected function score($obj = null, $count = 0){
        $score = $obj->score($count);
        return $score;
    }
}

?>