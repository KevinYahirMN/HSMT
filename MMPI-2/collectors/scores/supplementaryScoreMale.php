<?php
include_once('scoreMMPI.php');
include_once('../scores/male/supplementaryScales/male_score_A.php');
include_once('../scores/male/supplementaryScales/male_score_AMAC.php');
include_once('../scores/male/supplementaryScales/male_score_Do.php');
include_once('../scores/male/supplementaryScales/male_score_Dpr.php');
include_once('../scores/male/supplementaryScales/male_score_EPK.php');
include_once('../scores/male/supplementaryScales/male_score_EPS.php');
include_once('../scores/male/supplementaryScales/male_score_Fp.php');
include_once('../scores/male/supplementaryScales/male_score_Fyo.php');
include_once('../scores/male/supplementaryScales/male_score_GF.php');
include_once('../scores/male/supplementaryScales/male_score_GM.php');
include_once('../scores/male/supplementaryScales/male_score_HR.php');
include_once('../scores/male/supplementaryScales/male_score_ls1.php');
include_once('../scores/male/supplementaryScales/male_score_ls2.php');
include_once('../scores/male/supplementaryScales/male_score_ls3.php');
include_once('../scores/male/supplementaryScales/male_score_R.php');
include_once('../scores/male/supplementaryScales/male_score_Rs.php');

class supplementaryScoreMale extends scoreMMPI{
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
            $this->a = new male_score_A;
            $this->a_mac = new male_Score_AMAC;
            $this->do = new male_score_Do;
            $this->dpr = new male_score_Do;
            $this->epk = new male_score_Epk;
            $this->eps = new male_score_Eps;
            $this->fp = new male_score_Fp;
            $this->fyo = new male_score_Fyo;
            $this->gf = new male_score_Gf;
            $this->gm = new male_score_Gm;
            $this->hr = new male_score_Hr;
            $this->ls1 = new male_score_Ls1;
            $this->ls2 = new male_score_Ls2;
            $this->ls3 = new male_score_Ls3;
            $this->r = new male_score_R;
            $this->rs = new male_score_Rs;
        }
    }

    function collect($count = array()){
        $count = [
            'a' => parent::score($this->a, $count['a']),
            'a_mac' => parent::score($this->a_mac, $count['a_mac']),
            'do' => parent::score($this->do, $count['do']),
            'dpr' => parent::score($this->dpr, $count['dpr']),
            'epk' => parent::score($this->epk, $count['epk']),
            'eps' => parent::score($this->eps, $count['eps']),
            'fp' => parent::score($this->fp, $count['fp']),
            'fyo' => parent::score($this->fyo, $count['fyo']),
            'gf' => parent::score($this->gf, $count['gf']),
            'gm' => parent::score($this->gm, $count['gm']),
            'hr' => parent::score($this->hr, $count['hr']),
            'ls1' => parent::score($this->ls1, $count['ls1']),
            'ls2' => parent::score($this->ls2, $count['ls2']),
            'ls3' => parent::score($this->ls3, $count['ls3']),
            'r' => parent::score($this->r, $count['r']),
            'rs' => parent::score($this->rs, $count['rs'])
        ];
        return $count;
    }
}
?>