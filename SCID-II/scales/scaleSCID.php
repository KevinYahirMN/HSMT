<?php

abstract class scaleSCID{
    protected $answer;
    protected $sc;

    function initialiate(){
        if($this->answer != $_SESSION['answer']){
            $this->answer = $_SESSION['answer'];
        }

        if($this->sc == null){
            $this->sc = new scaleCount();
        }
    }
    
    abstract function scale();
}

?>