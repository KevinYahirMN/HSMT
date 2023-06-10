<?php
include_once('../scales/scale_CS.php');
include_once('../scales/scale_DM.php');
include_once('../scales/scale_IP.php');
include_once('../scales/scale_IR.php');
include_once('../scales/scale_SF.php');

class collectorCount{

    private $cs;
    private $dm;
    private $ip;
    private $ir;
    private $sf;

    //Inicialización de objetos y variables globales
    function __construct(){
        if($this->cs == null){
            $this->cs = new scale_CS;
            $this->dm = new scale_DM;
            $this->ip = new scale_IP;
            $this->ir = new scale_IR;
            $this->sf = new scale_SF;
        }
    }

    function collect_CS(){
        $count = $this->cs->check();
        return $count;
    }

    function collect_DM(){
        $count = $this->dm->check();
        return $count;
    }

    function collect_IP(){
        $count = $this->ip->check();
        return $count;
    }

    function collect_IR(){
        $count = $this->ir->check();
        return $count;
    }

    function collect_SF(){
        $count = $this->sf->check();
        return $count;
    }
}

?>