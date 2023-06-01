<?php
include_once('../percent/percent.php');

class CollectorCount{
    private $percent;
    
    function __construct(){
        if($this->percent == null){
            $this->percent = new percent;
        }
    }

    function evitation(){
        $result = $this->percent->evitation();
        return $result;
    }

    function dependent(){
        $result = $this->percent->dependent();
        return $result;
    }

    function obsessive(){
        $result = $this->percent->obsessive();
        return $result;
    }

    function passive_agressive(){
        $result = $this->percent->passive_agressive();
        return $result;
    }

    function passive_dependent(){
        $result = $this->percent->passive_dependent();
        return $result;
    }

    function paranoid(){
        $result = $this->percent->paranoid();
        return $result;
    }

    function schizotypal(){
        $result = $this->percent->schizotypal();
        return $result;
    }

    function schizoid(){
        $result = $this->percent->schizoid();
        return $result;
    }

    function histrionic(){
        $result = $this->percent->histrionic();
        return $result;
    }

    function narcissistic(){
        $result = $this->percent->narcissistic();
        return $result;
    }

    function limit(){
        $result = $this->percent->limit();
        return $result;
    }

    function antisocial(){
        $result = $this->percent->antisocial();
        return $result;
    }
}

?>