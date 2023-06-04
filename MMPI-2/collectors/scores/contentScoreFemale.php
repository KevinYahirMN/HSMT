<?php
include_once('scoreMMPI.php');
include_once('../scores/female/contentScales/female_Score_ANS.php');
include_once('../scores/female/contentScales/female_Score_BAE.php');
include_once('../scores/female/contentScales/female_Score_CIN.php');
include_once('../scores/female/contentScales/female_Score_DEL.php');
include_once('../scores/female/contentScales/female_Score_DEP.php');
include_once('../scores/female/contentScales/female_Score_DTR.php');
include_once('../scores/female/contentScales/female_Score_ENJ.php');
include_once('../scores/female/contentScales/female_Score_FAM.php');
include_once('../scores/female/contentScales/female_Score_ISO.php');
include_once('../scores/female/contentScales/female_Score_MIE.php');
include_once('../scores/female/contentScales/female_Score_OBS.php');
include_once('../scores/female/contentScales/female_Score_PAS.php');
include_once('../scores/female/contentScales/female_Score_PTA.php');
include_once('../scores/female/contentScales/female_Score_RTR.php');
include_once('../scores/female/contentScales/female_Score_SAU.php');

class contentScoreFemale extends scoreMMPI{

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
            $this->ans = new female_Score_ANS;
            $this->cin = new female_Score_CIN;
            $this->del = new female_Score_DEL;
            $this->dep = new female_Score_DEP;
            $this->enj = new female_Score_ENJ;
            $this->mie = new female_Score_MIE;
            $this->obs = new female_Score_OBS;
            $this->sau = new female_Score_SAU;
            $this->pas = new female_Score_PAS;
            $this->pta = new female_Score_PTA;
            $this->bae = new female_Score_BAE;
            $this->iso = new female_Score_ISO;
            $this->fam = new female_Score_FAM;
            $this->dtr = new female_Score_DTR;
            $this->rtr = new female_Score_RTR;
        }
    }

    function collect($count = array()){
        $count = array(
            'ans' => parent::score($this->ans, $count['ans']),
            'cin' => parent::score($this->cin, $count['cin']),
            'del' => parent::score($this->del, $count['del']),
            'dep' => parent::score($this->dep, $count['dep']),
            'enj' => parent::score($this->enj, $count['enj']),
            'mie' => parent::score($this->mie, $count['mie']),
            'obs' => parent::score($this->obs, $count['obs']),
            'sau' => parent::score($this->sau, $count['sau']),
            'pas' => parent::score($this->pas, $count['pas']),
            'pta' => parent::score($this->pta, $count['pta']),
            'bae' => parent::score($this->bae, $count['bae']),
            'iso' => parent::score($this->iso, $count['iso']),
            'fam' => parent::score($this->fam, $count['fam']),
            'dtr' => parent::score($this->dtr, $count['dtr']),
            'rtr' => parent::score($this->rtr, $count['rtr'])
        );
        return $count;
    }
}
?>