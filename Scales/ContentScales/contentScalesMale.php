<?php
class contentScalesMale{
    private $c;

    function calif_True($answer){
        if($answer == 'true'){
            $this->c++;
        }
    }

    function calif_False($answer){
        if($answer == 'false'){
            $this->c++;
        }
    }

    function scale_ANS($answer = array()){
        $this->c = 0;
        $this->calif_True($answer[15]);
        $this->calif_True($answer[30]);
        $this->calif_True($answer[31]);
        $this->calif_True($answer[39]);
        $this->calif_False($answer[140]);
        $this->calif_True($answer[170]);
        $this->calif_True($answer[196]);
        $this->calif_False($answer[208]);
        $this->calif_False($answer[223]);
        $this->calif_True($answer[273]);
        $this->calif_True($answer[290]);
        $this->calif_True($answer[299]);
        $this->calif_True($answer[301]);
        $this->calif_True($answer[305]);
        $this->calif_True($answer[339]);
        $this->calif_False($answer[405]);
        $this->calif_True($answer[408]);
        $this->calif_True($answer[415]);
        $this->calif_True($answer[463]);
        $this->calif_True($answer[469]);
        $this->calif_False($answer[496]);
        $this->calif_True($answer[509]);
        $this->calif_True($answer[556]);
        return $this->c;
    }
/*
    function scale_($answer = array()){
        $this->c = 0;
        $this->calif_($answer[]);
        $this->calif_($answer[]);
        $this->calif_($answer[]);
        $this->calif_($answer[]);
        $this->calif_($answer[]);
        $this->calif_($answer[]);
        $this->calif_($answer[]);
        $this->calif_($answer[]);
        $this->calif_($answer[]);
        $this->calif_($answer[]);
        $this->calif_($answer[]);
        $this->calif_($answer[]);
        $this->calif_($answer[]);
        $this->calif_($answer[]);
        $this->calif_($answer[]);
        $this->calif_($answer[]);
        $this->calif_($answer[]);
        $this->calif_($answer[]);
        $this->calif_($answer[]);
        $this->calif_($answer[]);
        $this->calif_($answer[]);
        $this->calif_($answer[]);
        $this->calif_($answer[]);
        return $this->c;
    }

    function scale_($answer = array()){
        $this->c = 0;
        $this->calif_($answer[]);
        $this->calif_($answer[]);
        $this->calif_($answer[]);
        $this->calif_($answer[]);
        $this->calif_($answer[]);
        $this->calif_($answer[]);
        $this->calif_($answer[]);
        $this->calif_($answer[]);
        $this->calif_($answer[]);
        $this->calif_($answer[]);
        $this->calif_($answer[]);
        $this->calif_($answer[]);
        $this->calif_($answer[]);
        $this->calif_($answer[]);
        $this->calif_($answer[]);
        $this->calif_($answer[]);
        $this->calif_($answer[]);
        $this->calif_($answer[]);
        $this->calif_($answer[]);
        $this->calif_($answer[]);
        $this->calif_($answer[]);
        $this->calif_($answer[]);
        $this->calif_($answer[]);
        return $this->c;
    }
*/
}
?>