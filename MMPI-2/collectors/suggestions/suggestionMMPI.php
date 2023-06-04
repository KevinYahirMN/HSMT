<?php

abstract class suggestionMMPI{

    abstract function collect($score = array());

    protected function suggestion($obj = null, $score = 0){
        $text = '';
        $text = $obj->suggestions($score);
        return $text;
    }
}

?>