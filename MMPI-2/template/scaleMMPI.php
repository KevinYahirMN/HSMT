<?php

abstract class scaleMMPI{
    protected $answer;
    protected $sc;

    protected function initialiate(){
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