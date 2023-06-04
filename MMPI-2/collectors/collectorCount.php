<?php
include_once('collectorMMPI.php');
include_once('count/basicCount.php');
include_once('count/contentCount.php');
include_once('count/supplementaryCount.php');

class collectorCount extends collectorMMPI{

    private $basic;
    private $content;
    private $supplementary;

    //Inicialización de objetos y variables globales
    function __construct(){
        if($this->basic == null){
            $this->basic = new basicCount;
            $this->content = new contentCount;
            $this->supplementary = new supplementaryCount;
        }
    }

    function collect_Basic(){
        $count = array();
        $count = parent::collector($this->basic);
        return $count;
    }

    function collect_Content(){
        $count = array();
        $count = parent::collector($this->content);
        return $count;
    }

    function collect_Supplementary(){
        $count = array();
        $count = parent::collector($this->supplementary);
        return $count;
    }
}
?>