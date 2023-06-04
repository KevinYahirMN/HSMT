<?php
include_once('scoreMMPI.php');
include_once('../scores/female/basicScales/female_score_D.php');
include_once('../scores/female/basicScales/female_score_Dp.php');
include_once('../scores/female/basicScales/female_score_Es.php');
include_once('../scores/female/basicScales/female_score_F.php');
include_once('../scores/female/basicScales/female_score_Hi.php');
include_once('../scores/female/basicScales/female_score_Hs.php');
include_once('../scores/female/basicScales/female_score_Is.php');
include_once('../scores/female/basicScales/female_score_K.php');
include_once('../scores/female/basicScales/female_score_L.php');
include_once('../scores/female/basicScales/female_score_Ma.php');
include_once('../scores/female/basicScales/female_score_Mf.php');
include_once('../scores/female/basicScales/female_score_Pa.php');
include_once('../scores/female/basicScales/female_score_Pt.php');

class basicScoreFemale extends scoreMMPI{

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
            $this->d = new female_score_D;
            $this->dp = new female_score_Dp;
            $this->es = new female_score_Es;
            $this->f = new female_score_F;
            $this->hi = new female_score_Hi;
            $this->hs = new female_score_Hs;
            $this->is = new female_score_Is;
            $this->k = new female_score_K;
            $this->l = new female_score_L;
            $this->ma = new female_score_Ma;
            $this->mf = new female_score_Mf;
            $this->pa = new female_score_Pa;
            $this->pt = new female_score_Pt;
        }
    }

    function collect($count = array()){
        $score = [
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
        ];
        return $score;
    }
}
?>