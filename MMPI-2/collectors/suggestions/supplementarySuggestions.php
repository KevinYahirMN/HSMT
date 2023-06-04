<?php
include_once('suggestionsMMPI.php');
include_once('../suggestions/supplementaryScales/suggestions_A.php');
include_once('../suggestions/supplementaryScales/suggestions_A_MAC.php');
include_once('../suggestions/supplementaryScales/suggestions_Do.php');
include_once('../suggestions/supplementaryScales/suggestions_Dpr.php');
include_once('../suggestions/supplementaryScales/suggestions_EPK.php');
include_once('../suggestions/supplementaryScales/suggestions_EPS.php');
include_once('../suggestions/supplementaryScales/suggestions_Fp.php');
include_once('../suggestions/supplementaryScales/suggestions_Fyo.php');
include_once('../suggestions/supplementaryScales/suggestions_GF.php');
include_once('../suggestions/supplementaryScales/suggestions_GM.php');
include_once('../suggestions/supplementaryScales/suggestions_HR.php');
include_once('../suggestions/supplementaryScales/suggestions_ls1.php');
include_once('../suggestions/supplementaryScales/suggestions_ls2.php');
include_once('../suggestions/supplementaryScales/suggestions_ls3.php');
include_once('../suggestions/supplementaryScales/suggestions_R.php');
include_once('../suggestions/supplementaryScales/suggestions_Rs.php');

class supplementarySuggestion extends suggestionMMPI{
    private $a;
    private $a_mac;
    private $do;
    private $dpr;
    private $epk;
    private $eps;
    private $fp;
    private $fyo;
    private $gf;
    private $gm;
    private $hr;
    private $ls1;
    private $ls2;
    private $ls3;
    private $r;
    private $rs;

    function __construct(){
        if($this->a == null){
            $this->a = new suggestions_A;
            $this->a_mac = new suggestions_AMac;
            $this->do = new suggestions_Do;
            $this->dpr = new suggestions_Do;
            $this->epk = new suggestions_Epk;
            $this->eps = new suggestions_Eps;
            $this->fp = new suggestions_Fp;
            $this->fyo = new suggestions_Fyo;
            $this->gf = new suggestions_Gf;
            $this->gm = new suggestions_Gm;
            $this->hr = new suggestions_Hr;
            $this->ls1 = new suggestions_Ls1;
            $this->ls2 = new suggestions_Ls2;
            $this->ls3 = new suggestions_Ls3;
            $this->r = new suggestions_R;
            $this->rs = new suggestions_Rs;
        }
    }

    function collect($score = array()){
        $suggestions = array(
            'a' => parent::suggestion($this->a, $score['a']),
            'a_mac' => parent::suggestion($this->a_mac, $score['a_mac']),
            'do' => parent::suggestion($this->do, $score['do']),
            'dpr' => parent::suggestion($this->dpr, $score['dpr']),
            'epk' => parent::suggestion($this->epk, $score['epk']),
            'eps' => parent::suggestion($this->eps, $score['eps']),
            'fp' => parent::suggestion($this->fp, $score['fp']),
            'fyo' => parent::suggestion($this->fyo, $score['fyo']),
            'gf' => parent::suggestion($this->gf, $score['gf']),
            'gm' => parent::suggestion($this->gm, $score['gm']),
            'hr' => parent::suggestion($this->hr, $score['hr']),
            'ls1' => parent::suggestion($this->ls1, $score['ls1']),
            'ls2' => parent::suggestion($this->ls2, $score['ls2']),
            'ls3' => parent::suggestion($this->ls3, $score['ls3']),
            'r' => parent::suggestion($this->r, $score['r']),
            'rs' => parent::suggestion($this->rs, $score['rs'])
        );
        return $suggestions;
    }
}
?>