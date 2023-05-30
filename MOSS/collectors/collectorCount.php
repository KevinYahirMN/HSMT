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
        $count = $this->collect($this->cs);
        return $count;
    }

    function collect_DM(){
        $count = $this->collect($this->dm);
        return $count;
    }

    function collect_IP(){
        $count = $this->collect($this->ip);
        return $count;
    }

    function collect_IR(){
        $count = $this->collect($this->ir);
        return $count;
    }

    function collect_SF(){
        $count = $this->collect($this->sf);
        return $count;
    }

    private function collect($obj){
        $count = $obj->check();
        return $count;
    }

}

?>