<?php

abstract class scale{
    protected $answer;

    function __construct(){
        $this->answer = $_SESSION['answer'];
    }
    
    abstract function check();
}

?>