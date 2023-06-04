<?php
include_once('collectorMMPI.php');
include_once('scores/basicScoreMale.php');
include_once('scores/contentScoreMale.php');
include_once('scores/supplementaryScoreMale.php');

class collectorScoreMale extends collectorMMPI{

    private $basic;
    private $content;
    private $supplementary;

    //Inicialización de objetos y variables globales
    function __construct(){
        if($this->basic == null){
            $this->basic = new basicScoreMale;
            $this->content = new contentScoreMale;
            $this->supplementary = new supplementaryScoreMale;
        }
    }

    function collect_Basic($count = array()){
        $count = parent::collector($this->basic, $count);
        return $count;
    }

    function collect_Content($count = array()){
        $count = parent::collector($this->content, $count);
        return $count;
    }

    function collect_Supplementary($count = array()){
        $count = parent::collector($this->supplementary, $count);
        return $count;
    }
}
?>