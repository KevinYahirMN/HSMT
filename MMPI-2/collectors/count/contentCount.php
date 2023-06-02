<?php
include_once('countMMPI.php');

class contentCount extends countMMPI{

    private $ans;
    private $cin;
    private $del;
    private $dep;
    private $enj;
    private $mie;
    private $obs;
    private $sau;
    private $pas;
    private $pta;
    private $bae;
    private $isp;
    private $fam;
    private $dtr;
    private $rtr;

    function __construct(){
        if($this->ans == null){
            $this->ans = new scale_ANS;
            $this->cin = new scale_CIN;
            $this->del = new scale_DEL;
            $this->dep = new scale_DEP;
            $this->enj = new scale_ENJ;
            $this->mie = new scale_MIE;
            $this->obs = new scale_OBS;
            $this->sau = new scale_SAU;
            $this->pas = new scale_PAS;
            $this->pta = new scale_PTA;
            $this->bae = new scale_BAE;
            $this->isp = new scale_ISO;
            $this->fam = new scale_FAM;
            $this->dtr = new scale_DTR;
            $this->rtr = new scale_RTR;
        }
    }

    function collect(){
        $count = array(
            'ans' => parent::revision($this->ans),
            'cin' => parent::revision($this->cin),
            'del' => parent::revision($this->del),
            'dep' => parent::revision($this->dep),
            'enj' => parent::revision($this->enj),
            'mie' => parent::revision($this->mie),
            'obs' => parent::revision($this->obs),
            'sau' => parent::revision($this->sau),
            'pas' => parent::revision($this->pas),
            'pta' => parent::revision($this->pta),
            'bae' => parent::revision($this->bae),
            'isp' => parent::revision($this->isp),
            'fam' => parent::revision($this->fam),
            'dtr' => parent::revision($this->dtr),
            'rtr' => parent::revision($this->rtr)
        );
        return $count;
    }
}
?>