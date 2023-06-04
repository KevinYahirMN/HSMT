<?php
include_once('SuggestionMMPI.php');
include_once('../suggestions/contentScales/suggestions_ANS.php');
include_once('../suggestions/contentScales/suggestions_BAE.php');
include_once('../suggestions/contentScales/suggestions_CIN.php');
include_once('../suggestions/contentScales/suggestions_DEL.php');
include_once('../suggestions/contentScales/suggestions_DEP.php');
include_once('../suggestions/contentScales/suggestions_DTR.php');
include_once('../suggestions/contentScales/suggestions_ENJ.php');
include_once('../suggestions/contentScales/suggestions_FAM.php');
include_once('../suggestions/contentScales/suggestions_ISO.php');
include_once('../suggestions/contentScales/suggestions_MIE.php');
include_once('../suggestions/contentScales/suggestions_OBS.php');
include_once('../suggestions/contentScales/suggestions_PAS.php');
include_once('../suggestions/contentScales/suggestions_PTA.php');
include_once('../suggestions/contentScales/suggestions_RTR.php');
include_once('../suggestions/contentScales/suggestions_SAU.php');

class contentSuggestion extends SuggestionMMPI{

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
            $this->ans = new Suggestions_ANS;
            $this->cin = new Suggestions_CIN;
            $this->del = new Suggestions_DEL;
            $this->dep = new Suggestions_DEP;
            $this->enj = new Suggestions_ENJ;
            $this->mie = new Suggestions_MIE;
            $this->obs = new Suggestions_OBS;
            $this->sau = new Suggestions_SAU;
            $this->pas = new Suggestions_PAS;
            $this->pta = new Suggestions_PTA;
            $this->bae = new Suggestions_BAE;
            $this->iso = new Suggestions_ISO;
            $this->fam = new Suggestions_FAM;
            $this->dtr = new Suggestions_DTR;
            $this->rtr = new Suggestions_RTR;
        }
    }

    function collect($score = array()){
        $Suggestions = array(
            'ans' => parent::suggestion($this->ans, $score['ans']),
            'cin' => parent::suggestion($this->cin, $score['cin']),
            'del' => parent::suggestion($this->del, $score['del']),
            'dep' => parent::suggestion($this->dep, $score['dep']),
            'enj' => parent::suggestion($this->enj, $score['enj']),
            'mie' => parent::suggestion($this->mie, $score['mie']),
            'obs' => parent::suggestion($this->obs, $score['obs']),
            'sau' => parent::suggestion($this->sau, $score['sau']),
            'pas' => parent::suggestion($this->pas, $score['pas']),
            'pta' => parent::suggestion($this->pta, $score['pta']),
            'bae' => parent::suggestion($this->bae, $score['bae']),
            'iso' => parent::suggestion($this->iso, $score['iso']),
            'fam' => parent::suggestion($this->fam, $score['fam']),
            'dtr' => parent::suggestion($this->dtr, $score['dtr']),
            'rtr' => parent::suggestion($this->rtr, $score['rtr'])
        );
        return $Suggestions;
    }
}
?>