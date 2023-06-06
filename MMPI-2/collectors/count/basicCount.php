<?php
include_once('countMMPI.php');
include_once('../Scales/basicScales/scale_D.php');
include_once('../Scales/basicScales/scale_Dp.php');
include_once('../Scales/basicScales/scale_Es.php');
include_once('../Scales/basicScales/scale_F.php');
include_once('../Scales/basicScales/scale_Hi.php');
include_once('../Scales/basicScales/scale_Hs.php');
include_once('../Scales/basicScales/scale_Is.php');
include_once('../Scales/basicScales/scale_K.php');
include_once('../Scales/basicScales/scale_L.php');
include_once('../Scales/basicScales/scale_Ma.php');
include_once('../Scales/basicScales/scale_Mf_Female.php');
include_once('../Scales/basicScales/scale_Mf_Male.php');
include_once('../Scales/basicScales/scale_Pa.php');
include_once('../Scales/basicScales/scale_Pt.php');
include_once('../Scales/FactorK.php');

class basicCount extends countMMPI{

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
    private $mff;
    private $mfm;
    private $pa;
    private $pt;
    private $factorK;

    function __construct(){
        if($this->d == null){
            $this->d = new scale_D;
            $this->dp = new scale_Dp;
            $this->es = new scale_Es;
            $this->f = new scale_F;
            $this->hi = new scale_Hi;
            $this->hs = new scale_Hs;
            $this->is = new scale_Is;
            $this->k = new scale_K;
            $this->l = new scale_L;
            $this->ma = new scale_Ma;
            $this->mff = new scale_Mf_Female;
            $this->mfm = new scale_Mf_Male;
            $this->pa = new scale_Pa;
            $this->pt = new scale_Pt;
            $this->factorK = new FactorK;
        }
    }

    function collect(){
        $count = [
            'l' => parent::revision($this->l),
            'f' => parent::revision($this->f),
            'k' => parent::revision($this->k),
            'hs' => parent::revision($this->hs, $this->factorK),
            'd' => parent::revision($this->d),
            'hi' => parent::revision($this->hi),
            'dp' => parent::revision($this->dp, $this->factorK)
        ];

        if($_SESSION['gender'] == 'Masculino'){
            $count['mf'] = parent::revision($this->mfm);
        }else{
            $count['mf'] = parent::revision($this->mff);
        }

        $count['pa'] = parent::revision($this->pa);
        $count['pt'] = parent::revision($this->pt, $this->factorK);
        $count['es'] = parent::revision($this->es, $this->factorK);
        $count['ma'] = parent::revision($this->ma, $this->factorK);
        $count['is'] = parent::revision($this->is);

        return $count;
    }
}
?>