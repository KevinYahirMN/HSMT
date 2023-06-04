<?php
include_once('countMMPI.php');
include_once('../Scales/ContentScales/scale_ANS.php');
include_once('../Scales/ContentScales/scale_BAE.php');
include_once('../Scales/ContentScales/scale_CIN.php');
include_once('../Scales/ContentScales/scale_DEL.php');
include_once('../Scales/ContentScales/scale_DEP.php');
include_once('../Scales/ContentScales/scale_DTR.php');
include_once('../Scales/ContentScales/scale_ENJ.php');
include_once('../Scales/ContentScales/scale_FAM.php');
include_once('../Scales/ContentScales/scale_ISO.php');
include_once('../Scales/ContentScales/scale_MIE.php');
include_once('../Scales/ContentScales/scale_OBS.php');
include_once('../Scales/ContentScales/scale_PAS.php');
include_once('../Scales/ContentScales/scale_PTA.php');
include_once('../Scales/ContentScales/scale_RTR.php');
include_once('../Scales/ContentScales/scale_SAU.php');

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
    private $iso;
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
            $this->iso = new scale_ISO;
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
            'iso' => parent::revision($this->iso),
            'fam' => parent::revision($this->fam),
            'dtr' => parent::revision($this->dtr),
            'rtr' => parent::revision($this->rtr)
        );
        return $count;
    }
}
?>