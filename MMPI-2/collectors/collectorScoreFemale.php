<?php
include_once('collectorMMPI.php');
include_once('scores/basicScoreFemale.php');
include_once('scores/contentScoreFemale.php');
include_once('scores/supplementaryScoreFemale.php');

class collectorScoreFemale extends collectorMMPI{

    private $basic;
    private $content;
    private $supplementary;

    //Inicialización de objetos y variables globales
    function __construct(){
        if($this->basic == null){
            $this->basic = new basicScoreFemale;
            $this->content = new contentScoreFemale;
            $this->supplementary = new supplementaryScoreFemale;
        }
    }

    function collect_Basic($count = array()){
        $count = array();
        $count = parent::collector($this->basic, $count);
        return $count;
    }

    function collect_Content($count = array()){
        $count = array();
        $count = parent::collector($this->content, $count);
        return $count;
    }

    function collect_Supplementary($count = array()){
        $count = array();
        $count = parent::collector($this->supplementary, $count);
        return $count;
    }
}
?>