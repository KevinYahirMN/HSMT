<?php
include_once('scoreMMPI.php');
include_once('../scores/male/basicScales/male_score_D.php');
include_once('../scores/male/basicScales/male_score_Dp.php');
include_once('../scores/male/basicScales/male_score_Es.php');
include_once('../scores/male/basicScales/male_score_F.php');
include_once('../scores/male/basicScales/male_score_Hi.php');
include_once('../scores/male/basicScales/male_score_Hs.php');
include_once('../scores/male/basicScales/male_score_Is.php');
include_once('../scores/male/basicScales/male_score_K.php');
include_once('../scores/male/basicScales/male_score_L.php');
include_once('../scores/male/basicScales/male_score_Ma.php');
include_once('../scores/male/basicScales/male_score_Mf.php');
include_once('../scores/male/basicScales/male_score_Pa.php');
include_once('../scores/male/basicScales/male_score_Pt.php');

class basicScoreMale extends scoreMMPI{

    private $d;
    private $dp;
    private $es;
    private $f;
    private $hi;
    private $hs;
    private $is;
    private $k;
    private $l;
    private $ma;
    private $mf;
    private $pa;
    private $pt;

    function __construct(){
        if($this->d == null){
            $this->d = new male_score_D;
            $this->dp = new male_score_Dp;
            $this->es = new male_score_Es;
            $this->f = new male_score_F;
            $this->hi = new male_score_Hi;
            $this->hs = new male_score_Hs;
            $this->is = new male_score_Is;
            $this->k = new male_score_K;
            $this->l = new male_score_L;
            $this->ma = new male_score_Ma;
            $this->mf = new male_score_Mf;
            $this->pa = new male_score_Pa;
            $this->pt = new male_score_Pt;
        }
    }

    function collect($count = array()){
        $score = array(
            'd' => parent::score($this->d, $count['d']),
            'dp' => parent::score($this->dp, $count['dp']),
            'es' => parent::score($this->es, $count['es']),
            'f' => parent::score($this->f, $count['f']),
            'hi' => parent::score($this->hi, $count['hi']),
            'hs' => parent::score($this->hs, $count['hs']),
            'is' => parent::score($this->is, $count['is']),
            'k' => parent::score($this->k, $count['k']),
            'l' => parent::score($this->l, $count['l']),
            'ma' => parent::score($this->ma, $count['ma']),
            'mf' => parent::score($this->mf, $count['mf']),
            'pa' => parent::score($this->pa, $count['pa']),
            'pt' => parent::score($this->pt, $count['pt'])
        );
        return $score;
    }
}
?>