<?php
include_once('../scales/scale_evitation.php');
include_once('../scales/scale_dependent.php');
include_once('../scales/scale_obsessive.php');
include_once('../scales/scale_passive_aggressive.php');
include_once('../scales/scale_passive-dependent.php');
include_once('../scales/scale_paranoid.php');
include_once('../scales/scale_schizotypal.php');
include_once('../scales/scale_schizoid.php');
include_once('../scales/scale_histrionic.php');
include_once('../scales/scale_narcissistic.php');
include_once('../scales/scale_limit.php');
include_once('../scales/scale_antisocial.php');

class percent{
    private $evitation;
    private $dependent;
    private $obsessive;
    private $passaggressive;
    private $passdependent;
    private $paranoid;
    private $schizotypal;
    private $schizoid;
    private $histrionic;
    private $narcissistic;
    private $limit;
    private $antisocial;
    
    function __construct(){
        if($this->evitation == null){
            $this->evitation = new scale_evitation;
            $this->dependent = new scale_dependent;
            $this->obsessive = new scale_obsessive;
            $this->passaggressive = new scale_passive_aggressive;
            $this->passdependent = new scale_passive_dependent;
            $this->paranoid = new scale_paranoid;
            $this->schizotypal = new scale_schizotypal;
            $this->schizoid = new scale_schizoid;
            $this->histrionic = new scale_histrionic;
            $this->narcissistic = new scale_narcissistic;
            $this->limit = new scale_limit;
            $this->antisocial = new scale_antisocial;
        }
    }

    private function collect($obj = null){
        $count = $obj->scale();
        return $count;
    }

    function evitation(){
        $percent = 25*($this->collect($this->evitation));
        return $percent;
    }

    function dependent(){
        $percent = 20*($this->collect($this->dependent));
        return $percent;
    }

    function obsessive(){
        $percent = 20*($this->collect($this->obsessive));
        return $percent;
    }

    function passive_agressive(){
        $percent = 20*($this->collect($this->passaggressive));
        return $percent;
    }

    function passive_dependent(){
        $percent = 20*($this->collect($this->passdependent));
        return $percent;
    }

    function paranoid(){
        $percent = 25*($this->collect($this->paranoid));
        return $percent;
    }

    function schizotypal(){
        $percent = 20*($this->collect($this->schizotypal));
        return $percent;
    }

    function schizoid(){
        $percent = 25*($this->collect($this->schizoid));
        return $percent;
    }

    function histrionic(){
        $percent = 25*($this->collect($this->histrionic));
        return $percent;
    }

    function narcissistic(){
        $percent = 16*($this->collect($this->narcissistic));
        return $percent;
    }

    function limit(){
        $percent = 20*($this->collect($this->limit));
        return $percent;
    }

    function antisocial(){
        $percent = 33*($this->collect($this->antisocial));
        return $percent;
    }
}

?>