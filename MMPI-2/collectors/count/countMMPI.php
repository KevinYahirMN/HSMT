<?php

abstract class countMMPI{

    abstract function collect();

    protected function revision($obj = null){
        $count = 0;
        $count = $obj->scale();
        return $count;
    }
}

?>